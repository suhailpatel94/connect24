<?php $title = "SustainEverse - Blogs"; ?>
<?php include 'header.php' ?>

<!--********************** Banner Section ***********************-->
<section class="banner-section blogs-banner bg-white">
    <div class="container">
        <div class="row py-4 py-md-5 justify-content-center text-left">
            <div class="col-12 align-self-center">
                <h4 class="banner-text title-color blog-banner-text gotham-medium" data-aos="fade-up">Latest Blogs</h4>
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

<!--********************** Blog Listing Section ***********************-->
<section class="py-5 blog-listing-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5 pb-5 pb-md-0 mb-md-0">
                <div class="row">

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-1.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-2.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100 position-relative">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-8.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-4.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-5.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100 position-relative">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-6.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-5">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-7.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                                
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-8.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-4 mt-4" data-aos="fade-up">
                        <div class="card-group-item shadow h-100 position-relative">
                            <a href="blog-details.php">
                                <div class="card border-0 bg-transparent mb-4">
                                    <div class="position-relative">
                                        <img class="card-img-top" src="./public/images/png/blogs/blog-img-9.webp" alt="" />
                                        <div class="position-absolute top-0 left-0">
                                            <p class="sub-cat-section text-white m-2 py-0 px-2 gotham-medium">SUB CAT 1</p>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="time-section lato-bold text-uppercase mb-1">12 june 2021  |  8:00 pm</p>
                                        <h5 class="title-section gotham-bold mb-4 h6">Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt</h5>
                                        <p class="content-section mt-0">Tristique et egestas quis ipsum suspendisse ultrices. Id consectetur purus ut faucibus pulvinar elementum. Nunc mattis enim ut…</p>
                                    </div>
                                </div>
                                <div class="author-details-section font-min position-absolute bottom-0 p-3 lato-medium">
                                    <span class="author-name-section font-min d-block">&nbsp;by John Deo</span>
                                    <span class="author-company-section font-min d-block">&nbsp;Consectetur adipiscing elit</span>
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