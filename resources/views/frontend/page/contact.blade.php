@extends('layouts.frontent')

@section('content')
    <!-- banner starts -->
<div class="banner d-flex align-items-center light-grey-bg">
    
    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>
    </nav>
    

    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Contact</h1>
                <p class="larger-txt">Learn how we helped our several clients grow in online <br>business.It will give you an idea of our capabilities.</p>
                
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="/frontent/assets/images/banner/contact-banner.png" alt="Contact banner image" class="img-fluid">
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

<section class="contact-us section-gap">
    <div class="container">
        <h2 class="section-title text-center">Contact Us</h2>
        <p class="larger-txt text-center">Ut blandit sem vitae ipsum vestibulum finibus. Pellentesque habitant morbi
                tristique senectus</p>
        <div class="quote-form-wrapper contact-form-wrapper text-center grid-wrapper">
            <form method="POST" class="quote-form text-center row" action="#">
                <div class="col-lg-6">
                    <input type="text" name="fname" placeholder="Name">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="email" placeholder="Email">
                </div>

                <div class="col-lg-6">
                    <input type="text" name="phone" placeholder="Phone">
                </div>
                <div class="col-lg-6">
                    <input type="text" name="website" placeholder="Website">
                </div>
                <div class="col-lg-12">
                    <textarea placeholder="Message" name="message"></textarea>
                    <button type="submit" class="custom-btn secondary-btn">Contact Us</button>
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
            </form>
            <!-- End of .quote-form -->
        </div>
        <!-- End of .quote-form-wrapper -->
    </div>
</section>

<!-- location starts -->
<section class="location section-gap light-grey-bg" id="cynic-contact" data-scroll-offset="75" data-scroll-offset-mobile="75">
    <div class="container">
        <h2 class="section-title text-center">Our Location</h2>
        <ul class="nav nav-tabs location-tab justify-content-center" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#location-tab-1">Los Angeles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#location-tab-2">Miami</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#location-tab-3">San Francisco</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#location-tab-4">New York</a>
            </li>
        </ul>
        <!-- End of .nav-tabs -->

        <div class="tab-content location-tab-content grid-wrapper" id="myTabContent">
            <div class="tab-pane fade show active" id="location-tab-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423283.4355495124!2d-118.69191514099776!3d34.020730497983934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos+Angeles%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1531805451146" width="600" height="450" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="tab-pane fade" id="location-tab-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114964.38943832612!2d-80.29949838161122!3d25.78254531076632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C+FL%2C+USA!5e0!3m2!1sen!2sbd!4v1531805857653" width="600" height="450" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="tab-pane fade" id="location-tab-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42437.17344437831!2d-122.48127727514952!3d37.76280447210564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sbd!4v1531805888648" width="600" height="450" style="border:0" allowfullscreen=""></iframe>
            </div>
            <div class="tab-pane fade" id="location-tab-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583088354!2d-74.11976389828038!3d40.697663748695746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1531805909949" width="600" height="450" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
        <!-- End of .tab-content -->

        <div class="contact-info">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="info">
                        <h5>Head Quarter</h5>
                        <p>868 S. La Sierra Drive <br>Los Angeles <br>California, USA</p>
                    </div>
                    <!-- End of .info -->
                </div>
                <!-- End of .col-md-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <h5>Email</h5>
                        <a href="mailto:info@companyname.com">info@companyname.com</a>
                    </div>
                    <!-- End of .info -->
                </div>
                <!-- End of .col-md-3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="info">
                        <h5>Phone</h5>
                        <a href="tel:+12224005555">+1 (222) 400-5555</a>
                    </div>
                    <!-- End of .info -->
                </div>
                <!-- End of .col-md-3 -->
                <div class="col-md-6 col-lg-2 text-lg-right info">
                    <a href="#" class="custom-btn secondary-btn" data-bs-toggle="modal" data-bs-target="#quote-modal">Contact
                        Us</a>
                </div>
            </div>
            <!-- End of .contact-in -->
        </div>
        <!-- End of .contact-info -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .location -->

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