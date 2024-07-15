<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Warung Kita | About Us</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo_wk.png" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu"
                        aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo+text.png" class="logo"
                            alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="/about">About Us</a></li>
                        <li class="dropdown">
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        <li class="search mt-2"><a href="#"><i class="fa fa-search"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- Start Side Menu -->
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
                            <a href="#" class="btn btn-default hvr-hover btn-cart">LIHAT KERANJANG</a>
                            <span class="float-right"><strong>Total</strong>: 167.000</span>
                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Tentang Kami</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tentang Kami</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="images/about-img.jpg" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top">We are <span>Warung Kita</span></h2>
                    <p>"Warung Kita adalah platform yang didedikasikan untuk memberdayakan dan mempromosikan Usaha
                        Mikro, Kecil, dan Menengah (UMKM) di Indonesia. Kami percaya bahwa UMKM adalah tulang punggung
                        perekonomian lokal dan memiliki potensi besar untuk berkembang. Dengan semangat kolaborasi dan
                        inovasi, Warung Kita hadir untuk membantu UMKM mencapai kesuksesan.</p>
                    <p>Misi kami adalah untuk memberdayakan UMKM di seluruh Indonesia dengan menyediakan platform yang
                        mudah diakses dan mendukung pertumbuhan bisnis mereka. Kami berkomitmen untuk menghubungkan
                        produk-produk lokal berkualitas dengan konsumen yang menghargai keunikan dan nilai dari setiap
                        produk.</p>
                    <a class="btn hvr-hover" href="#">Baca selengkapnya</a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>We are Trusted</h3>
                        <p>Di Warung Kita, kepercayaan Anda adalah prioritas utama kami. Kami berkomitmen untuk
                            menyediakan produk-produk berkualitas tinggi
                            dari UMKM terbaik di seluruh Indonesia. Dengan proses seleksi yang ketat dan standar yang
                            tinggi, kami memastikan setiap produk yang
                            Anda beli memenuhi harapan Anda. Kami juga menjunjung tinggi transparansi dalam setiap
                            transaksi, memberikan layanan yang jujur dan
                            terbuka untuk menciptakan pengalaman berbelanja yang aman dan memuaskan. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Kami Profesional</h3>
                        <p>Di Warung Kita, kami menjunjung tinggi profesionalisme dalam setiap aspek layanan kami. Tim
                            kami terdiri dari individu-individu berpengalaman yang berdedikasi untuk memberikan
                            pengalaman berbelanja terbaik
                            bagi Anda. Dari seleksi produk hingga layanan pelanggan, kami memastikan setiap langkah
                            dilakukan dengan cermat dan profesional. Kami berkomitmen untuk mendukung UMKM dengan
                            layanan yang efisien dan responsif,
                            sehingga Anda dapat menikmati produk-produk berkualitas dengan tenang dan nyaman.

                        </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Kami Ahli</h3>
                        <p>Di Warung Kita, kami adalah ahli dalam mendukung dan mempromosikan produk UMKM berkualitas
                            tinggi. Dengan pengetahuan mendalam dan pengalaman luas di industri ini, kami mampu memilih
                            produk-produk
                            terbaik yang sesuai dengan kebutuhan dan selera Anda. Kami bekerja sama dengan UMKM
                            terkemuka untuk memastikan bahwa setiap produk yang kami tawarkan memenuhi standar
                            tertinggi. Keahlian kami
                            adalah jaminan Anda untuk mendapatkan produk unggulan dan layanan terbaik. </p>
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-12">
                    <h2 class="noo-sh-title">Pembina UMKM Professional</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/syawal.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Syawal Azmi</h3> <span class="post">Barista</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Syawal Azmi adalah seorang barista profesional yang menguasai seni meracik kopi dengan
                                keahlian dan dedikasi tinggi. Seorang barista adalah individu yang terlatih dalam
                                menyiapkan dan menyajikan berbagai jenis minuman kopi, seringkali dengan fokus pada
                                kualitas, rasa, dan presentasi. Sebagai seorang ahli dalam bidangnya, Syawal Azmi mampu
                                menciptakan pengalaman minum kopi yang istimewa bagi setiap pelanggan, menggabungkan
                                teknik-teknik canggih dengan sentuhan personal untuk menghasilkan secangkir kopi yang
                                sempurna.</p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/renti.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Renti Apriyani</h3> <span class="post">Skincare Specialist</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Nama saya Renti, seorang skincare specialist professional dengan keahlian mendalam dalam
                                merawat dan memperbaiki kesehatan kulit. Sebagai seorang ahli di bidang perawatan kulit,
                                saya mengkhususkan diri dalam analisis kulit, rekomendasi produk yang tepat, serta
                                perawatan kulit wajah dan tubuh yang efektif. Bidang skincare specialist berfokus pada
                                pemahaman mendalam tentang berbagai jenis kulit, kondisi kulit seperti jerawat, penuaan,
                                dan hiperpigmentasi, serta metode perawatan yang sesuai untuk setiap masalah tersebut.
                                Dengan pengetahuan yang terus diperbarui tentang tren dan teknologi terbaru dalam
                                skincare, saya berkomitmen untuk memberikan hasil terbaik bagi setiap klien.</p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/alip.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Alifani</h3> <span class="post">Chef</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Alifani adalah seorang chef profesional yang ahli dalam seni kuliner. Bidang ini
                                melibatkan keterampilan memasak, kreativitas dalam menyusun menu, dan pemahaman mendalam
                                tentang bahan makanan dan teknik memasak. Seorang chef profesional bertanggung jawab
                                untuk mengatur dapur, memimpin tim kuliner, dan memastikan kualitas serta konsistensi
                                setiap hidangan yang disajikan. Dengan pengalaman dan dedikasi yang tinggi, Alifani
                                terus menciptakan kreasi kuliner yang memanjakan lidah dan memberikan pengalaman
                                gastronomi yang tak terlupakan bagi para pelanggannya.</p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/hilmy.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Muhammad Hilmy</h3> <span class="post">Skincare Specialist</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Nama saya Hilmy, saya adalah seorang ahli dalam seni memotong
                                dan merawat rambut serta kumis pria. Dengan keahlian dalam berbagai gaya potongan rambut
                                dan pemahaman mendalam tentang tekstur rambut dan bentuk wajah, seorang berber tidak
                                hanya menghasilkan tampilan yang rapi dan modis, tetapi juga memperhatikan kenyamanan
                                dan kepuasan pelanggan mereka. Mereka tidak hanya menjalankan tugasnya dengan cermat,
                                tetapi juga sering kali menjadi tempat untuk berbagai percakapan santai dan konsultasi
                                gaya, membuat pengalaman berbaring di kursi berber menjadi lebih dari sekadar kunjungan
                                rutin ke salon.</p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/ikhsan.png" alt="" />
                            <div class="team-content">
                                <h3 class="title">Ikhsan Fahillah</h3> <span class="post">Enterpreneur</span>
                            </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Nama saya Ikhsan, seorang entrepreneur profesional yang mengkhususkan diri dalam
                                menjual baju thrift. Bisnis thrift store atau toko barang bekas semakin populer karena
                                menawarkan pilihan fashion yang unik dan terjangkau, sambil mengurangi dampak lingkungan
                                dengan memanfaatkan kembali pakaian bekas. Sebagai seorang entrepreneur, Anda memainkan
                                peran penting dalam menyediakan pilihan fashion yang beragam dan terjangkau bagi
                                pelanggan, serta turut berkontribusi dalam mempromosikan kesadaran akan pentingnya
                                penggunaan ulang pakaian untuk keberlanjutan lingkungan.</p>
                        </div>
                        <hr class="my-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Page -->




    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Tentang Warung Kita</h4>
                            <p>Kami percaya bahwa UMKM adalah tulang punggung perekonomian lokal dan memiliki potensi
                                besar untuk berkembang. Dengan semangat kolaborasi dan inovasi, Warung Kita hadir untuk
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
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">Seluruh hak cipta. &copy; 2024 <a href="#">WarungKita</a> Desain oleh :
            <a href="https://html.design/">desain html</a>
        </p>
    </div>
    <!-- End copyright  -->

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
