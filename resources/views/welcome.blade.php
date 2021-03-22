<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Welcome | Keus</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> --}}
    {{-- <link rel="icon" href="favicon.ico" type="image/x-icon"> --}}
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Ico Font CSS -->
    <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

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
                            <!-- /START SUBSCRIBE FORM -->
                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-6 col-xl-6  text-center">
                                <div class="subscribe-form text-center">
                                    <form action="#" class="form-inline mx-auto">
                                        <input type="email" name="email" class="form-control btn-rounded"
                                            placeholder="youremail@gmail.com">
                                        <button type="submit" class="btn btn-purple btn-round"><i
                                                class="icofont icofont-paper-plane"></i></button>
                                    </form>

                                    <p class="small-title">
                                        Subscribe with your mail so we can notify you when our site is ready
                                    </p>
                                </div>
                            </div>
                            <!-- /END SUBSCRIBE FORM -->

                            <!-- /START SOCIAL ICONS -->
                            <div class="col-md-12">
                                <div class="text-center">
                                    <ul class="list-inline social-icons social-icons-body">
                                        <li>
                                            <a href="#" target="_blank" class="">
                                                <i class="icofont icofont-social-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="">
                                                <i class="icofont icofont-social-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="">
                                                <i class="icofont icofont-social-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="">
                                                <i class="icofont icofont-social-linkedin"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank" class="">
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
    <script src="{{ asset('js/stars.js') }}"></script>
    <!-- scripts -->
    <script src="{{ asset('js/scripts.js') }}"></script>

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
</body>

</html>
