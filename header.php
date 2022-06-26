<?php $actual_link = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,  user-scalable=no" />
    <meta name="author" content="sustaineverse.org" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title><?php echo $title; ?></title>
    <link rel="icon" href="public/images/icon/favicon.png" type="image/x-icon" sizes="16x16">
    <!-- <link rel="shortcut icon" href="public/images/icon/favicon.ico" type="image/x-icon"> -->
    <link href="public/css/app.css" rel="stylesheet" />
    <link href="assets/plugins/slick/slick.css" rel="stylesheet" />
    <script src="assets/js/font-awesome-5.js"></script>
    <link href="assets/plugins/aos/aos.css" rel="stylesheet" />
</head>

<body>

<!-- Preloader -->
<section>
    <div id="preloader">
        <div id="site-preloader" class="site-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="L" class="letters-loading">
                        L
                    </span>
                    <span data-text-preloader="o" class="letters-loading">
                        o
                    </span>
                    <span data-text-preloader="a" class="letters-loading">
                        a
                    </span>
                    <span data-text-preloader="d" class="letters-loading">
                        d
                    </span>
                    <span data-text-preloader="i" class="letters-loading">
                        i
                    </span>
                    <span data-text-preloader="n" class="letters-loading">
                        n
                    </span>
                    <span data-text-preloader="g" class="letters-loading">
                        g
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                    <span data-text-preloader="." class="letters-loading">
                        .
                    </span>
                </div>
            </div>	
        </div>
    </div>
</section>

<header class="sustaineverse-navbar">
    <nav class="navbar navbar-expand-md py-md-0" id="mainNav">
        <div class="justify-content-md-around aos-init aos-animate px-2 w-100" data-aos="fade-in">

            <div class="row">
                <div class="col-md-2">
                    <!-- Logo -->
                    <a class="navbar-brand pb-2" href="index.php">
                        <img src="./public/images/png/logo.png" alt="SustainEverse Logo" width="200" title="SustainEverse Logo" />
                    </a>
                </div>
                <div class="col-md-3 d-flex">
                    <!-- Explore -->
                    <div class="align-self-center">
                        <a href="javascript:void(0);" class="btn btn-se rounded-pill"><i class="fas fa-bars"></i> Explore</a>
                    </div>

                    <!-- Custom Select -->
                    <div class="align-self-center">
                        <select class="form-control form-control-sm border-0 text-primary header-custom-select">
                            <option>Halal Screener</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <!-- Search Box -->
                    <div class="form-group has-search mb-0">
                        <span class="fa fa-search form-control-feedback"></span>
                        <input type="text" class="form-control" placeholder="Search any stock globally">
                    </div>  
                </div>
                <div class="col-md-3 d-flex justify-content-end">
                    <!-- Join -->
                    <div class="align-self-center">
                        <a href="javascript:void(0);" class="btn btn-se-outline rounded-pill">Join</a>
                    </div>

                    <!-- Get the App -->
                    <div class="align-self-center ml-2">
                        <a href="javascript:void(0);" class="btn btn-se rounded-pill">Get the App</a>
                    </div>
                </div>
            </div>









        </div>
    </nav>
</header>