<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Warung Kita</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/logo_wk.png" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
    <header class="main-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="/"><img src="images/logo+text.png" class="logo"
                            alt=""></a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        <li class="search mt-2"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb"
                                    alt="" /></a>
                            <h6><a href="#">Kerajinan Dompet/Tas </a></h6>
                            <p>1x - <span class="price">Rp 50.000</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb"
                                    alt="" /></a>
                            <h6><a href="#">Kerajinan Dompet Cantik</a></h6>
                            <p>1x - <span class="price">Rp 79.000</span></p>
                        </li>
                        <li>
                            <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb"
                                    alt="" /></a>
                            <h6><a href="#">Kuliner Makanan Ringan</a></h6>
                            <p>1x - <span class="price">Rp 38.000</span></p>
                        </li>
                        <li class="total">
                            <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>:Rp 167.000</span>
                        </li>
                    </ul>
                </li>
            </div>
        </nav>
    </header>

    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>

    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/banner-01.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Selamat Datang di <br> Warung Kita</strong></h1>
                            <p class="m-b-40">Temukan Produk Lokal Terbaik di Warung Kita!.</p>
                            <p><a class="btn hvr-hover" href="{{ route('register') }}">Daftar Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-02.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Selamat Datang di <br> Warung Kita</strong></h1>
                            <p class="m-b-40">Temukan Produk Lokal Terbaik di Warung Kita!.</p>
                            <p><a class="btn hvr-hover" href="{{ route('register') }}">Daftar Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/banner-03.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Selamat Datang di <br> Warung Kita</strong></h1>
                            <p class="m-b-40">Temukan Produk Lokal Terbaik di Warung Kita!.</p>
                            <p><a class="btn hvr-hover" href="{{ route('register') }}">Daftar Sekarang</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>

    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/seblak.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Seblak Teh Nisya</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/kamera.jpg" alt="" />
                        <a class="btn hvr-hover" href="#">Lens Production</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/skincare.png" alt="" />
                        <a class="btn hvr-hover" href="#">Acel Skincare</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Temukan Berbagai Produk Unggulan</h1>
                        <p>Dari makanan dan minuman, kerajinan tangan, hingga fashion dan aksesoris, semuanya ada di
                            sini. Belanja sekarang dan rasakan sensasi produk lokal yang unik dan istimewa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button class="active" data-filter="*">All</button>
                            <button data-filter=".top-featured">Unggulan teratas</button>
                            <button data-filter=".best-seller">Penjualan terbaik</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list">
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Penjualan</p>
                            </div>
                            <img src="images/img-pro-01.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Masukkan ke keranjang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Kerajinan Dompet/Tas</h4>
                            <h5> Rp 50.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Baru</p>
                            </div>
                            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Masukkan ke keranjang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Kerajinan Dommpet Cantik</h4>
                            <h5> Rp 79.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Penjualan</p>
                            </div>
                            <img src="images/img-pro-03.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Masukkan ke keranjang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Kuliner Makanan Ringan</h4>
                            <h5>Rp 38.000</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale">Penjualan</p>
                            </div>
                            <img src="images/img-pro-04.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="right"
                                            title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" href="#">Masukkan ke keranjang</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Pakain</h4>
                            <h5> Rp 180.000</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Bergabung dengan Komunitas Kami</h1>
                        <p>Kami tidak hanya tempat berbelanja, tetapi juga komunitas. Bergabunglah dengan kami untuk
                            mendapatkan berbagai tips, promo, dan informasi terkini tentang dunia UMKM.

                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/toko-baju.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Toko Baju Faridz Kurniawan</h3>
                                <p>Untuk mewujudkan jadi pengusaha muda sukses, dibutuhkan banyak usaha dan juga kerja
                                    keras, karena kesuksesan tidak akan
                                    didapatkan dengan mudah, apalagi di usia yang masih muda.

                                    Bagi Faridz Kurniawan, menjadi seorang pengusaha adalah jalan hidupnya. Pernah gagal
                                    di bangku kuliah, namun Faridz
                                    berhasil dalam bidang usaha dengan membuka toko pakaian.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/warung-madura.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Warung Madura Habib Ja'far</h3>
                                <p>Warung Madura adalah toko kelontong yang setiap harinya dikunjungi oleh masyarakat
                                    sekitar untuk membeli kebutuhan pokok sehari hari.
                                    Warung ini selalu ramai pembeli karena murahnya harga dibanding warung lain.
                                    Warung madura juga terkenal jam kerjanya yaitu 24 jam alias tidak pernah tutup
                                    kecuali hari kiamat.
                                    begitulah pendapat menurut masyarakat sekitar.
                                </p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/bebek-carok.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Bebek Carok Tretan Muslim</h3>
                                <p>Prestasi Tretan Muslim dalam dunia komedi membawa dampak positif pada usaha kuliner
                                    yang dijalankannya. Tretan Muslim
                                    membuka tempat makan dengan nama Bebek Carok.
                                    Bebek Carok Tretan Muslim ini telah tersebar di beberapa kota di Indonesia. Salah
                                    satunya adalah yang berada di Kediri.
                                    Tempat ini menawarkan beragam hidangan daging bebek dengan rempah khas Madura yang
                                    pedas sehingga menarik minat banyak
                                    orang sehingga menciptakan antrian panjang yang menarik perhatian.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Tentang Warung Kita</h4>
                            <p>Kami percaya bahwa UMKM adalah tulang punggung perekonomian lokal dan memiliki
                                potensi
                                besar untuk berkembang. Dengan semangat kolaborasi dan inovasi, Warung Kita hadir
                                untuk
                                membantu UMKM mencapai kesuksesan.</p>
                            <p>Misi kami adalah untuk memberdayakan UMKM di seluruh Indonesia dengan menyediakan
                                platform yang mudah diakses dan mendukung pertumbuhan bisnis mereka. </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Informasi</h4>
                            <ul>
                                <li><a href="#">Tentang kami</a></li>
                                <li><a href="#">Pelayanan pelanggan</a></li>
                                <li><a href="#">Peta Situs kami</a></li>
                                <li><a href="#">Ketentuan &amp; Kondisi</a></li>
                                <li><a href="#">Kebijakan pribadi</a></li>
                                <li><a href="#">informasi pengiriman</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Hubungi kami</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Alamat: Bogor, Jawa Barat,
                                        Indonesia<br>Jalan sudirman,<br> </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telepon: <a href="tel:+1-888705770">+62-888
                                            705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a
                                            href="mailto:contactinfo@gmail.com">Warkitinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="footer-copyright">
        <p class="footer-company">Copyright &copy; 2024 | <a href="index.html">Warung Kita</a> | All Rights Reserved
        </p>
    </div>


    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
