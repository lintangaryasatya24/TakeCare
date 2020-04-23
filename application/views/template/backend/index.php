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
        <?php
        echo $headernya;
        ?>
    </nav>
    <div class="container">

        <?php
        echo $contentnya;
        ?>
    </div>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h4 class="title">TakeCare</h4>
                    <p>TakeCare adalah pelayanan berbasis web yang menyediakan berbagai layanan seperti beli obat, chat dengan dokter dan lain-lain.</p>
                    <span class="acount-icon"> 
                        <a href="<?php echo base_url('page/aboutus'); ?>">Tentang Kami</a>
                        <a href="<?php echo base_url('page/kontak'); ?>">Hubungi Kami</a>
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
                        <a href="<?php echo base_url('page/indexobat'); ?>">Obat</a>
                        <a href="<?php echo base_url('page/indexdokter'); ?>">Dokter</a>
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