<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jotea</title>
    <!-- Favicon img -->
    <link rel="shortcut icon" href="assets/images/logo.png">
    <!-- Bootstarp min css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- All min css -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Swiper bundle min css -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <!-- Magnigic popup css -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <!-- Animate css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Nice select css -->
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Sidebar area start here -->
    <div id="targetElement" class="side_bar slideInRight side_bar_hidden">
        <div class="side_bar_overlay"></div>
        <div class="logo mb-30">
            <img src="assets/images/logo/logo.svg" alt="logo">
        </div>
        <p class="text-justify">The foundation of any road is the subgrade, which provides a stable base for the road
            layers above. Proper compaction of
            the subgrade is crucial to prevent settling and ensure long-term road stability.</p>
        <ul class="info py-4 mt-65 bor-top bor-bottom">
            <li><i class="fa-solid primary-color fa-location-dot"></i> <a href="#0">example@example.com</a>
            </li>
            <li class="py-4"><i class="fa-solid primary-color fa-phone-volume"></i> <a href="tel:+912659302003">+91 2659
                    302 003</a>
            </li>
            <li><i class="fa-solid primary-color fa-paper-plane"></i> <a href="#0">info.company@gmail.com</a></li>
        </ul>
        <div class="social-icon mt-65">
            <a href="#0"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#0"><i class="fa-brands fa-twitter"></i></a>
            <a href="#0"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#0"><i class="fa-brands fa-instagram"></i></a>
        </div>
        <button id="closeButton" class="text-white"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <!-- Sidebar area end here -->

    <!-- Preloader area start -->
    <div class="loading">
        <span class="text-capitalize">L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>
    <!-- Preloader area end -->

    <!-- Mouse cursor area start here -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- Mouse cursor area end here -->

    <main>

        <!-- Login area start here -->
        <section class="login-area pt-50 pb-50">
            <div class="container">
                <div class="login__item">
                    <div class="row g-4">
                        <div class="col-xxl-8">
                            <div class="login__image">
                                <img src="assets/images/register/res-image1.jpg" alt="image">
                                <div class="btn-wrp">
                                    <a href="/login">sign in</a>
                                    <a class="active" href="/register">create account</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4">
                            <div class="login__content">
                                <h2 class="text-white mb-65">create account</h2>
                                <div class="form-area login__form">
                                    <form class="flex flex-col gap-6 items-center" action="{{ route('register')}}" method="POST">
                                        @csrf
                                        <input type="text" name="name" placeholder="User Name"
                                            class="w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500">
                                        <input
                                            class="mt-6 w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                            name="email" type="email" placeholder="Email">
                                        <input
                                            class="mt-6 w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                            name="password" type="password" placeholder="Enter Password">
                                        <input
                                            class="mt-6 w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                            name="pic" type="file" placeholder="Profil picture" accept="image/*">
                                        <input
                                            class="mt-6 w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                            name="phone" type="tel" placeholder="Phone Number">
                                        <input
                                            class="mt-6 w-full p-4 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-500"
                                            name="address" type="text" placeholder="Address">
                                            <div class="flex justify-between mt-4 w-72 border-2 border-orange-400 rounded-xl select-none">
                                                <label class="radio text-center flex flex-grow items-center justify-center rounded-lg p-1 cursor-pointer">
                                                    <input type="radio" name="role" value="1" class="peer hidden" />
                                                    <span class="tracking-widest peer-checked:bg-gradient-to-r peer-checked:from-[orange] peer-checked:to-[red] peer-checked:text-white text-gray-700 p-2 rounded-lg transition duration-150 ease-in-out">Particler</span>
                                                </label>
                                                <label class="radio text-center flex flex-grow items-center justify-center rounded-lg p-1 cursor-pointer">
                                                    <input type="radio" name="role" value="2" class="peer hidden" />
                                                    <span class="tracking-widest peer-checked:bg-gradient-to-r peer-checked:from-[orange] peer-checked:to-[red] peer-checked:text-white text-gray-700 p-2 rounded-lg transition duration-150 ease-in-out">Company</span>
                                                </label>
                                            </div>
                                        <button class="mt-30" type="submit" name="submit">Create Account</button>
                                        <div class="radio-btn mt-30">
                                            <span></span>
                                            <p>I accept your terms & conditions</p>
                                        </div>
                                    </form>
                                    <span class="or pt-30 pb-40">OR</span>
                                </div>
                                <div class="login__with">
                                    <a href="#0" class="flex"><img src="assets/images/icon/google.svg" alt=""> <span>continue with
                                        google</span></a>
                                    <a class="flex mt-15" href="#0"><img src="assets/images/icon/facebook.svg" alt="">
                                        continue with
                                        facebook</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Login area end here -->
    </main>

    <!-- Jquery 3. 7. 1 Min Js -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap min Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Swiper bundle min Js -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <!-- Counterup min Js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- Wow min Js -->
    <script src="assets/js/wow.min.js"></script>
    <!-- Magnific popup min Js -->
    <script src="assets/js/magnific-popup.min.js"></script>
    <!-- Nice select min Js -->
    <script src="assets/js/nice-select.min.js"></script>
    <!-- Pace min Js -->
    <script src="assets/js/pace.min.js"></script>
    <!-- Isotope pkgd min Js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- Waypoints Js -->
    <script src="assets/js/jquery.waypoints.js"></script>
    <!-- Script Js -->
    <script src="assets/js/script.js"></script>

</body>

</html>


