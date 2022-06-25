<?php $title = "SustainEverse - Research Papers"; ?>
<?php include 'header.php' ?>

<!--********************** Banner Section ***********************-->
<section class="banner-section research-papers-banner bg-white">
    <div class="container">
        <div class="row py-4 py-md-5 justify-content-center text-left">
            <div class="col-12 align-self-center">
                <h4 class="banner-text title-color research-papers-banner-text gotham-medium" data-aos="fade-up">Research Papers</h4>
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

<!--********************** Research Papers Listing Section ***********************-->
<section class="py-5 research-paper-listing-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="research-papers-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/research-papers/research-paper-1.webp" alt="" />
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
                                        <p class="price-section gotham-bold h6 text-uppercase mb-2 mt-3 mt-sm-0">$ 19.99</p>
                                        <div class="author-details-section mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <span class="author-name-section lato-bold">Published</span>&nbsp;
                                            <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod</span>
                                            <span class="author-name-section lato-bold d-block mt-1">Mumbai, India</span>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="research-papers-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="research-papers-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/research-papers/research-paper-2.webp" alt="" />
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
                                        <p class="price-section gotham-bold h6 text-uppercase mb-2 mt-3 mt-sm-0">$ 19.99</p>
                                        <div class="author-details-section mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <span class="author-name-section lato-bold">Published</span>&nbsp;
                                            <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod</span>
                                            <span class="author-name-section lato-bold d-block mt-1">Mumbai, India</span>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="research-papers-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12 mt-4" data-aos="fade-up">
                        <div class="card-group-item h-100">
                            <a href="research-papers-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-sm-left">
                                        <img class="card-img-top mt-2" src="./public/images/png/research-papers/research-paper-3.webp" alt="" />
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
                                        <p class="price-section gotham-bold h6 text-uppercase mb-2 mt-3 mt-sm-0">$ 19.99</p>
                                        <div class="author-details-section mb-4">
                                            <span class="author-name-section lato-bold d-block mb-1">by John Deo</span>
                                            <span class="author-name-section lato-bold">Published</span>&nbsp;
                                            <span class="author-company-section lato-regular">Excepteur adipi sed do eiusmod</span>
                                            <span class="author-name-section lato-bold d-block mt-1">Mumbai, India</span>
                                        </div>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <p class="content-section my-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non…</p>
                                        <a href="research-papers-details.php" class="font-min d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
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