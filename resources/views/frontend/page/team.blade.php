@extends('layouts.frontent')

@section('content')
    <!-- banner starts -->
<div class="banner d-flex align-items-center light-grey-bg">
    
    <!-- Breadcrumb starts -->
    <nav class="breadcrumb-wrapper" aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Our Creative Team</li>
            </ol>
        </div>
    </nav>
    

    <div class="container">
        <div class="row no-gutters align-items-center">
            <div class="col-lg-6 text-center text-lg-left">
                <h1>Our Creative Team</h1>
                <p class="larger-txt">Learn how we helped our several clients grow in online <br>business.It will give you an idea of our capabilities.</p>
                
            </div>
            <!-- End of .col-lg-5 -->

            <div class="col-lg-6">
                <div class="img-container text-center text-lg-right">
                    <img src="/frontent/assets/images/banner/team-banner.png" alt="Team banner image" class="img-fluid">
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

<section class="team section-gap " id="cynic-team" data-scroll-offset="75" data-scroll-offset-mobile="75">
    <div class="container">
        <h2 class="section-title text-center">Teamwork Makes the Dream Work</h2>
        <p class="larger-txt text-center">Ut blandit sem vitae ipsum vestibulum finibus. Pellentesque habitant morbi
            tristique senectus</p>

        <div class="grid-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <a href="team.html" class="img-card team-card text-center" data-bs-toggle="modal" data-bs-target="#team-modal">
    <img src="/frontent/assets/images/team/team-member-1.png" alt="team member" class="img-fluid">
    <h4>
        <span>Steve Johnson</span> Chief Exicutive Officer</h4>
</a>
<!-- End of .img-card -->
                </div>
                <!-- End of .col-md-4 -->

                <div class="col-md-4">
                     <a href="team.html" class="img-card team-card text-center" data-bs-toggle="modal" data-bs-target="#team-modal">
    <img src="/frontent/assets/images/team/team-member-2.png" alt="team member" class="img-fluid">
    <h4>
        <span>Olivia Jackson</span> Chief Operating Officer</h4>
</a>
<!-- End of .img-card -->
                </div>
                <!-- End of .col-md-4 -->

                <div class="col-md-4">
                     <a href="team.html" class="img-card team-card text-center" data-bs-toggle="modal" data-bs-target="#team-modal">
    <img src="/frontent/assets/images/team/team-member-3.png" alt="team member" class="img-fluid">
    <h4>
        <span>Tamerlan Aziev</span> Chief Technology Officer</h4>
</a>
<!-- End of .img-card -->
                </div>
                <!-- End of .col-md-4 -->
                
                <div class="col-md-4">
                    <a href="team.html" class="img-card team-card text-center" data-bs-toggle="modal" data-bs-target="#team-modal">
    <img src="/frontent/assets/images/team/team-member-4.png" alt="team member" class="img-fluid">
    <h4>
        <span>Silvia Perry</span> Head of Marketing</h4>
</a>
<!-- End of .img-card -->
                </div>
                <!-- End of .col-md-4 -->

                <div class="col-md-4">
                    <a href="team.html" class="img-card team-card text-center" data-bs-toggle="modal" data-bs-target="#team-modal">
    <img src="/frontent/assets/images/team/team-member-5.png" alt="team member" class="img-fluid">
    <h4>
        <span>John Kenny</span> Senior Design Strategist</h4>
</a>
<!-- End of .img-card -->
                </div>
                <!-- End of .col-md-4 -->

                <div class="col-md-4">
                    <a href="team.html" class="img-card team-card text-center" data-bs-toggle="modal" data-bs-target="#team-modal">
    <img src="/frontent/assets/images/team/team-member-6.png" alt="team member" class="img-fluid">
    <h4>
        <span>David Schwimmer</span> Web Developer</h4>
</a>
<!-- End of .img-card -->
                </div>
                <!-- End of .col-md-4 -->

                
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .grid-wrapper -->
    </div>
    <!-- End of .container -->
</section>
<!-- End of .team -->

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