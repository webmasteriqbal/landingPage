<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <!-- meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! SEO::generate() !!}

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!--Livewire -->
    @livewireStyles
    <!-- Ico Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/icofont.min.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.min.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.min.css') }}">

</head>

<body class="bg-img body-bg">
    <div class="canvas-area">
        <canvas class="constellation"></canvas>
    </div>
    <!-- Preloader Starts -->
    <div class="preloader-wrap">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!--/Preloader Ends -->

    <!-- MAIN CONTENT PART START -->
    <div class="bg-img color-white main-container">


        <!-- BODY CONTENT PART START -->
        <div id="main-content-home" class="xs-no-positioning fixed fixed-middle positon-fix-style-1">
            <div>
                <!-- TITLE PART START -->
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="title">
                                <span class="main-title">We Are Coming Soon</span>
                                <p class="small-title">
                                    We are working on the design and development of our website.
                                    <br>
                                    Hopefully we will be able to give you something better soon.
                                    <br>
                                    Thank you for staying with us
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TITLE PART END -->

                <!-- COUNTER PART START -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-10 col-lg-7 col-xl-7">
                            <div class="home1-counter-box">
                                <input type="hidden" id="count-down-date" name="count-down-date"
                                    value="23 April, 2021 12:00:00">
                                <h2 class="expired-text hidden">Welcome to Our Website</h2>

                                <div class="home1-countdown-timer" id="countdown-boxes">
                                    <ul class="list-inline count-down-list text-center">
                                        <li id="years">
                                            <span class="years"></span>
                                            <span class="counter-time-title">Years</span>
                                        </li>
                                        <li id="months">
                                            <span class="months"></span>
                                            <span class="counter-time-title">Months</span>
                                        </li>
                                        <li id="days">
                                            <span class="days"></span>
                                            <span class="counter-time-title">Days</span>
                                        </li>
                                        <li id="hours">
                                            <span class="hours"></span>
                                            <span class="counter-time-title">Hours</span>
                                        </li>
                                        <li id="minutes">
                                            <span class="minutes"></span>
                                            <span class="counter-time-title">Minutes</span>
                                        </li>
                                        <li id="seconds">
                                            <span class="seconds"></span>
                                            <span class="counter-time-title">Seconds</span>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- COUNTER PART END -->

                <!-- SUBSCRIBE FORM PART START-->
                <div id="subscribe-form">
                    <div class="container">
                        <div class="row justify-content-center">
                            @livewire('subscriber-component')

                            <!-- /START SOCIAL ICONS -->
                            <div class="col-md-12">
                                <div class="text-center">
                                    <ul class="list-inline social-icons social-icons-body">
                                        <li>
                                            <a href="https://www.facebook.com/iqbalhasan.dev/" target="_blank" class=""
                                                data-toggle="tooltip" data-placement="top" title="Facebook">
                                                <i class="icofont icofont-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://twitter.com/iqbalhasandev" target="_blank" class=""
                                                data-toggle="tooltip" data-placement="top" title="twitter">
                                                <i class="icofont icofont-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.instagram.com/iqbalhasan.dev/" target="_blank" class=""
                                                data-toggle="tooltip" data-placement="top" title="instagram">
                                                <i class="icofont icofont-social-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.linkedin.com/in/iqbalhasandev" target="_blank" class=""
                                                data-toggle="tooltip" data-placement="top" title="linkedin">
                                                <i class="icofont icofont-social-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://github.com/iqbalhasandev" target="_blank" class=""
                                                data-toggle="tooltip" data-placement="top" title="github">
                                                <i class="icofont icofont-social-github"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /END SOCIAL ICONS -->
                        </div>
                    </div>
                </div>
                <!-- SUBSCRIBE FORM PART END-->
            </div>
        </div>
        <!-- BODY CONTENT PART END -->

    </div>
    <!-- /MAIN CONTENT PART ENDS -->



    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- zepto JS -->
    <script src="{{ asset('js/zepto.min.js') }}"></script>
    <!-- constellation JS -->
    <script src="{{ asset('js/constellation.min.js') }}"></script>
    <!-- stars JS -->
    <script src="{{ asset('js/stars.min.js') }}"></script>

    <!-- scripts -->
    <script src="{{ asset('js/scripts.min.js') }}"></script>

    <script>
        $('.canvas-area canvas').constellation({
			star: {
				width: 3
			},
			line: {
				color: 'rgba(255,255,255,0.7)'
			},
			length: (window.innerWidth / 9),
			radius: (window.innerWidth / 5)
		});
    </script>

    <!--Livewire -->
    @livewireScripts
</body>

</html>
