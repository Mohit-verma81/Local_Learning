<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Local Learning - Local Learning HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->

    <link href="css/main.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="#" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>Local Learning</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <a href="/" class="nav-item nav-link">Home</a>
                <a href="/about" class="nav-item nav-link">About</a>
                <a href="#" class="nav-item nav-link active">Courses</a>

                <a href="/contact" class="nav-item nav-link">Contact</a>
            </div>
            <a href="{{ route('course') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block"> <i class="fa fa-arrow-left ms-1 "></i> &nbsp;Join Teacher
            </a>
         <a href="{{ route('course') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Student <i
                 class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Courses</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Categories Start -->
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>

            </div>
            <div class="s006">
                <form>
                    <fieldset>

                        <div class="inner-form">
                            <div class="input-field">
                                <button class="btn-search" type="button" id="btn-search">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </button>
                                <input id="search" type="text" placeholder="Search courses" />
                            </div>
                        </div>
                        <div class="suggestion-wrap">
                            <span>TEACHER NAME</span>
                            <span>CLASSES</span>
                            <span>TIME</span>
                            <span>STUDENTS</span>
                            <span>DURATION</span>
                        </div>
                    </fieldset>
                </form>
            </div>

            <!-- Categories Start -->


            <!-- Courses Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="section-title bg-white text-center text-primary px-3">Courses</h6>
                        <h1 class="mb-5">Popular Courses</h1>
                    </div>
                    <div class="row g-4 justify-content-center">

                        <!--for-->
                        @foreach ($coursedataes as $course)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" id="cards" data-wow-delay="0.5s"
                                data-course-name="{{ $course->Course_name }}"
                                data-teacher-name="{{ $course->teacher[0]->Teacher_name }}"
                                data-price="{{ $course->Course_Price }}">
                                <div class="course-item bg-light  ">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid rounded" src="/storage/{{ $course->Course_Img }}"
                                            alt="">
                                        <div
                                            class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                            <a href="#"
                                                class="flex-shrink-0 btn btn-sm btn-primary px-3 border-end"
                                                style="border-radius: 30px 0 0 30px;">Read More</a>
                                            <a href="/courses" class="flex-shrink-0 btn btn-sm btn-primary px-3"
                                                style="border-radius: 0 30px 30px 0;">Join Now</a>
                                        </div>
                                    </div>

                                    <div class="text-center p-4 pb-0">
                                        <h3 class="mb-0">Rs:{{ $course->Course_Price }}-Only

                                        </h3>
                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small>(123)</small>
                                        </div>
                                        <h5 class="mb-4">{{ $course->Course_name }}</h5>
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-user-tie text-primary me-2"></i>{{ $course->teacher[0]->Teacher_name }}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-clock text-primary me-2"></i>Duration :
                                            {{ $course->Course_Duration }}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-clock text-primary me-2"></i>Time :
                                            {{ $course->Course_Time }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- hh-->


                    </div>
                </div>
            </div>
            <!-- Courses End -->


            <!-- Testimonial Start -->
            <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="text-center">
                        <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
                        <h1 class="mb-5">Our Students Say!</h1>
                    </div>
                    <div class="owl-carousel testimonial-carousel position-relative">
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">Client Name</h5>
                            <p>Profession</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">Client Name</h5>
                            <p>Profession</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">Client Name</h5>
                            <p>Profession</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                                style="width: 80px; height: 80px;">
                            <h5 class="mb-0">Client Name</h5>
                            <p>Profession</p>
                            <div class="testimonial-text bg-light text-center p-4">
                                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet
                                    diam et eos. Clita erat ipsum et lorem et sit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
                <div class="container py-5">
                    <div class="row g-5">
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Quick Link</h4>
                            <a class="btn btn-link" href="">About Us</a>
                            <a class="btn btn-link" href="">Contact Us</a>
                            <a class="btn btn-link" href="">Privacy Policy</a>
                            <a class="btn btn-link" href="">Terms & Condition</a>
                            <a class="btn btn-link" href="">FAQs & Help</a>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Contact</h4>
                            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                            <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                            <div class="d-flex pt-2">
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-twitter"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-youtube"></i></a>
                                <a class="btn btn-outline-light btn-social" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Gallery</h4>
                            <div class="row g-2 pt-2">
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="img/course-2.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="img/course-3.jpg" alt="">
                                </div>
                                <div class="col-4">
                                    <img class="img-fluid bg-light p-1" src="img/course-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <h4 class="text-white mb-3">Newsletter</h4>
                            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                                    placeholder="Your email">
                                <button type="button"
                                    class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="copyright">
                        <div class="row">
                            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                                &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved.

                                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML
                                    Codex</a><br><br>
                                Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                            </div>
                            <div class="col-md-6 text-center text-md-end">
                                <div class="footer-menu">
                                    <a href="">Home</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i
                    class="bi bi-arrow-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Template Javascript -->
            <script src="/js/main.js"></script>
            <script src="/js/search.js"></script>
</body>

</html>
