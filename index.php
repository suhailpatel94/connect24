<?php $title = "Connect 24 - Details"; ?>
<?php include 'header.php' ?>


<!--********************** Main Heading Banner Section ***********************-->
<section class="home-banner-section banner-section banner-section-auto mb-5">
    <div class="container-fluid custom-container">
        <div class="row py-4 py-md-5 py-xl-5 mt-md-4 justify-content-start text-center text-md-left">

            <div class="col-12">
                <div class="bg-white p-4 custom-border rounded">
                    <div class="details-main-logo">
                        <img src="./public/images/png/apple-logo.png" width="80" />
                    </div>
                    <div class="d-flex justify-content-between mt-4 mb-5">
                        <h2 class="line-height-1 mb-0 align-self-center title-color">
                            Apple INC <small class="text-secondary">AAPL</small>
                        </h2>

                        <div class="d-flex">
                            <div class="align-self-center">
                                <a href="javascript:void(0);" class="btn btn-se-light rounded-lg"><i class="fas fa-share-square mr-1"></i> Share</a>
                            </div>
                            <div class="align-self-center ml-3">
                                <a href="javascript:void(0);" class="btn btn-se rounded-lg"><i class="fas fa-star mr-1"></i> Watchlist</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-12">
                <div class="row mx-3 custom-nav-tabs-section">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-3 custom-nav-tabs bg-white p-2 custom-border rounded" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-compliance-tab" data-toggle="pill" href="#pills-compliance" role="tab" aria-controls="pills-compliance" aria-selected="false">Compliance</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-analyst-ratings-tab" data-toggle="pill" href="#pills-analyst-ratings" role="tab" aria-controls="pills-analyst-ratings" aria-selected="false">Analysts' Ratings</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-forecasts-tab" data-toggle="pill" href="#pills-forecasts" role="tab" aria-controls="pills-forecasts" aria-selected="false">Forecasts</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-insider-transactions-tab" data-toggle="pill" href="#pills-insider-transactions" role="tab" aria-controls="pills-insider-transactions" aria-selected="false">Insider Transactions</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-ownership-tab" data-toggle="pill" href="#pills-ownership" role="tab" aria-controls="pills-ownership" aria-selected="false">Ownership</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-related-commpanies-tab" data-toggle="pill" href="#pills-related-commpanies" role="tab" aria-controls="pills-related-commpanies" aria-selected="false">Related Companies</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-latest-news-tab" data-toggle="pill" href="#pills-latest-news" role="tab" aria-controls="pills-latest-news" aria-selected="false">Latest News</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-press-releases-tab" data-toggle="pill" href="#pills-press-releases" role="tab" aria-controls="pills-press-releases" aria-selected="false">Press Releases</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="tab-content mt-5" id="pills-tabContent">

                    <div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">

                        <div class="row">
                            <div class="col-md-8">

                                <!-- Related Stocks Card -->
                                <div class="bg-white custom-border rounded-lg p-4 mt-2">

                                    <h2 class="title-color">Related Stocks</h2>

                                    <div class="custom-margin-top">
                                        <div class="d-flex justify-content-between mb-3">

                                            <div class="table-responsive-sm">
                                                <table class="table table-hover tbl-related-stocks">
                                                    <thead>
                                                        <tr>
                                                            <th class="border-0" scope="col"><span class="text-secondary h5 font-smooth">Name</span></th>
                                                            <th class="border-0" scope="col"><span class="text-secondary h5 font-smooth">Price</span></th>
                                                            <th class="border-0" scope="col"><span class="text-secondary h5 font-smooth">Change</span></th>
                                                            <th class="border-0" scope="col"><span class="text-secondary h5 font-smooth">Shariah compliance</span></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/delta-air-lines.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Delta Air Lines, Inc.</div>
                                                                        <span class="text-secondary font-smooth h6">DAL</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-avoid">Avoid</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/southwest-airlines.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Southwest Airlines Co</div>
                                                                        <span class="text-secondary font-smooth h6">LUV</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-halal">Halal (3 <i class="fas fa-star"></i>)</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/united-airlines.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">United Airlines Holdings Inc.</div>
                                                                        <span class="text-secondary font-smooth h6">UAL</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-not-halal">Not Halal</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/american-airlines.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">American Airlines Group Inc.</div>
                                                                        <span class="text-secondary font-smooth h6">AAL</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-avoid">Avoid</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/air-canada.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Air Canada</div>
                                                                        <span class="text-secondary font-smooth h6">AC CN</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-not-halal">Not Halal</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/amazon.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Amazon.com INC</div>
                                                                        <span class="text-secondary font-smooth h6">AMZN</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-halal">Halal</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/spirit-airlines.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Spirit Airlines Incorporated</div>
                                                                        <span class="text-secondary font-smooth h6">SAVE</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-halal">Halal</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/alaska-air.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Alaska Air Group, Inc.</div>
                                                                        <span class="text-secondary font-smooth h6">ALK</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-halal">Halal</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/jetblue-airways.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">JetBlue Airways Corporation</div>
                                                                        <span class="text-secondary font-smooth h6">JBLU</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-avoid">Avoid</a></div></td>
                                                        </tr>
                                                        <tr>
                                                            <th>
                                                                <div class="d-flex">
                                                                    <div class="align-self-center">
                                                                        <img src="./public/images/png/related-stocks/sun-country-airlines.png" width="40" />
                                                                    </div>
                                                                    <div class="align-self-center ml-2">
                                                                        <div class="h5 title-color mb-0 font-smooth">Sun Country Airlines Holdings Inc</div>
                                                                        <span class="text-secondary font-smooth h6">SNCY</span>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                            <td><div class="h5 title-color mb-0 font-smooth">$10.04</div></td>
                                                            <td><div class="h5 mb-0 font-smooth custom-light-red"><i class="fas fa-caret-down mr-2"></i>10.04%</div></td>
                                                            <td><div><a href="javascript:void(0);" class="btn btn-custom-status btn-not-halal">Not Halal</a></div></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-4">

                                <!-- Compliance Card -->
                                <div class="bg-white custom-border rounded-lg p-4 mt-2">
                                    <div class="d-flex">
                                        <h4 class="title-color mb-0">Compliance Status</h4>
                                        <div class="custom-tooltip ml-2">
                                            <span class="custom-tooltipText">This is a sample text</span>
                                            <i class="fas fa-info-circle text-secondary mb-0 h5"></i>
                                        </div>
                                    </div>

                                    <div class="custom-bg-light-green px-4 pb-4 pt-3 custom-margin-top custom-margin-bottom border-radius-15 text-center">
                                        <h1 class="font-36 custom-light-green">Halal</h1>
                                        <div>
                                            <span class="mr-2">
                                                <img src="./public/images/png/star-filled.png" width="25" />
                                            </span>
                                            <span class="mr-2">
                                                <img src="./public/images/png/star.png" width="25" />
                                            </span>
                                            <span class="mr-2">
                                                <img src="./public/images/png/star.png" width="25" />
                                            </span>
                                            <span class="mr-2">
                                                <img src="./public/images/png/star.png" width="25" />
                                            </span>
                                            <span>
                                                <img src="./public/images/png/star.png" width="25" />
                                            </span>
                                        </div>
                                    </div>

                                    <p class="text-secondary line-height-2 h6">Musaffa Halal Rating is a proprietary ranking metric that compares all stocks in a given country from lowest to highest Shariah compliance standing.</p>

                                    <a href="javascript:void(0);" class="btn btn-se border-radius-10 w-100 font-20 custom-margin-top mb-2 py-3">Screening Report</a>
                                </div>

                                <!-- Investment Checklist Card -->
                                <div class="bg-white custom-border rounded-lg p-4 custom-margin-top">
                                    <div class="d-flex custom-margin-bottom">
                                        <h4 class="title-color mb-0">Investment Checklist</h4>
                                        <div class="custom-tooltip ml-2">
                                            <span class="custom-tooltipText">This is a sample text</span>
                                            <i class="fas fa-info-circle text-secondary mb-0 h5"></i>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        <div class="d-flex mb-3">
                                            <span class="mr-3">
                                                <img src="./public/images/png/investment-checklist/invchk-up.png" width="35" />
                                            </span>
                                            <span class="font-20 align-self-center font-smooth text-black">54% Expected Annual Return</span>
                                        </div>
                                        <p class="text-secondary line-height-13 font-smooth h6">Based on 1 year median target stock price of $645 and annual dividend yeild of 2%.</p>
                                    </div>

                                    <div class="mb-4">
                                        <div class="d-flex mb-3">
                                            <span class="mr-3">
                                                <img src="./public/images/png/investment-checklist/invchk-risk.png" width="35" />
                                            </span>
                                            <span class="font-20 align-self-center font-smooth text-black">High Risk</span>
                                        </div>
                                        <p class="text-secondary line-height-13 font-smooth h6">This stock is 1.25x as volitile as the S&P500.</p>
                                    </div>

                                    <div class="mb-4">
                                        <div class="d-flex mb-3">
                                            <span class="mr-3">
                                                <img src="./public/images/png/investment-checklist/invchk-balanced.png" width="35" />
                                            </span>
                                            <span class="font-20 align-self-center font-smooth text-black">Good Sharpe Ratio</span>
                                        </div>
                                        <p class="text-secondary line-height-13 font-smooth h6">This stock has a Sharpe ratio of 1.5 and expected to give good returns compared to the risk involved.</p>
                                    </div>

                                    <div class="mb-2">
                                        <div class="d-flex mb-3">
                                            <span class="mr-3">
                                                <img src="./public/images/png/investment-checklist/invchk-down.png" width="35" />
                                            </span>
                                            <span class="font-20 align-self-center font-smooth text-black">2.04% Dividend Yeild</span>
                                        </div>
                                        <p class="text-secondary line-height-13 font-smooth h6">This stock offers lower dividend yeild compared to the market.</p>
                                    </div>

                                </div>

                                <!-- Forecasts Card -->
                                <div class="bg-white custom-border rounded-lg p-4 custom-margin-top">

                                    <h4 class="title-color">Forecasts</h4>

                                    <div class="custom-margin-top">
                                        <div class="d-flex justify-content-between mb-3">
                                            <div>
                                                <span class="text-secondary">Price</span>
                                                <div class="h6 title-color">52123.56324</div>
                                                <span class="custom-bg-light-green border-radius-15 px-2 d-inline-block">
                                                    <p class="custom-light-green mb-0">24% <i class="fas fa-arrow-down ml-1"></i></p>
                                                </span>
                                            </div>
                                            <div class="border-right"></div>
                                            <div>
                                                <span class="text-secondary">Revenue</span>
                                                <div class="h6 title-color">521.56</div>
                                                <span class="custom-bg-light-green border-radius-15 px-2 d-inline-block">
                                                    <p class="custom-light-green mb-0">24% <i class="fas fa-arrow-down ml-1"></i></p>
                                                </span>
                                            </div>
                                            <div class="border-right"></div>
                                            <div>
                                                <span class="text-secondary">Earnings</span>
                                                <div class="h6 title-color">521.56</div>
                                                <span class="custom-bg-light-red border-radius-15 px-2 d-inline-block">
                                                    <p class="custom-light-red mb-0">24% <i class="fas fa-arrow-down ml-1"></i></p>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- Super Investors Card -->
                                <div class="bg-white custom-border rounded-lg p-4 custom-margin-top">

                                    <h4 class="title-color">Super Investors</h4>

                                    <section class="pt-2 pb-4 super-investors-section" data-aos="fade-up">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12 px-4 px-sm-5">
                                                    <div class="row" id="super-investors-slider">

                                                        <div class="col-md-4 mt-2 px-2">
                                                            <div class="card-group-item h-100 position-relative">
                                                                <a href="news-details.php">
                                                                    <div class="card border-radius-10 bg-transparent">
                                                                        <div class="position-relative px-3 pt-3 pb-2">
                                                                            <img class="card-img-top" src="./public/images/png/warren-buffet.png" alt="" />
                                                                        </div>
                                                                        <div class="card-body p-2 text-center">
                                                                            <p class="text-secondary mb-0">Warren Buffet</p>
                                                                            <p class="title-color mb-0">5.83% of Portfolio</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2 px-2">
                                                            <div class="card-group-item h-100 position-relative">
                                                                <a href="news-details.php">
                                                                    <div class="card border-radius-10 bg-transparent">
                                                                        <div class="position-relative px-3 pt-3 pb-2">
                                                                            <img class="card-img-top" src="./public/images/png/warren-buffet.png" alt="" />
                                                                        </div>
                                                                        <div class="card-body p-2 text-center">
                                                                            <p class="text-secondary mb-0">Warren Buffet</p>
                                                                            <p class="title-color mb-0">5.83% of Portfolio</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2 px-2">
                                                            <div class="card-group-item h-100 position-relative">
                                                                <a href="news-details.php">
                                                                    <div class="card border-radius-10 bg-transparent">
                                                                        <div class="position-relative px-3 pt-3 pb-2">
                                                                            <img class="card-img-top" src="./public/images/png/warren-buffet.png" alt="" />
                                                                        </div>
                                                                        <div class="card-body p-2 text-center">
                                                                            <p class="text-secondary mb-0">Warren Buffet</p>
                                                                            <p class="title-color mb-0">5.83% of Portfolio</p>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4 mt-2 px-2">
                                                            <div class="card-group-item h-100 position-relative">
                                                                <a href="news-details.php">
                                                                    <div class="card border-radius-10 bg-transparent">
                                                                        <div class="position-relative px-3 pt-3 pb-2">
                                                                            <img class="card-img-top" src="./public/images/png/warren-buffet.png" alt="" />
                                                                        </div>
                                                                        <div class="card-body p-2 text-center">
                                                                            <p class="text-secondary mb-0">Warren Buffet</p>
                                                                            <p class="title-color mb-0">5.83% of Portfolio</p>
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

                                </div>

                                <!-- Related News Card -->
                                <div class="bg-white custom-border rounded-lg p-4 custom-margin-top">

                                    <div class="d-flex justify-content-between mb-2">
                                        <h4 class="title-color mb-0">Related News</h4>
                                        <a href="javascript:void(0);" class="font-smooth underline custom-link">View All</a>
                                    </div>

                                    <div class="custom-margin-top">
                                        
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-1.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">Market Watch | Tuesday</span>
                                                <div class="h6 title-color mb-0">Deep Dive: Apple is Berkshire's largest stock holding, but Buffett...</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-2.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">InvestorPlace | Tuesday</span>
                                                <div class="h6 title-color mb-0">Apple Is Poised for Big Gains Amid Spring Hardware Launches</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-3.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">Benzinga | Tuesday</span>
                                                <div class="h6 title-color mb-0">Tigress Financial Is Bullish On Apple - Read Why</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-4.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">Zacks Investment Research | Tuesday</span>
                                                <div class="h6 title-color mb-0">Best Growth Stocks to Buy for February 15th</div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                                <!-- Press Release Card -->
                                <div class="bg-white custom-border rounded-lg p-4 custom-margin-top">

                                    <div class="d-flex justify-content-between mb-2">
                                        <h4 class="title-color mb-0">Press Release</h4>
                                        <a href="javascript:void(0);" class="font-smooth underline custom-link">View All</a>
                                    </div>

                                    <div class="custom-margin-top">
                                        
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-1.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">Market Watch | Tuesday</span>
                                                <div class="h6 title-color mb-0">Deep Dive: Apple is Berkshire's largest stock holding, but Buffett...</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-2.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">InvestorPlace | Tuesday</span>
                                                <div class="h6 title-color mb-0">Apple Is Poised for Big Gains Amid Spring Hardware Launches</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-3.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">Benzinga | Tuesday</span>
                                                <div class="h6 title-color mb-0">Tigress Financial Is Bullish On Apple - Read Why</div>
                                            </div>
                                        </div>
                                        <div class="d-flex mb-4">
                                            <div class="align-self-center">
                                                <img src="./public/images/png/related-news/related-news-4.png" width="55" />
                                            </div>
                                            <div class="align-self-center ml-2">
                                                <span class="text-secondary font-smooth">Zacks Investment Research | Tuesday</span>
                                                <div class="h6 title-color mb-0">Best Growth Stocks to Buy for February 15th</div>
                                            </div>
                                        </div>
                                        
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>




                    <div class="tab-pane fade" id="pills-compliance" role="tabpanel" aria-labelledby="pills-compliance-tab">Compliance</div>
                    <div class="tab-pane fade" id="pills-analyst-ratings" role="tabpanel" aria-labelledby="pills-analyst-ratings-tab">Analysts' Ratings</div>
                    <div class="tab-pane fade" id="pills-forecasts" role="tabpanel" aria-labelledby="pills-forecasts-tab">Forecasts</div>
                    <div class="tab-pane fade" id="pills-insider-transactions" role="tabpanel" aria-labelledby="pills-insider-transactions-tab">Insider Transactions</div>
                    <div class="tab-pane fade" id="pills-ownership" role="tabpanel" aria-labelledby="pills-ownership-tab">Ownership</div>
                    <div class="tab-pane fade" id="pills-related-commpanies" role="tabpanel" aria-labelledby="pills-related-commpanies-tab">Related Companies</div>
                    <div class="tab-pane fade" id="pills-latest-news" role="tabpanel" aria-labelledby="pills-latest-news-tab">Latest News</div>
                    <div class="tab-pane fade" id="pills-press-releases" role="tabpanel" aria-labelledby="pills-press-releases-tab">Press Releases</div>
                </div>
            </div>

        </div>
    </div>
</section>


<?php include 'footer.php' ?>