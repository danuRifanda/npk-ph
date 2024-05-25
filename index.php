<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TAGRINOV</title>
        <!-- fav icon -->
        <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <!-- animated-css -->
        <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
        <!-- font-awesome-css -->
        <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <!-- owl-carrosel-css -->
        <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
        <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
        <!-- offcanvas-menu-css -->
        <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
        <!-- style-css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">
        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script src="https://cdn.datatables.net/2.0.5/js/dataTables.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="jquery/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                setInterval(function(){
                    $("#nitrogen").load("ambilNitrogen.php");
                    $("#phosfor").load("ambilPhosfor.php");
                    $("#kalium").load("ambilKalium.php");
                    $("#ph").load("ambilPh.php");
                    $("#prediksi").load("cekprediksi.php");
                }, 1000);
            })
        </script>
    </head>
    <body class="homePageThree">
        <header class="header-section">
            <div class="container">
                <div class="top-bar"></div>
                <nav class="navbar">
                    <div class="container">
                        <!-- <div class="navbar-header">
                            <a class="navbar-brand" href="index.php"><img src="" alt=""></a>
                        </div> -->
                        <div class="collapse navbar-collapse navbar-right">
                            <ul class="nav navbar-nav" style="display:inline; margin-left:10px;">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#tentang">Tentang</a></li>
                                <li><a href="#galeri">Galeri</a></li>
                                <li><a href="#iot">Monitoring</a></li>
                            </ul>
                        </div>
                    </div> 
                </nav>
                <!-- <div class="small-view navbar-header inline-block visible-sm visible-xs">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/logo-m.png" alt="image">TAGRINOV</a>
                </div> -->
            </div>
        </header> <!-- header-section -->


        <section class="slider-section">
            <h2 class="hidden">title</h2>

            <div class="main-slider">
                <div id="main-slider-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <!-- <div class="item active">
                            <div class="slider-one"></div>

                            <div class="content text-center"> 
                                <div class="large-text" data-animation="animated fadeInDown">We provide most authentic <br> landscaping service</div>

                                <div class="guard">
                                    <p class="small-text" data-animation="animated fadeInDown">If the unpredictable British weather isn't enough to counter your <br> desire to work outside, gardening is a great industry to get <br> involved in.</p>
                                </div>

                                <div class="link-button" data-animation="animated fadeInUp">
                                    <a href="#" class="btn btn-primary">Our Services</a>
                                </div>
                            </div>
                        </div> -->

                        <div class="item active">
                            <div class="slider-two"></div>

                            <div class="content text-right">
                                <div class="large-text" data-animation="animated fadeInDown">Sistem Monitoring <br>Unsur Hara & Keasaman tanah </div>

                                <div class="guard">
                                    <p class="small-text" data-animation="animated fadeInLeft">Unsur hara pada tanaman sangat mempengaruhi pertumbuhan tanaman <br> keasaman tanah berpengaruh terhadap persebaran dari unsur hara tanah.</p>
                                </div>

                                <div class="link-button" data-animation="animated fadeInUp">
                                    <a href="#tentang" class="btn btn-primary">Tentang Alat</a>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="slider-three"></div>

                            <div class="content text-left">
                            <div class="large-text" data-animation="animated fadeInDown">Sistem Monitoring <br>Unsur Hara & Keasaman tanah </div>

                                <div class="guard">
                                <p class="small-text" data-animation="animated fadeInLeft">Unsur hara pada tanaman sangat mempengaruhi pertumbuhan tanaman <br> keasaman tanah berpengaruh terhadap persebaran dari unsur hara tanah.</p>
                                </div>

                                <div class="link-button" data-animation="animated fadeInUp">
                                    <a href="#tentang" class="btn btn-primary">Tentang Alat</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#main-slider-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>

                    <a class="right carousel-control" href="#main-slider-carousel" role="button" data-slide="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>  
            </div>
        </section> <!-- slider-section -->

        
        <section class="growing-section section-padding" id="tentang">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 visible-sm visible-xs">
                        <div class="caption">
                            <!-- <img style="widht: 30px; height:auto" src="assets/images/slider/1.png" alt=""> -->
                        </div>
                    
                    </div>

                    <div class="col-md-7 col-sm-12">
                        <div class="content-wrapper">
                            <h3>Tentang</h3>
                            <!-- <img src="assets/images/slider/2.png" alt=""> -->
                            <p class="">Bayam merupakan sayuran hijau yang memiliki banyak manfaat bagi kesehatan dan perkembangan tubuh, terutama bagi anak-anak dan ibu hamil. Dalam mendapatkan kualitas bayam hijau yang berkualitas
                                perlu mempertimbangkan dua faktor utama yaitu nutrisi dan keasaman tanah. Alat ini hadir dalam memantau status ketersediaan unsur hara NPK dan keasaman tanah atau pH. Alat monitoring berbasis IoT dapat 
                                mendapatkan nilai secara realtime dan akurat sehingga memudahkan para petani dalam memantau status NPK dan pH pada tanah mereka.
                            </p>
                            <!-- <button class="btn btn-primary">Read More</button>

                            <button class="btn btn-default">Our History</button> -->
                        </div> <!-- content-wrapper -->
                    </div>

                    <div class="col-md-5 hidden-sm hidden-xs">
                        <div class="caption wow slideInRight" data-wow-delay="0.2s">
                            <img style="height: 500px; width: auto" src="assets/images/alat/depan.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> <!-- growing-section -->
        

        <section class="project-section section-padding" id="galeri">
            <div class="container text-center">
                <div class="section-title text-center">
                    <h2>Dokumen <span class="text-color">Foto</span></h2>
                </div> <!-- section-title -->
                
                <div class="portfolio gallery-grid">
                    <div class="row">
                        <!-- <ul class="portfolio-sorting gallery-button list-inline text-center"> -->
                            <!-- <li><a href="#" data-group="all" class="filter-btn active">All</a></li> -->
                            <!-- <li><a class="filter-btn" href="#" data-group="people">Landscaping</a></li>
                            <li><a class="filter-btn" href="#" data-group="simpsons">Gardening</a></li>
                            <li><a class="filter-btn" href="#" data-group="futurama">Weed Control</a></li> -->
                        </ul> <!--end portfolio sorting -->

                        <div id="lightBox" class="gallery-wrapper">
                            <ul class="portfolio-items courses list-unstyled" id="grid">
                                <li class="col-md-4 col-sm-6" data-groups='["simpsons"]'>
                                    <figure class="portfolio-item gallery-caption">
                                        <img src="assets/images/alat/dalam.jpeg"  alt="">

                                        <div class="hover-view">
                                            <a href="assets/images/alat/dalam.jpeg"><i class="fa fa-picture-o" ></i></a>

                                            <span class="border-one"></span>
                                            <span class="border-two"></span>
                                            <span class="border-three"></span>
                                            <span class="border-four"></span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-md-4 col-sm-6" data-groups='["people"]'>
                                    <figure class="portfolio-item gallery-caption">
                                        <img src="assets/images/alat/depan.jpeg"  alt="">

                                        <div class="hover-view">
                                            <a href="assets/images/alat/depan.jpeg"><i class="fa fa-picture-o"></i></a>

                                            <span class="border-one"></span>
                                            <span class="border-two"></span>
                                            <span class="border-three"></span>
                                            <span class="border-four"></span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-md-4 col-sm-6" data-groups='["futurama"]'>
                                    <figure class="portfolio-item gallery-caption">
                                        <img src="assets/images/alat/kanan.jpeg"  alt="">

                                        <div class="hover-view">
                                            <a href="assets/images/alat/kanan.jpeg"><i class="fa fa-picture-o"></i></a>

                                            <span class="border-one"></span>
                                            <span class="border-two"></span>
                                            <span class="border-three"></span>
                                            <span class="border-four"></span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-md-4 col-sm-6" data-groups='["futurama"]'>
                                    <figure class="portfolio-item gallery-caption">
                                        <img src="assets/images/alat/kiri.jpeg"  alt="">

                                        <div class="hover-view">
                                            <a href="assets/images/alat/kiri.jpeg"><i class="fa fa-picture-o"></i></a>

                                            <span class="border-one"></span>
                                            <span class="border-two"></span>
                                            <span class="border-three"></span>
                                            <span class="border-four"></span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-md-4 col-sm-6" data-groups='["simpsons"]'>
                                    <figure class="portfolio-item gallery-caption">
                                        <img src="assets/images/alat/mengukur ketinggian.jpeg"  alt="">

                                        <div class="hover-view">
                                            <a href="assets/images/alat/mengukur ketinggian.jpeg"><i class="fa fa-picture-o"></i></a>

                                            <span class="border-one"></span>
                                            <span class="border-two"></span>
                                            <span class="border-three"></span>
                                            <span class="border-four"></span>
                                        </div>
                                    </figure>
                                </li>

                                <li class="col-md-4 col-sm-6" data-groups='["people"]'>
                                    <figure class="portfolio-item gallery-caption">
                                        <img src="assets/images/alat/pengujian.jpeg"  alt="">

                                        <div class="hover-view">
                                            <a href="assets/images/alat/pengujian.jpeg"><i class="fa fa-picture-o"></i></a>

                                            <span class="border-one"></span>
                                            <span class="border-two"></span>
                                            <span class="border-three"></span>
                                            <span class="border-four"></span>
                                        </div>
                                    </figure>
                                </li>
                            </ul> <!--end portfolio grid -->
                        </div> <!-- gallery-wrapper -->
                    </div> <!--end row -->
                </div>
            </div> <!-- container -->
        </section> <!-- project-section -->


        <section class="service-section service-section-two section-padding" id="iot">
           <div class="container">
           <div class="section-title text-center">
                <h2>Realtime <span class="text-color">Monitoring</span></h2>
                <p>Berikut ini merupakan tampilan nilai dari sensor beserta prediksi tinggi bayam umur 21 hari.</p>
                <br>
            </div> <!-- section-title -->
            <div class="row">
                    <div class="col-xl-3 col-lg-6">
                        <div class="card l-bg-green-dark">
                            <div class="card-statistic-3 p-4">
                                <!-- <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Nitrogen</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-12 text-right">
                                        <h2 class="text-dark">
                                            <span id="nitrogen">0</span>
                                            Mg/L
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card l-bg-green-dark">
                            <div class="card-statistic-3 p-4">
                                <!-- <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Phosfor</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-12 text-right">
                                        <h2 class="text-dark">
                                            <span id="phosfor">0</span>
                                            Mg/L
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card l-bg-green-dark">
                            <div class="card-statistic-3 p-4">
                                <!-- <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Kalium</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-12 text-right">
                                        <h2 class="text-dark">
                                            <span id="kalium">0</span>
                                            Mg/L
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6">
                        <div class="card l-bg-green-dark">
                            <div class="card-statistic-3 p-4">
                                <!-- <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">pH</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-12 text-right">
                                        <h2 class="text-dark">
                                            <span id="ph">0</span>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-6">
                        <div class="card l-bg-green-dark">
                            <div class="card-statistic-3 p-4">
                                <!-- <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div> -->
                                <div class="mb-4">
                                    <h5 class="card-title mb-0">Prediksi Tinggi Tanaman</h5>
                                </div>
                                <div class="row align-items-center mb-2 d-flex">
                                    <div class="col-12 text-right">
                                        <h2 class="text-dark">
                                            <span id="prediksi">0</span>
                                            Cm
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
           
        </section> <!-- service-section -->

        <section class="project-section service-section-two section-padding" id="Data">
           <div class="container">
           <div class="section-title text-center" >
                <h2>Tabel <span class="text-color">Monitoring</span></h2>
                <p>Berikut ini merupakan tabel nilai sensor yang tersimpan di database.</p>
            </div> <!-- section-title -->
            <!-- <div class="row"> -->
                    <div class="col-xl-12 col-lg-6">
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <table id="tabel" class="table table-sm table-centered mb-0">
                                    <thead>
                                        <tr>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Waktu</th>
                                            <th scope="col">Nitrogen</th>
                                            <th scope="col">Phosfor</th>
                                            <th scope="col">Kalium</th>
                                            <th scope="col">pH</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM tb_sensor";
                                        $query = mysqli_query($koneksi, $sql);
                                        while ($row = mysqli_fetch_array($query)){
                                        ?>
                                        <tr>
                                            <td><?php echo $row['tanggal']?></td>
                                            <td><?php echo $row['waktu']?></td>
                                            <td><?php echo $row['nitrogen']?></td>
                                            <td><?php echo $row['phosfor']?></td>
                                            <td><?php echo $row['kalium']?></td>
                                            <td><?php echo $row['ph']?></td>
                                        </tr>
                                        <?php
                                        } if (mysqli_num_rows($query) == 0) {
                                            echo '<tr><td colspan="6" class="text-center">Tidak ada data.</td></tr>';
                                        }?>
                                    </tbody>
                                </table>
                                
                            </div> <!-- end table-responsive-->

                        </div> <!-- end card body-->
                    </div>
                </div>
           </div>
           
        </section> <!-- service-section -->

        <!-- <section class="double-section">
            <div class="container">
                <h2 class="hidden">title</h2>

                <div class="row">
                    <div class="col-md-12">
                        <div class="partner-section">
                            <div class="partner-wrapper">
                                <ul class="text-center">
                                    <li class="wow zoomIn"><img src="assets/images/partner/p1.jpg" alt=""></li>
                                    <li class="wow zoomIn" data-wow-delay="0.1s"><img src="assets/images/partner/p2.jpg" alt=""></li>
                                    <li class="wow zoomIn" data-wow-delay="0.2s"><img src="assets/images/partner/p3.jpg" alt=""></li>
                                    <li class="wow zoomIn" data-wow-delay="0.3s"><img src="assets/images/partner/p4.jpg" alt=""></li>
                                    <li class="wow zoomIn" data-wow-delay="0.4s"><img src="assets/images/partner/p5.jpg" alt=""></li>
                                </ul>
                            </div> 
                        </div> 
                    </div>
                </div>
            </div>
        </section>  -->




        <footer class="footer-section">

            <div class="second-footer" id="contact">

                <div class="copy-right text-center">
                    <p>2024 &copy; All Rights Reserved by <a href="#">Tagrinov 4.0</a></p>
                </div> <!-- copy-right -->
            </div> <!-- second-footer -->
        </footer> <!-- footer-section -->


       

        <!-- Off-Canvas View Only -->
        <span class="menu-toggle navbar visible-xs visible-sm"><i class="fa fa-bars" aria-hidden="true"></i></span>

        <div id="offcanvas-menu" class="visible-xs visible-sm">
            
            <span class="close-menu"><i class="fa fa-times" aria-hidden="true"></i></span>

            <ul class="menu-wrapper">
                <li>
                    <a class="active" href="index.php">Home <i aria-hidden="true"></i></a>
                </li>

                <li>
                    <a class="" href="#tentang">Tentang <i aria-hidden="true"></i></a>
                </li><!-- end of li -->

                <li>
                    <a class="" href="#galeri">Galeri <i aria-hidden="true"></i></a>
                    
                </li><!-- end of li -->

                <li>
                    <a class="" href="#iot">Data Monitoring<i aria-hidden="true"></i></a>
                </li><!-- end of li -->
            </ul> <!-- menu-wrapper -->      
        </div>
        <!-- Off-Canvas View Only -->

        <div id="toTop" class="hidden-xs">
            <i class="fa fa-chevron-up"></i>
        </div> <!-- totop -->


        <script src="assets/js/jquery.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.inview.min.js"></script>
        <script src="assets/js/portfolio.js"></script>
        <script src="assets/js/wow.js"></script>
        <script src="assets/js/lightbox.js"></script>
        <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
        <script src="assets/js/slider.js"></script>
        <script src="assets/js/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script>
            new DataTable('#tabel', {
                layout: {
                    topStart: {
                        buttons: [
                            {
                                extend: 'pdfHtml5',
                                text: 'Download',
                                exportOptions: {
                                    modifier: {
                                        page: 'current'
                                    }
                                }
                            }
                        ]
                    },
                    bottomEnd: {
                        paging: {
                            boundaryNumbers: false
                        }
                    }
                }
            });
        </script>

         <!-- Datatables js -->
        <script src="assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/vendor/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/vendor/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-fixedcolumns-bs5/js/fixedColumns.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/vendor/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/vendor/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/vendor/datatables.net-select/js/dataTables.select.min.js"></script>

        <script>
            // new DataTable('#tabel', {
            //     info: true,
            //     ordering: true,
            //     paging: true,
            //     searching: true,
            // });
        </script>

    </body>
</html>