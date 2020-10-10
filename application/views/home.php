<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sistem Pengaduan Kendala</title>
    <link rel="shortcut icon" href="images/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/font-awesome.min.css">
    <!-- Main Styles CSS -->
    <link href="<?= base_url('assets'); ?>/css/style.css" rel="stylesheet">
    <!-- jQuery -->
    <script src="<?= base_url('assets'); ?>/js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="<?= base_url('assets'); ?>/js/bootstrap.js"></script>
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.min.css">
</head>

<body>
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.11';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>

    <div class="shadow">
        <!-- navbar -->
        <nav class="navbar navbar-inverse navbar-fixed form-shadow">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">
                        <img alt="Brand" src="<?= base_url('assets'); ?>/images/h.png">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav nav-link">
                        <li class="active"><a href="<?= base_url('home'); ?>">HOME</a></li>
                        <li><a href="<?= base_url('home/pengaduan'); ?>">PENGADUAN KENDALA</a></li>
                        <li><a href="<?= base_url('home/lihat'); ?>">LIHAT PENGADUAN</a></li>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- end navbar -->

        <!-- start slider -->
        <div id="mainCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#mainCarousel" data-slide-to="1"></li>
                <li data-target="#mainCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?= base_url('assets'); ?>/images/m.jpg" alt="...">
                    <div class="carousel-caption welcome">
                        <h2 class="animated bounceInRight">Selamat Datang</h2>
                        <h3 class="animated bounceInLeft">Website Pengaduan Kendala Pengguna</h3>
                        <h4></h4>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#mainCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#mainCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- end Slider -->

            <!-- content -->
            <div class="main-content">
                <!-- section -->
                <div class="section">
                    <div class="row">

                        <div class="col-md-1"></div>
                        <!-- laporan Terbaru -->
                        <div class="col-md-10">
                            <br>
                            <h3 class="text-center">Pengaduan Terbaru</h3>
                            <hr class="custom-line" />

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="<?= base_url('assets'); ?>/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Wahid Ari</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                        nisl ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="<?= base_url('assets'); ?>/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Wahid Ari</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                        nisl ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="<?= base_url('assets'); ?>/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Wahid Ari</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                        nisl ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->

                            <div class="panel-body card-shadow">
                                <a class="media-left" href="#"><img class="img-circle img-sm form-shadow" src="<?= base_url('assets'); ?>/images/avatar1.png"></a>
                                <div class="media-body">
                                    <div>
                                        <a href="#" class="btn-link">Wahid Ari</a>
                                        <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                                    </div>
                                    <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
                                        erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis
                                        nisl ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <!-- media body -->
                            </div>
                            <!-- panel body -->
                        </div>
                        <!-- End Laporan Terbaru -->

                        <div class="col-md-1"></div>
                    </div>
                    <!-- end row -->
                </div>
                <!-- /.section -->

                <hr>
            </div>


            <!-- Footer -->
            <footer class="footer footer-bottom text-center">
                <div class="row">
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <i class="fa fa-top fa-map-marker"></i>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="text-uppercase mb-4">Kantor</h4>
                            </li>
                        </ul>
                        <p class="mb-0">
                            Jalan Soekarno-Hatta No 50
                            <br>Bangkalan, Jawa Timur
                        </p>
                    </div>
                    <div class="col-md-4 mb-5 mb-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <i class="fa fa-top fa-rss"></i>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="text-uppercase mb-4">Sosial Media</h4>
                            </li>
                        </ul>
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/dispendukcapilbkl/">
                                    <i class="fa fa-fw fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://twitter.com/disdukcapilbkl">
                                    <i class="fa fa-fw fa-twitter"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <i class="fa fa-top fa-envelope-o"></i>
                            </li>
                            <li class="list-inline-item">
                                <h4 class="text-uppercase mb-4">Kontak</h4>
                            </li>
                        </ul>
                        <p class="mb-0">
                            031-3095331 <br>
                            dispendukcapil@bangkalankab.go.id <br>
                            dispendukcapil.bangkalan@gmail.com
                        </p>
                    </div>
                </div>
            </footer>
            <!-- /footer -->

            <div class="copyright py-4 text-center text-white">
                <!-- <div class="container"> -->
                <small>Bella Chaerunisa | Sistem Pengaduan Kendala</small>
                <!-- </div> -->
            </div>
            <!-- shadow -->
        </div>

</body>

</html>