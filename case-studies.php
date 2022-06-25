<?php $title = "SustainEverse - Case Studies"; ?>
<?php include 'header.php' ?>

<!--********************** Banner Section ***********************-->
<section class="banner-section case-studies-banner bg-white">
    <div class="container">
        <div class="row py-4 py-md-5 justify-content-center text-left">
            <div class="col-12 align-self-center">
                <h4 class="banner-text title-color case-studies-banner-text gotham-medium" data-aos="fade-up">Case Studies</h4>
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

<!--********************** Case Studies Listing Section ***********************-->
<section class="py-5 case-studies-listing-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">

                    <div class="col-12" data-aos="fade-up">
                        <div class="card-group-item">
                            <a href="case-study-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-md-left position-relative">
                                        <img class="card-img-top mt-2" src="./public/images/png/case-studies/case-studies-img-1.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white mx-2 my-3 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-md-0 pl-md-5 pr-md-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-medium mb-2 h6">
                                            Viverra justo nec ultrices dui sapien eget mi. Eget gravida
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <p class="content-section my-3">Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <a href="case-study-details.php" class="font-min mt-4 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12" data-aos="fade-up">
                        <div class="card-group-item">
                            <a href="case-study-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-md-left position-relative">
                                        <img class="card-img-top mt-2" src="./public/images/png/case-studies/case-studies-img-2.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white mx-2 my-3 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-md-0 pl-md-5 pr-md-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-medium mb-2 h6">
                                            Viverra justo nec ultrices dui sapien eget mi. Eget gravida
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <p class="content-section my-3">Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <a href="case-study-details.php" class="font-min mt-4 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12" data-aos="fade-up">
                        <div class="card-group-item">
                            <a href="case-study-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-md-left position-relative">
                                        <img class="card-img-top mt-2" src="./public/images/png/case-studies/case-studies-img-3.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white mx-2 my-3 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-md-0 pl-md-5 pr-md-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-medium mb-2 h6">
                                            Viverra justo nec ultrices dui sapien eget mi. Eget gravida
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <p class="content-section my-3">Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <a href="case-study-details.php" class="font-min mt-4 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12" data-aos="fade-up">
                        <div class="card-group-item">
                            <a href="case-study-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-md-left position-relative">
                                        <img class="card-img-top mt-2" src="./public/images/png/case-studies/case-studies-img-4.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white mx-2 my-3 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-md-0 pl-md-5 pr-md-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-medium mb-2 h6">
                                            Viverra justo nec ultrices dui sapien eget mi. Eget gravida
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <p class="content-section my-3">Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <a href="case-study-details.php" class="font-min mt-4 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12" data-aos="fade-up">
                        <div class="card-group-item">
                            <a href="case-study-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-md-left position-relative">
                                        <img class="card-img-top mt-2" src="./public/images/png/case-studies/case-studies-img-5.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white mx-2 my-3 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-md-0 pl-md-5 pr-md-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-medium mb-2 h6">
                                            Viverra justo nec ultrices dui sapien eget mi. Eget gravida
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <p class="content-section my-3">Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <a href="case-study-details.php" class="font-min mt-4 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-12" data-aos="fade-up">
                        <div class="card-group-item">
                            <a href="case-study-details.php" class="link-section">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="text-center text-md-left position-relative">
                                        <img class="card-img-top mt-2" src="./public/images/png/case-studies/case-studies-img-6.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white mx-2 my-3 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body px-0 pt-md-0 pl-md-5 pr-md-3">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-medium mb-2 h6">
                                            Viverra justo nec ultrices dui sapien eget mi. Eget gravida
                                            <br class="d-block d-sm-none" />
                                            <span class="tag-section green-tag gotham-medium text-uppercase ml-sm-2">
                                                <span class="text-center">FREE</span> 
                                            </span>
                                        </h5>
                                        <p class="content-section my-3">Dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est</p>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 1</span> 
                                        </span>
                                        <span class="tag-section blue-tag gotham-medium text-uppercase mr-2">
                                            <span class="text-center">#TAG ITEM 2</span> 
                                        </span>
                                        <a href="case-study-details.php" class="font-min mt-4 d-flex read-more-section gotham-medium">Read More <i class="fas fa-long-arrow-alt-right ml-2 align-self-center"></i></a>
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