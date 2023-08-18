<!doctype html>

<html lang="en">


<head>


    <!-- META -->
    <meta charset="utf-8">
    <meta name="robots" content="noodp">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- PAGE TITLE -->
    <title>Launch - Coming Soon</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700&amp;subset=latin-ext"
          rel="stylesheet">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">


</head>


<body>


<!-- PRELOADER -->
<div class="preloader">

    <!-- SPINNER -->
    <div class="spinner">

        <div class="bounce-1"></div>
        <div class="bounce-2"></div>
        <div class="bounce-3"></div>

    </div>
    <!-- /SPINNER -->

</div>
<!-- /PRELOADER -->


<!-- HERO -->
<div class="hero">


    <!-- FRONT CONTENT -->
    <div class="front-content">


        <!-- CONTAINER MID -->
        <div class="container-mid">


            <!-- ANIMATION CONTAINER -->
            <div class="animation-container animation-fade-down" data-animation-delay="0">

                <img class="img-responsive logo" src="{{ asset('assets/img/logo.png') }}" alt="image">

            </div>
            <!-- /ANIMATION CONTAINER -->


            <!-- ANIMATION CONTAINER -->
            <div class="animation-container animation-fade-right" data-animation-delay="300">

                <h1>We're Coming Soon..</h1>

            </div>
            <!-- /ANIMATION CONTAINER -->


            <!-- ANIMATION CONTAINER -->
            <div class="animation-container animation-fade-left" data-animation-delay="600">

                <p class="subline">We're working on our new website. Join our newsletter and get notifed.</p>

            </div>
            <!-- /ANIMATION CONTAINER -->


            <!-- ANIMATION CONTAINER -->
            <div class="animation-container animation-fade-up" data-animation-delay="900">

                <div class="open-popup">Notify Me</div>

            </div>
            <!-- /ANIMATION CONTAINER -->


        </div>
        <!-- /CONTAINER MID -->


        <!-- FOOTER -->
        <div class="footer">


            <!-- ANIMATION CONTAINER -->
            <div class="animation-container animation-fade-up" data-animation-delay="1200">

                <p>© 2023 Your Brand | Design by <a href="https://templatefoundation.com">Template Foundation</a></p>

            </div>
            <!-- /ANIMATION CONTAINER -->


        </div>
        <!-- /FOOTER -->


    </div>
    <!-- /FRONT CONTENT -->


    <!-- BACKGROUND CONTENT -->
    <div class="background-content parallax-on">

        <div class="background-overlay"></div>
        <div class="background-img layer" data-depth="0.05"></div>

    </div>
    <!-- /BACKGROUND CONTENT -->


</div>
<!-- /HERO -->


<!-- POPUP ( SUBSCRIBE ) -->
<div class="popup">


    <!-- CARD -->
    <div class="card">


        <!-- CARD CLOSE BUTTON -->
        <div class="close-popup close-button"></div>

        <i class="fa fa-envelope-o" aria-hidden="true"></i>
        <h3>Sign Up</h3>
        <p class="subline">Signing up to our newsletter gives you exclusive access to our Website Launch!</p>

        <!-- FORM -->
        <form action="#" method="post" class="subscribe-form">


            <input type="text" name="email" placeholder="* Enter your Email" onfocus="this.placeholder = ''"
                   onblur="this.placeholder = '* Enter your Email'" class="email form-control">

            <!-- PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) DO NOT REMOVE -->
            <div class="fhp-input"><input type="text" name="phone" placeholder="* Enter your phone to Subscribe!"
                                          class="email form-control"></div>
            <!-- /PHANTOM ELEMENT ( HONEYPOT CAPTCHA FOR SECURITY ) DO NOT REMOVE -->

            <button type="submit" class="btn btn-primary form-control">Subscribe<i class="fa fa-long-arrow-right"
                                                                                   aria-hidden="true"></i></button>

            <!-- SUCCESS-ERROR MESSAGE -->
            <div class="error-message">* Enter a valid Email Address!</div>
            <div class="success-message">* Successfuly Subscribed!</div>
            <!-- /SUCCESS-ERROR MESSAGE -->


        </form>
        <!-- /FORM -->


    </div>
    <!-- /CARD -->


</div>
<!-- /POPUP ( SUBSCRIBE ) -->


<!-- JAVASCRIPTS -->
<script type="text/javascript" src="{{ asset('assets/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>


</body>


</html>
