
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TakeCare</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/css/jquery.dataTables.css">

    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/dist/css/AdminLTE.min.css">

    <link rel="stylesheet " href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic ">
    <script src="https://adminlte.io/themes/AdminLTE/dist/js/adminlte.min.js "></script>

    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <style>
        html,
        body {
            padding-top: 30px;
            background-color: white;
            height: 100%;
            margin: 0;
        }
        
        .footer {
            padding: 50px 0 20px 0;
            background-color: #35404f;
            color: #878c94;
            position: absolute;
            left: 0;
            width: 100%;
        }
        
        .footer .title {
            text-align: left;
            color: #fff;
            font-size: 25 px;
        }
        
        .footer .social-icon {
            padding: 0px;
            margin: 0px;
        }
        
        .footer .social-icon a {
            display: inline-block;
            color: #fff;
            font-size: 25px;
            padding: 5px;
        }
        
        .footer .acount-icon a {
            display: block;
            color: #fff;
            font-size: 18px;
            padding: 5px;
            text-decoration: none;
        }
        
        .footer .acount-icon .fa {
            margin-right: 25px;
        }
        
        .footer .category a {
            text-decoration: none;
            color: #fff;
            display: inline-block;
            padding: 5px 20px;
            margin: 1px;
            border-radius: 4px;
            margin-top: 6px;
            background-color: #660000;
        }
        
        .footer .payment {
            margin: 0px;
            padding: 0px;
            list-style-type: none
        }
        
        .footer .payment li {
            list-style-type: none
        }
        
        .footer .payment li a {
            text-decoration: none;
            display: inline-block;
            color: #fff;
            float: left;
            font-size: 25px;
            padding: 10px 10px;
        }
        
        .index-content a:hover {
            color: black;
            text-decoration: none;
        }
        
        .index-content {
            margin-bottom: 20px;
            padding: 50px 0px;
        }
        
        .index-content .row {
            margin-top: 20px;
        }
        
        .index-content a {
            color: black;
        }
        
        .index-content .card {
            background-color: #FFFFFF;
            padding: 0;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 4px;
            box-shadow: 0 4px 5px 0 rgba(0, 0, 0, 0.14), 0 1px 10px 0 rgba(0, 0, 0, 0.12), 0 2px 4px -1px rgba(0, 0, 0, 0.3);
        }
        
        .index-content .card:hover {
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.3);
            color: black;
        }
        
        .index-content .card img {
            width: 100%;
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        
        .index-content .card h4 {
            margin: 20px;
        }
        
        .index-content .card p {
            margin: 20px;
            opacity: 0.65;
        }
        
        .index-content .blue-button {
            width: 100px;
            -webkit-transition: background-color 1s, color 1s;
            transition: background-color 1s, color 1s;
            min-height: 20px;
            background-color: #002E5B;
            color: #ffffff;
            border-radius: 4px;
            text-align: center;
            font-weight: lighter;
            margin: 0px 20px 15px 20px;
            padding: 5px 0px;
            display: inline-block;
        }
        
        .index-content .blue-button:hover {
            background-color: #dadada;
            color: #002E5B;
        }
        
        @media (max-width: 768px) {
            .index-content .col-lg-4 {
                margin-top: 20px;
            }
        }
        
        .paddingTB60 {
            padding: 60px 0px 60px 0px;
        }
        
        .gray-bg {
            background: #F1F1F1 !important;
        }
        
        .about-title {}
        
        .about-title h1 {
            color: #535353;
            font-size: 45px;
            font-weight: 600;
        }
        
        .about-title span {
            color: #AF0808;
            font-size: 45px;
            font-weight: 700;
        }
        
        .about-title h3 {
            color: #535353;
            font-size: 23px;
            margin-bottom: 24px;
        }
        
        .about-title p {
            color: #7a7a7a;
            line-height: 1.8;
            margin: 0 0 15px;
        }
        
        .about-paddingB {
            padding-bottom: 12px;
        }
        
        .about-icons {
            margin: 48px 0px 48px 0px;
        }
        
        .about-icons i {
            margin-right: 10px;
            padding: 0px;
            font-size: 35px;
            color: #323232;
            box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        }
        
        .about-icons li {
            margin: 0px;
            padding: 0;
            display: inline-block;
        }
        
        #social-fb:hover {
            color: #3B5998;
            transition: all .001s;
        }
        
        #social-tw:hover {
            color: #4099FF;
            transition: all .001s;
        }
        
        #social-gp:hover {
            color: #d34836;
            transition: all .001s;
        }
        
        #social-em:hover {
            color: #f39c12;
            transition: all .001s;
        }
        
        .carousel-inner img {
            width: 100%;
            min-height: 200px;
        }
        
        .carousel-caption {
            width: 500px;
            z-index: 100;
            color: #fff;
            text-align: center;
            top: 50%;
            left: 27%;
            bottom: auto;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
        }
        
        @media (max-width: 600px) {
            .carousel-caption {
                display: none;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><img style="max-width:100px; margin-top: -2px " src="http://localhost/TakeCare/assets/img/tclogo.png" width="200px" height="25px" ></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url('auth/log') ?>">Beranda</a></li>
            <li><a href="<?php echo base_url('auth/log') ?>">Tanya Dokter</a></li>
            <li><a href="<?php echo base_url('auth/log') ?>">Hubungi Kami</a></li>
            <li><a href="<?php echo base_url('auth/log') ?>">Tentang Kami</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url('auth/log') ?>">Login</a></li>
        </ul>
    </div>
</div>    </nav>
    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="http://localhost/TakeCare/assets/img/dokter1.jpg" alt="Image">
            <div class="carousel-caption">
                <h1 style="color: black;">Buat Janji Mudah dan Cepat</h1>
                <p style="color: black;">Layanan Tanya Dokter Terbaik di Indonesia</p>
            </div>
        </div>

        <div class="item">
            <img src="http://localhost/TakeCare/assets/img/dokter2.jpg" alt="Image">
            <div class="carousel-caption">
                <h1 style="color: black;">TakeCare</h1>
                <p style="color: black;">Caring with heart.</p>
            </div>
        </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<br>
<div class="row">
    <div class="col-lg-6">
        <div class="small-box bg-aqua" style="">
            <div class="inner">
                <h3 style="text-align: left; font-size: 30px;">Chat bersama Dokter</h3>
                <p style="text-align: left;">Respon Cepat. Jawaban Akurat. Tanya Dokter kapan pun,
                    <br> dimana pun.
                    <br>
                    <br> Chat sekarang!</p>
            </div>
            <div class="icon">
                <i class="fa   fa-user-md"></i>
            </div>
            <a href="<?php echo base_url('auth/log') ?>" class="small-box-footer">Lihat semua dokter <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-6 ">
        <div class="small-box bg-red" style="">
            <div class="inner">
                <h3 style="text-align: left;font-size: 30px;">TakeCare Shop</h3>
                <p style="text-align: left;">Bekerja sama dengan Apotek Century, kini TakeCare
                    <br> memudahkan Anda untuk membeli obat secara efektif
                    <br> dan efisien.
                    <br></br>
                </p>
            </div>
            <div class="icon">
                <i class="fa  fa-medkit"></i>
            </div>
            <a href="<?php echo base_url('auth/log') ?>" class="small-box-footer">Lihat semua obat <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>
<div class="container">
    <h3>Artikel kesehatan terkini untuk anda</h3>
    <hr>

    <div class="index-content">
        <a href="#">
            <div class="col-lg-3">
                <div class="card">
                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_300,h_166,c_fill/v1587120047/attached_image/jangan-sering-dimarahi-ini-dampak-yang-akan-terjadi-pada-anak-3.jpg">
                    <h4>Jangan Sering Dimarahi, Ini Dampak yang Akan Terjadi pada Anak</h4>
                    <p>Ketika anak melakukan sebuah kesalahan, sebagian ibu tanpa sadar bisa kelepasan dan langsung memarahi anak mereka. Namun, tahukah Bunda ada dampak buruk yang bisa terjadi pada Si Kecil jika sering dimarahi?</p>
                    <a href="blog-ici.html" class="blue-button">Read More</a>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="col-lg-3">
                <div class="card">
                    <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_300,h_166,c_fill/v1587117952/attached_image/dampak-buruk-di-balik-kebiasan-makan-dan-minum-sambil-berdiri.jpg">
                    <h4>Dampak Buruk di Balik Kebiasan Makan dan Minum sambil Berdiri</h4>
                    <p>Kebiasaan makan dan minum sambil berdiri cenderung dianggap tidak sesuai dengan norma kesopanan yang ada di masyakarat umum. Namun, dari sisi medis pun ternyata kebiasaan ini juga memiliki...</p>
                    <a href="#" class="blue-button">Read More</a>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="col-lg-3">
                <div class="card">
                    <img width="250" height="140" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1587117326/attached_image/tidak-hanya-orang-dewasa-osteoporosis-juga-bisa-terjadi-pada-anak-alodokter.jpg">
                    <h4>Tidak Hanya Orang Dewasa, Osteoporosis juga Bisa Terjadi pada Anak</h4>
                    <p>Meski identik menyerang orang lanjut usia (lansia), osteoporosis juga bisa terjadi pada anak-anak, lho. Kondisi ini tentu sangat berbahaya bagi anak, mengingat mereka hanya masih memiliki jalan..</p>
                    <a href="#" class="blue-button">Read More</a>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="col-lg-3">
                <div class="card">
                    <img width="250" height="140" src="https://res.cloudinary.com/dk0z4ums3/image/upload/v1587097513/attached_image/peran-vitamin-e-astaxanthin-dan-glutathione-dalam-memperkuat-imunitas-dan-kekebalan-tubuh-alodokter.jpg">
                    <h4>Peran Vitamin E, Astaxanthin, dan Glutathione dalam Memperkuat Imunitas dan Kekebalan Tubuh</h4>
                    <p>Selama ini, nutrisi yang paling dikenal dapat meningkatkan imunitas atau kekebalan tubuh adalah vitamin C. Padahal, vitamin itu sendiri ...</p>
                    <a href="#" class="blue-button">Read More</a>
                </div>
            </div>
        </a>
    </div>
</div>
<br>
<div class="container">
    <div class="callout callout-danger" style="margin-top: 10px ">
        <h4>Cek COVID-19!</h4>
        <p>Cek gejala dan dapatkan penanganan jika diperlukan.</p>
    </div>

    <div class='tableauPlaceholder' id='viz1587121106777' style='position: relative'>
        <noscript>
            <a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;PK&#47;PKNMSCWBB&#47;1_rss.png' style='border: none' /></a>
        </noscript>
        <object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='path' value='shared&#47;PKNMSCWBB' />
            <param name='toolbar' value='yes' />
            <param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;PK&#47;PKNMSCWBB&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
        </object>
    </div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1587121106777');
        var vizElement = divElement.getElementsByTagName('object')[0];
        vizElement.style.width = '100%';
        vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
    <br>
    <br>    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4 class="title">TakeCare</h4>
                    <p>TakeCare adalah pelayanan berbasis web yang menyediakan berbagai layanan seperti beli obat, chat dengan dokter dan lain-lain.</p>
                    <span class="acount-icon"> 
                        <a href="http://localhost/TakeCare/page/aboutus">Tentang Kami</a>
                        <a href="http://localhost/TakeCare/page/kontak">Hubungi Kami</a>
                    </span>

                    <ul class="social-icon">
                        <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-google" aria-hidden="true"></i></a>
                        <a href="#" class="social"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Lainnya</h4>
                    <span class="acount-icon">          
            <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i>Syarat & Ketentuan</a>
            <a href="#"><i class="fa fa-lock" aria-hidden="true"></i>Privasi</a>
            <a href="#"><i class="fa fa-stethoscope" aria-hidden="true"></i>Gabung di Tim Dokter</a>
            <a href="#"><i class="fa fa-globe" aria-hidden="true"></i>Bahasa</a>           
          </span>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Kategori</h4>
                    <div class="category">
                        <a href="http://localhost/TakeCare/page/indexobat">Obat</a>
                        <a href="http://localhost/TakeCare/page/indexdokter">Dokter</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <h4 class="title">Payment Methods</h4>
                    <ul class="payment">
                        <li><a href="#"><i class="fa fa-cc-amex" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-credit-card" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-paypal" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-cc-visa" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <hr>

            <div class="row text-center"> Copyright © 2020, TakeCare. All Rights Reserved.</div>
        </div>

    </footer>
</body>

</html>