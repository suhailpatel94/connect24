<?php $title = "SustainEverse - eBooks"; ?>
<?php include 'header.php' ?>

<!--********************** Banner Section ***********************-->
<section class="banner-section ebooks-banner bg-white">
    <div class="container">
        <div class="row py-4 py-md-5 justify-content-center text-left">
            <div class="col-12 align-self-center">
                <h4 class="banner-text title-color ebook-banner-text gotham-medium" data-aos="fade-up">eBooks</h4>
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

<!--********************** Cover Slider Section ***********************-->
<section class="py-5 mb-5 position-relative">

    <div class="position-absolute d-block w-100 ebook-cover-gradient"></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="title-section title-color gotham-bold mb-5 h6" data-aos="fade-up">Featured Titles</h5>
                <div class="w-gallery" data-aos="fade-up">
                    <section id="responsiveGallery-container" class="responsiveGallery-container">
                    
                        <a class="responsiveGallery-btn responsiveGallery-btn_prev" href="javascript:void(0);"></a>
                        <a class="responsiveGallery-btn responsiveGallery-btn_next" href="javascript:void(0);"></a>
                        
                        <ul class="responsiveGallery-wrapper">
                            <li class="responsiveGallery-item"> 
                                <a href="ebook-details.php" class="responsivGallery-link">
                                    <img src="./public/images/png/ebooks/ebook-slider-1.webp" height="320" width="320" alt="" class="responsivGallery-pic">
                                </a>
                                <div class="w-responsivGallery-info">
                                    <h2 class="responsivGallery-name">Lorem ipsum dolor sit amet consectetur adipi</h2>
                                    <!-- <h3 class="responsivGallery-position">www.google.com</h3> -->
                                </div>
                            </li>
                            <li class="responsiveGallery-item"> 
                                <a href="ebook-details.php" class="responsivGallery-link">
                                    <img src="./public/images/png/ebooks/ebook-slider-2.webp" height="320" width="320" alt="" class="responsivGallery-pic">
                                </a>
                                <div class="w-responsivGallery-info">
                                    <h2 class="responsivGallery-name">Lorem ipsum dolor sit amet consectetur adipi</h2>
                                </div>
                            </li>
                            
                            <li class="responsiveGallery-item"> 
                                <a href="ebook-details.php" class="responsivGallery-link">
                                    <img src="./public/images/png/ebooks/ebook-slider-3.webp" height="320" width="320" alt="" class="responsivGallery-pic">
                                </a>
                                <div class="w-responsivGallery-info">
                                    <h2 class="responsivGallery-name">Lorem ipsum dolor sit amet consectetur adipi</h2>
                                </div>
                            </li>
                            
                            <li class="responsiveGallery-item"> 
                                <a href="ebook-details.php" class="responsivGallery-link">
                                    <img src="./public/images/png/ebooks/ebook-slider-4.webp" height="320" width="320" alt="" class="responsivGallery-pic">
                                </a>
                                <div class="w-responsivGallery-info">
                                    <h2 class="responsivGallery-name">Lorem ipsum dolor sit amet consectetur adipi</h2>
                                </div>
                            </li>
                            
                            <li class="responsiveGallery-item"> 
                                <a href="ebook-details.php" class="responsivGallery-link">
                                    <img src="./public/images/png/ebooks/ebook-slider-5.webp" height="320" width="320" alt="" class="responsivGallery-pic">
                                </a>
                                <div class="w-responsivGallery-info">
                                    <h2 class="responsivGallery-name">Lorem ipsum dolor sit amet consectetur adipi</h2>
                                </div>
                            </li>

                            <li class="responsiveGallery-item"> 
                                <a href="ebook-details.php" class="responsivGallery-link">
                                    <img src="./public/images/png/ebooks/ebook-slider-4.webp" height="320" width="320" alt="" class="responsivGallery-pic">
                                </a>
                                <div class="w-responsivGallery-info">
                                    <h2 class="responsivGallery-name">Lorem ipsum dolor sit amet consectetur adipi</h2>
                                </div>
                            </li>

                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
        
</section>

<!--********************** eBook Listing Section ***********************-->
<section class="ebook-listing-section" style="padding-top: 4rem;">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 pb-5 pb-md-0 mb-md-0">
                <div class="row">

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="ebook-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/ebooks/ebook-img-1.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section pink-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">PAID</span> 
                                            </span>
                                        </h5>
                                        <div class="mt-3 mt-sm-0 mb-2">
                                            <span class="price-section gotham-bold h6 text-uppercase">$ 19.99</span>
                                            <span class="author-name-section gotham-medium price-was-section ml-1 pl-2">was $ 39.99</span>
                                        </div>
                                        <div class="author-details-section mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <div class="my-1">
                                                <span class="author-name-section lato-bold">Edition</span>&nbsp;
                                                <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod (2021)</span>
                                            </div>
                                            <div>
                                                <span class="author-name-section lato-bold">Language</span>&nbsp;
                                                <span class="author-company-section lato-regular">English</span>
                                            </div>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="ebook-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="ebook-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/ebooks/ebook-img-2.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section pink-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">PAID</span> 
                                            </span>
                                        </h5>
                                        <div class="mt-3 mt-sm-0 mb-2">
                                            <span class="price-section gotham-bold h6 text-uppercase">$ 19.99</span>
                                            <span class="author-name-section gotham-medium price-was-section ml-1 pl-2">was $ 39.99</span>
                                        </div>
                                        <div class="author-details-section mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <div class="my-1">
                                                <span class="author-name-section lato-bold">Edition</span>&nbsp;
                                                <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod (2021)</span>
                                            </div>
                                            <div>
                                                <span class="author-name-section lato-bold">Language</span>&nbsp;
                                                <span class="author-company-section lato-regular">English</span>
                                            </div>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="ebook-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="ebook-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/ebooks/ebook-img-1.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section pink-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">PAID</span> 
                                            </span>
                                        </h5>
                                        <div class="mt-3 mt-sm-0 mb-2">
                                            <span class="price-section gotham-bold h6 text-uppercase">$ 19.99</span>
                                            <span class="author-name-section gotham-medium price-was-section ml-1 pl-2">was $ 39.99</span>
                                        </div>
                                        <div class="author-details-section mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <div class="my-1">
                                                <span class="author-name-section lato-bold">Edition</span>&nbsp;
                                                <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod (2021)</span>
                                            </div>
                                            <div>
                                                <span class="author-name-section lato-bold">Language</span>&nbsp;
                                                <span class="author-company-section lato-regular">English</span>
                                            </div>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="ebook-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="ebook-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/ebooks/ebook-img-2.webp" alt="" />
                                    </div>
                                    <div class="card-body px-0 pt-sm-0 pl-sm-5 pr-sm-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-2 h6">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <!-- <p class="price-section gotham-bold h6 text-uppercase mb-2">$ 19.99</p> -->
                                        <div class="author-details-section mt-3 mt-sm-0 mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <div class="my-1">
                                                <span class="author-name-section lato-bold">Edition</span>&nbsp;
                                                <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod (2021)</span>
                                            </div>
                                            <div>
                                                <span class="author-name-section lato-bold">Language</span>&nbsp;
                                                <span class="author-company-section lato-regular">English</span>
                                            </div>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="ebook-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
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