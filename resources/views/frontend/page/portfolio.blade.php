@extends('layouts.frontent')

@section('content')
    <!-- banner starts -->
<div class="banner d-flex align-items-center light-grey-bg">
    
    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </div>
    </nav>
    

    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Portfolio</h1>
                <p class="larger-txt">Based on market demand, we have created 3 packages <br>that will cover all your business needs .</p>
                
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="/frontent/assets/images/banner/portfolio-banner.png" alt="Banner image" class="img-fluid">
                </div>
                <!-- End of .img-container -->
            </div>
            <!-- End of .col-lg-7 -->
        </div>
        <!-- End of .row -->
    </div>
    <!-- End of .container -->
</div>
<!-- End of .banner -->

<!-- Projects starts -->
<section class="projects section-gap " id="cynic-projects" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center">Featured Projects</h2>

        <div class="item-showcase grid-wrapper__small-padding">

            
            
            <div class="row ">
                
                    <div class="col-lg-4 col-md-6 ">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg light-grey-bg" data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-1.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Cynic Classic Design</span>Web Design</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 ">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg light-grey-bg" data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-2.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Diet Hospital</span>Social Media</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 ">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg light-grey-bg" data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-3.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Repo Dashboard Design</span>Logo Design</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
            </div>
            <div class="col-12 text-center"><a href="portfolio.html" class="custom-btn secondary-btn">DISCOVER MORE WORKS</a></div>
            <!-- End of .row -->
        </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->

<!-- Projects starts -->
<section class="projects section-gap light-grey-bg" id="cynic-projects" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center">Full Portfolio</h2>

        <div class="item-showcase grid-wrapper__small-padding">

            
                <div class="btn-filter-wrap nav nav-tabs justify-content-center">
                    <button class="btn-filter nav-link is-checked" data-filter="*">
                        <i class="ml-tro-3-trophy-cup-medallion-locket-win"></i>All Work</button>
                    <button class="btn-filter nav-link" data-filter=".category-a">
                        <i class="ml-symtwo-34-cursor-click-browser-website-arrow-computer"></i>Website</button>
                    <button class="btn-filter nav-link" data-filter=".category-b">
                        <i class="ml-des-9-blend-shape-graphics-design-tool-interface"></i>Logo</button>
                    <button class="btn-filter nav-link" data-filter=".category-c">
                        <i class="ml-des-57-upload-download-sync-application-device-mobile-computer"></i>Mobile App</button>
                    <button class="btn-filter nav-link" data-filter=".category-d">
                        <i class="ml-des-82-Video-player-internet-social-watch"></i>Social Media</button>
                </div>
                <!-- End of .btn-filter-wrap -->
            
            
            <div class="row iso-grid">
                
                    <div class="col-lg-4 col-md-6 item category-a">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg " data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-1.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Cynic Classic Design</span>Web Design</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 item category-a category-d">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg " data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-2.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Diet Hospital</span>Social Media</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 item category-b">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg " data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-3.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Repo Deshboard Design</span>Logo Design</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 item category-c category-d">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg " data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-4.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Cynic Classic Design</span>Social Media</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 item category-a">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg " data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-5.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Diet Hospital</span>Web Design</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
                    <div class="col-lg-4 col-md-6 item category-c">
                        <a href="portfolio.html" class="img-card text-center portfolio-card white-bg " data-bs-toggle="modal" data-bs-target="#product-modal">
                            <img src="/frontent/assets/images/products/project-6.png" alt="product" class="img-fluid">
                            <h4>
                                <span>Repo Deshboard Design</span>Mobile App Development</h4>
                        </a>
                        <!-- End of .img-card -->
                    </div>
                    <!-- End of .col-lg-4 -->
                
            </div>
            <div class="col-12 text-center"><a href="portfolio.html" class="custom-btn secondary-btn">LOAD MORE WORKS</a></div>
            <!-- End of .row -->
        </div>
        <!-- End of .project-showcase -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .projects -->

<section class="newsletter section-gap theme-bg-d newsletter__white">
    <div class="container">
        <h2 class="text-center">Sign up for our newsletter to stay up to 
            <br>date with tech news!</h2>

        <form action="#" class="newsletter-form" method="POST">
            <div class="row justify-content-between">
                <div class="col-md">
                    <input type="text" name="fname" placeholder="Name">
                </div>
                <div class="col-md">
                    <input type="text" name="email" placeholder="Email">
                </div>

                <div class="col-md-auto">
                    <a href="#" class="custom-btn secondary-btn">SUBSCRIBE</a>
                </div>
            </div>
            <!-- End of .row -->
        </form>
        <!-- End of .newsletter-form -->

        <div class="social-icons-wrapper d-flex justify-content-center">
            <p>Follow us:</p>
            <ul class="social-icons">
                <li>
                    <a href="http://www.facebook.com/" target="_blank" rel="noopener">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="http://twitter.com/" target="_blank" rel="noopener">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="http://youtube.com/" target="_blank" rel="noopener">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                        <i class="fab fa-google-plus-g"></i>
                    </a>
                </li>
            </ul>
            <!-- End of .social-icons -->
        </div>
        <!-- End of .social-icons-wrapper -->
    </div>
    <!-- End of .container -->
</section>
@endsection