<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Sistem Pengaduan Kendala</title>
    <link rel="shortcut icon" href="images/">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- font Awesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Main Styles CSS -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

        <div class="shadow">
            <nav class="navbar navbar-fixed navbar-inverse form-shadow">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="home">
                            <img alt="Brand" src="images/h.png">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="home">HOME</a></li>
                            <li class="active"><a href="pengaduan">PENGADUAN KENDALA</a></li>
                            <li><a href="lihat">LIHAT PENGADUAN</a></li>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>


            <!-- content -->
            <div class="main-content">
                <h3>LAPORKAN KENDALA</h3>
                <hr/>
                <div class="row">
                    <div class="col-lg">
                    <div class="col-md-8 card-shadow form-custom">
                        <form class="form-horizontal" role="form" method="post" action="home">
                            <div class="form-group">
                                <label for="nomor" class="col-sm-3 control-label">Nomor Inet</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-exclamation-sign"></span></div>
                                        <input type="text" class="form-control" id="nomor" name="nomor"placeholder="Nomor Inet" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nama" class="col-sm-3 control-label">Nama</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="telpon" class="col-sm-3 control-label">Telpon</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></div>
                                        <input type="text" class="form-control" id="telpon" name="telpon" placeholder="087123456789" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="desa" class="col-sm-3 control-label">Alamat</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-home"></span></div>
                                        <input type="text" class="form-control" id="Alamat" name="Alamat" placeholder="Alamat" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="kecamatan" class="col-sm-3 control-label">Tanggal Pengaduan</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></div>
                                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="Tanggal Pengaduan" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="pengaduan" class="col-sm-3 control-label">Isi Pengaduan Kendala</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                                        <textarea class="form-control" rows="4" name="pengaduan" placeholder="Tuliskan Isi Pengaduan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10 col-sm-offset-3">
                                    <input id="submit" name="submit" type="submit" value="Kirim" class="btn btn-primary form-shadow">
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <hr>
            </div>

            <!-- Footer -->
            <footer class="footer text-center">
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
                <div class="container">
                    <small>Bella Chaerunisa | Sistem Pengaduan Kendala</small>
                </div>
            </div>
            <!-- shadow -->
        </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.js"></script>

</body>

</html>
