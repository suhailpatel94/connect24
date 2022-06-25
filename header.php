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
    <link href="assets/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet" />
    <link href='assets/plugins/cover-slider/css/jquery-responsiveGallery.css' rel='stylesheet' />
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
        <div class="container-lg justify-content-md-around" data-aos="fade-in">
            <a class="navbar-brand" href="index.php">
                <img src="./public/images/png/logo.png" alt="SustainEverse Logo" width="200" title="SustainEverse Logo" />
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ham-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="navbar-collapse collapse justify-content-start align-self-start" id="navbarResponsive" style="height: 80px;">
                <ul class="navbar-nav gotham-book justify-content-around justify-content-lg-center h-100 w-100">
                    
                    <li <?php if($actual_link=="index.php"){echo "class= 'active home'";}else{echo "class= 'home'";} ?>>
                        <a class="nav-link" href="index.php"><span>Home</span></a>
                    </li>
                    <li <?php if($actual_link=="blogs.php" || $actual_link=="blog-details.php"){echo "class= 'active blog'";}else{echo "class= 'blog'";} ?>>
                        <a class="nav-link" href="blogs.php"><span>Blogs</span></a>
                    </li>
                    <li <?php if($actual_link=="articles.php" || $actual_link=="article-details.php"){echo "class= 'active articles'";}else{echo "class= 'articles'";} ?>>
                        <a class="nav-link" href="articles.php"><span>Articles</span></a>
                    </li>
                    <li <?php if($actual_link=="news.php" || $actual_link=="news-details.php"){echo "class= 'active news'";}else{echo "class= 'news'";} ?>>
                        <a class="nav-link" href="news.php"><span>News</span></a>
                    </li>
                    <li <?php if($actual_link=="case-studies.php" || $actual_link=="case-study-details.php"){echo "class= 'active case-studies'";}else{echo "class= 'case-studies'";} ?>>
                        <a class="nav-link" href="case-studies.php"><span>Case Studies</span></a>
                    </li>
                    <li <?php if($actual_link=="research-papers.php" || $actual_link=="research-papers-details.php"){echo "class= 'active research-papers'";}else{echo "class= 'research-papers'";} ?>>
                        <a class="nav-link" href="research-papers.php"><span>Research Papers</span></a>
                    </li>
                    <li <?php if($actual_link=="ebooks.php" || $actual_link=="ebook-details.php"){echo "class= 'active ebooks'";}else{echo "class= 'ebooks'";} ?>>
                        <a class="nav-link" href="ebooks.php"><span>eBooks</span></a>
                    </li>
                </ul>
            </div>
            <a href="javascript:void(0);" class="btn btn-se sign-in-btn d-none d-md-block">Sign In</a>
        </div>
    </nav>
</header>