@extends('layouts.frontent')

@section('content')
   <!-- banner starts -->
<div class="banner d-flex align-items-center light-grey-bg">
    
    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">News</li>
            </ol>
        </div>
    </nav>
    

    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>News</h1>
                <p class="larger-txt">Learn how we helped our several clients grow in online <br>business.It will give you an idea of our capabilities.</p>
                
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="/frontent/assets/images/banner/news-banner.png" alt="News banner image" class="img-fluid">
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

<!-- Section latest-news starts -->
<section class="latest-news section-gap" id="cynic-news" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center">SEO Category</h2>
        
        <div class="grid-wrapper">
            <div class="row justify-content-center">
                
                <div class="col-lg-4 col-md-6">
                    <a href="news-details.html" class="img-card news-card">
                        <img src="/frontent/assets/images/news/homepage/news-7.png" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>17 May, 2018
                                <span>Help Finding Information <br>Online</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-4 col-md-6">
                    <a href="news-details.html" class="img-card news-card">
                        <img src="/frontent/assets/images/news/homepage/news-8.png" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>18 May, 2019
                                <span>How To Excel In A Technical Job Interview</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-4 col-md-6">
                    <a href="news-details.html" class="img-card news-card">
                        <img src="/frontent/assets/images/news/homepage/news-9.png" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>20 May, 2019
                                <span>Windows Registry Cleaner Checklist</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-12 text-center">
                    <a href="#" class="custom-btn secondary-btn">LOAD MORE NEWS</a>
                </div>
                <!-- End of .text-center -->
            </div>
            <!-- End of .row -->

        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .latest-news -->

<!-- Section latest-news starts -->
<section class="latest-news section-gap light-grey-bg" id="cynic-news" data-scroll-offset="75">
    <div class="container">
        <h2 class="section-title text-center">Website Category</h2>
        
        <div class="grid-wrapper">
            <div class="row justify-content-center">
                
                <div class="col-lg-4 col-md-6">
                    <a href="news-details.html" class="img-card news-card">
                        <img src="/frontent/assets/images/news/homepage/news-10.png" alt="news image" class="img-fluid">
                        <div class="content ">
                            <h4>17 May, 2018
                                <span>Home Audio Recording For Everyone</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-4 col-md-6">
                    <a href="news-details.html" class="img-card news-card">
                        <img src="/frontent/assets/images/news/homepage/news-11.png" alt="news image" class="img-fluid">
                        <div class="content text-">
                            <h4>18 May, 2019
                                <span>Where Can You Find Unique Myspace Layouts Nowadays</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-4 col-md-6">
                    <a href="news-details.html" class="img-card news-card">
                        <img src="/frontent/assets/images/news/homepage/news-12.png" alt="news image" class="img-fluid">
                        <div class="content text-">
                            <h4>20 May, 2019
                                <span>Myspace Layouts The Missing Element</span>
                            </h4>
                            
                        </div>
                        
                    </a>
                    <!-- End of .img-card -->
                </div>
                <!-- End of .col-lg-4 -->
                
                <div class="col-lg-12 text-center">
                    <a href="#" class="custom-btn secondary-btn">LOAD MORE NEWS</a>
                </div>
                <!-- End of .text-center -->
            </div>
            <!-- End of .row -->

        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .latest-news -->

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