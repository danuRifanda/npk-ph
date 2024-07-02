#include "WiFi.h"
#include <HTTPClient.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#include <SoftwareSerial.h>
LiquidCrystal_I2C lcd(0x27,16,2);
#define ph_Pin 34
#define BTN_PIN 13

float phValue = 0;
float PH_step;
int nilai_analog_PH;
double TeganganPh;
     
//untuk kalibrasi Ph
float PH4 = 6.65;
float PH7 = 7.23;

const byte nitro_inquiry_frame[] = {0x01,0x03, 0x00, 0x1e, 0x00, 0x01, 0xe4, 0x0c};
const byte phos_inquiry_frame[] = {0x01,0x03, 0x00, 0x1f, 0x00, 0x01, 0xb5, 0xcc};
const byte pota_inquiry_frame[] = {0x01,0x03, 0x00, 0x20, 0x00, 0x01, 0x85, 0xc0};
byte values[11];

SoftwareSerial modbus(16,17);

#define RE 18  
#define DE 19
#define oneWireBus 33

// Your WiFi credentials.
// Set password to "" for open networks.
char* ssid              = "DUNIA SEMENTARA";
char* password          = "21052002";
char* host              = "tagrinovbogor.site";

void setup()
{
  // Debug console
  Serial.begin(9600);
  modbus.begin(9600);
  pinMode(RE, OUTPUT);
  pinMode(DE, OUTPUT);
  pinMode(BTN_PIN, INPUT_PULLUP);
  pinMode (ph_Pin, INPUT);
  lcd.init(); // initialize the lcd
  lcd.backlight();
  lcd.setCursor(1,0);
  lcd.print("Selamat Datang!");
  lcd.setCursor(2,1);
  lcd.print("BBPSIP BOGOR");
  delay(3000);
  lcd.clear();
  lcd.setCursor(0,0);
  lcd.print("Mencari Wifi");
  lcd.setCursor(0,1);
  lcd.print("...");
  WiFi.begin(ssid, password);
  Serial.println("conecting...");
  while(WiFi.status()!=WL_CONNECTED)
  {
    Serial.print(".");
    delay(500);
  }
  Serial.print("terhubung");
  lcd.clear();
}

void nitrogen_aja(){
  byte nitrogen_val;
  nitrogen_val = nitrogen();
  lcd.setCursor(2,0);
  lcd.print(nitrogen_val);
  lcd.print("   ");
  delay(250);
}
void fosfor_aja(){
  byte phosphorus_val;
  phosphorus_val = phosphorous();
  lcd.setCursor(8,0);
  lcd.print(phosphorus_val);
  lcd.print("   ");
  delay(250);
}
void kalium_aja(){
  byte potassium_val;
  potassium_val = potassium();
  lcd.setCursor(13,0);
  lcd.print(potassium_val);
  lcd.print("   ");
  delay(250);
}

void phmeter(){
  nilai_analog_PH = analogRead(ph_Pin);
  Serial.print("Nilai ADC Ph: ");
  Serial.println(nilai_analog_PH);
  TeganganPh = 3.3 / 1024.0 * nilai_analog_PH;
  Serial.print("TeganganPh: ");
  Serial.println(TeganganPh, 3);

  PH_step = (PH4 - PH7) / 3;
  phValue = 7.00 + ((PH7 - TeganganPh) / PH_step);//phValue = 7.00 + ((teganganPh7 - TeganganPh) / PhStep);
  Serial.print("Nilai PH cairan: ");
  Serial.println(phValue, 2);
  
  lcd.setCursor(3,1);
  lcd.printf("%.2f",phValue);
  lcd.print("   ");
  lcd.setCursor(9,1);
  lcd.print(TeganganPh, 3);
  lcd.print("   ");
  delay(500); 
}

void loop()
{
  byte val1,val2,val3;
  val1 = nitrogen();
  delay(250);
  val2 = phosphorous();
  delay(250);
  val3 = potassium();
  delay(250);
  
  nilai_analog_PH = analogRead(ph_Pin);
  TeganganPh = 3.3 / 1024.0 * nilai_analog_PH;

  PH_step = (PH4 - PH7) / 3;
  phValue = 7.00 + ((PH7 - TeganganPh) / PH_step);//phValue = 7.00 + ((teganganPh7 - TeganganPh) / PhStep);
  
  lcd.setCursor(0,1);
  lcd.print("pH: ");
  lcd.setCursor(3,1);
  lcd.print(phValue, 1);
  lcd.setCursor(8,1);
  lcd.print("V: ");
  lcd.setCursor(10,1);
  lcd.print(TeganganPh);
  lcd.setCursor(0,0);
  lcd.print("N: ");
  nitrogen_aja();
  lcd.setCursor(6,0);
  lcd.print("P: ");
  fosfor_aja();
  lcd.setCursor(11,0);
  lcd.print("K: ");
  kalium_aja();
  
  Serial.print("pH: ");
  Serial.println(phValue);
  Serial.print("Tegangan: ");
  Serial.println(TeganganPh);
  Serial.print("Nitrogen: ");
  Serial.print(val1);
  Serial.println(" mg/kg");
  Serial.print("Phosphorous: ");
  Serial.print(val2);
  Serial.println(" mg/kg");
  Serial.print("Potassium: ");
  Serial.print(val3);
  Serial.println(" mg/kg");
  String n = String(val1);
  String p = String (val2);
  String k = String (val3);
  String ph = String (phValue);

  String Link;
  HTTPClient http;
  Link = "https://" + String(host) + "/kirimdataRealtime.php?nitrogen=" + n + "&phosfor=" + p + "&kalium=" + k + "&ph=" + phValue;
  http.begin(Link);
  http.GET();
  String respon = http.getString();
  Serial.println(respon);

  if(digitalRead(BTN_PIN)== LOW){
     //Koneksi ke website
    lcd.clear();
    WiFiClient client;
    if(!client.connect(host, 80))
    {
      Serial.println("Conection Failed");
      lcd.setCursor(1,0);
      lcd.print("Koneksi gagal");
      return;
    }
  
    String Link;
    HTTPClient http;
    Link = "https://" + String(host) + "/kirimdataSimpan.php?nitrogen=" + n + "&phosfor=" + p + "&kalium=" + k + "&ph=" + phValue;
    http.begin(Link);
    http.GET();
    String respon = http.getString();
    Serial.println(respon);
    Serial.println(Link);
    lcd.setCursor(1,0);
    lcd.print(respon);
    delay(2000);
    lcd.clear();
    }
  delay(1000);
}

byte nitrogen(){
  digitalWrite(DE,HIGH);
  digitalWrite(RE,HIGH);
  delay(10);
  if(modbus.write(nitro_inquiry_frame,sizeof(nitro_inquiry_frame))==8){
    digitalWrite(DE,LOW);
    digitalWrite(RE,LOW);
    // When we send the inquiry frame to the NPK sensor, then it replies with the response frame
    // now we will read the response frame, and store the values in the values[] arrary, we will be using a for loop.
    for(byte i=0;i<7;i++){
    //Serial.print(modbus.read(),HEX);
    values[i] = modbus.read();
   // Serial.print(values[i],HEX);
    }
    Serial.println();
  }
  return values[4]; // returns the Nigtrogen value only, which is stored at location 4 in the array
}
 
byte phosphorous(){
  digitalWrite(DE,HIGH);
  digitalWrite(RE,HIGH);
  delay(10);
  if(modbus.write(phos_inquiry_frame,sizeof(phos_inquiry_frame))==8){
    digitalWrite(DE,LOW);
    digitalWrite(RE,LOW);
    for(byte i=0;i<7;i++){
    //Serial.print(modbus.read(),HEX);
    values[i] = modbus.read();
   // Serial.print(values[i],HEX);
    }
    Serial.println();
  }
  return values[4];
}
 
byte potassium(){
  digitalWrite(DE,HIGH);
  digitalWrite(RE,HIGH);
  delay(10);
  if(modbus.write(pota_inquiry_frame,sizeof(pota_inquiry_frame))==8){
    digitalWrite(DE,LOW);
    digitalWrite(RE,LOW);
    for(byte i=0;i<7;i++){
    //Serial.print(modbus.read(),HEX);
    values[i] = modbus.read();
    //Serial.print(values[i],HEX);
    }
    Serial.println();
  }
  return values[4];
}  
