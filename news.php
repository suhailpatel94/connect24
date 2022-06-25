<?php $title = "SustainEverse - News"; ?>
<?php include 'header.php' ?>

<!--********************** Banner Section ***********************-->
<section class="banner-section news-banner bg-white">
    <div class="container">
        <div class="row py-4 py-md-5 justify-content-center text-left">
            <div class="col-12 align-self-center">
                <h4 class="banner-text title-color news-banner-text gotham-medium" data-aos="fade-up">Top News</h4>
            </div>
        </div>  
    </div>
</section>

<!--********************** Filter Section ***********************-->
<section class="bg-grey-light" data-aos="fade-up">
    <div class="container">
        <div class="row py-4 justify-content-center text-left">
            <div class="col-12 align-self-center custom-select-box">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4 col-lg-3">
                            <label for="inputYear">Year</label>
                            <select id="inputYear" style="height: 50px;" class="form-control custom-select-arrow">
                                <option selected>Select</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-lg-3">
                            <label for="inputSustainableGoals">Sustainable Development Goals</label>
                            <select id="inputSustainableGoals" style="height: 50px;" class="form-control custom-select-arrow">
                                <option selected>Select</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-lg-3">
                            <label for="inputCategory">Category</label>
                            <select id="inputCategory" style="height: 50px;" class="form-control custom-select-arrow">
                                <option selected>Select</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="input-group col-md-8 col-lg-6 mb-3 mt-3 mt-md-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-right-0 bg-white"><i class="fas fa-search"></i> </span>
                            </div>
                            <input type="text" id="inputSearch" placeholder="Search" style="height: 50px;" class="form-control border-left-0 border-right-0">
                            <div class="input-group-append">
                                <a href="javascript:void(0);" style="display:inherit;text-decoration:none;">
                                    <span class="input-group-text border-left-0 bg-white"><i class="fas fa-long-arrow-alt-right"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</section>

<!--********************** News Listing Section ***********************-->
<section class="pt-5 pb-0 py-sm-5 news-listing-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 pb-5 pb-md-0 mb-md-0">
                <div class="row">

                    <div class="col-md-8 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card shadow h-100">
                            <a href="news-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/news/news-main-img.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0 mb-1">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                        <a href="news-details.php" class="font-min mb-2 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3">
                                    <span class="author-name-section font-min d-block lato-bold">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block lato-medium">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="news-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/news/news-img-1.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                        <a href="news-details.php" class="font-min mb-2 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3">
                                    <span class="author-name-section font-min d-block lato-bold">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block lato-medium">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100 position-relative">
                            <a href="news-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/news/news-img-2.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                        <a href="news-details.php" class="font-min mb-2 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3">
                                    <span class="author-name-section font-min d-block lato-bold">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block lato-medium">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="news-details.php">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/news/news-img-3.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                        <a href="news-details.php" class="font-min mb-2 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3">
                                    <span class="author-name-section font-min d-block lato-bold">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block lato-medium">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="news-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/news/news-img-4.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                        <a href="news-details.php" class="font-min mb-2 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3">
                                    <span class="author-name-section font-min d-block lato-bold">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block lato-medium">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!--********************** News Listing Section 2 ***********************-->
<section class="pb-5 py-sm-5 news-listing-section news-listing-section-2">
    <div class="container">
        <div class="row">

            <div class="col-12 col-lg-8">
                <div class="row">

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/news-img-5.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        </h5>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-bold">By John Deo</span>&nbsp;
                                            <span class="author-company-section lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                        <p class="content-section mt-2 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="news-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/news-img-6.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        </h5>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-bold">By John Deo</span>&nbsp;
                                            <span class="author-company-section lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                        <p class="content-section mt-2 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="news-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/news-img-7.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        </h5>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-bold">By John Deo</span>&nbsp;
                                            <span class="author-company-section lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                        <p class="content-section mt-2 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="news-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/news-img-8.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        </h5>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-bold">By John Deo</span>&nbsp;
                                            <span class="author-company-section lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                        <p class="content-section mt-2 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="news-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-12 col-lg-4 latest-news-section">

                <section class="banner-section pt-5 pt-md-3 bg-white">
                    <div class="row pb-1 justify-content-center text-left">
                        <div class="col-12 align-self-center">
                            <h4 class="banner-text title-color news-banner-text gotham-medium" data-aos="fade-up">Latest News</h4>
                        </div>
                    </div>  
                </section>

                <div class="row">

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100 mb-4">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/latest-news-img-1.webp" alt="" />
                                    </div>
                                    <div class="card-body px-3 py-2">
                                        <p class="title-section gotham-bold mb-2">
                                            Lorem ipsum dolor sit amet consectetur
                                        </p>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-regular">By John Deo</span>&nbsp;
                                            <span class="author-company-section d-block lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100 mb-4">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/latest-news-img-2.webp" alt="" />
                                    </div>
                                    <div class="card-body px-3 py-2">
                                        <p class="title-section gotham-bold mb-2">
                                            Lorem ipsum dolor sit amet consectetur
                                        </p>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-regular">By John Deo</span>&nbsp;
                                            <span class="author-company-section d-block lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100 mb-4">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/latest-news-img-3.webp" alt="" />
                                    </div>
                                    <div class="card-body px-3 py-2">
                                        <p class="title-section gotham-bold mb-2">
                                            Lorem ipsum dolor sit amet consectetur
                                        </p>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-regular">By John Deo</span>&nbsp;
                                            <span class="author-company-section d-block lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100 mb-4">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/latest-news-img-4.webp" alt="" />
                                    </div>
                                    <div class="card-body px-3 py-2">
                                        <p class="title-section gotham-bold mb-2">
                                            Lorem ipsum dolor sit amet consectetur
                                        </p>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-regular">By John Deo</span>&nbsp;
                                            <span class="author-company-section d-block lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item news-main-card-2 h-100 mb-4">
                            <a href="news-details.php" class="link-section">
                                <div class="card border-0 bg-transparent">
                                    <div class="text-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/news/latest-news-img-5.webp" alt="" />
                                    </div>
                                    <div class="card-body px-3 py-2">
                                        <p class="title-section gotham-bold mb-2">
                                            Lorem ipsum dolor sit amet consectetur
                                        </p>
                                        <div class="author-details-section mb-2">
                                            <span class="author-name-section lato-regular">By John Deo</span>&nbsp;
                                            <span class="author-company-section d-block lato-regular">Consectetur adipiscing elit</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<?php include 'footer.php' ?>