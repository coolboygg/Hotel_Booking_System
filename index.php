<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>


    <!--swiperjs for photos-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <?php require('include/links.php'); ?>


    <style>
    .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
    }

    @media screen and (max-width: 575px) {
        .availability-form {
            margin-top: 25px;
            padding: 0 35px;
        }

    }
    </style>
</head>

<body class="bg-light">
    <?php require('include/header.php');

    ?>



    <!--html for swiper photos-- carousel-->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/slider/1.jpg " class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/slider/2.jpg" class="w-100 d-block" />
                </div>
                <div class="swiper-slide">
                    <img src="images/slider/3.jpg" class="w-100 d-block" />
                </div>
            </div>

        </div>

    </div>

    <!--Check Availability form-->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded ">
                <h5 class="mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight :500;">Check-in</label>
                            <input type="date" class="form-control shadow-none">

                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight :500;">Check-out</label>
                            <input type="date" class="form-control shadow-none">

                        </div>
                        <div class="col-lg-3 mb-3">

                            <label class="form-label" style="font-weight :500;">Adult </label>
                            <select class="form-select shadow-none">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>


                        </div>
                        <div class="col-lg-2 mb-3">

                            <label class="form-label" style="font-weight :500;">Children </label>
                            <select class="form-select shadow-none">
                                <option selected>Select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>


                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">submit</button>
                        </div>
                    </div>
            </div>
            </form>

        </div>
    </div>
    </div>


    <!--OUR ROOMS-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>
    <div class="container">
        <div class="row">

            <!--first card photo room-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">simple Room</h5>
                        <h6 class="mb-4">Rs1000 per night</h6>
                        <div class="featurea mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Rooms

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 sofa

                            </span>

                        </div>

                    </div>
                    <div class="facilities mb-4 mx-3">
                        <h6 class="mb-1 ">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Wifi

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Ac

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Room Heater

                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly mb-2">

                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>

                </div>

            </div>

            <!--second card-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">simple Room</h5>
                        <h6 class="mb-4">Rs1000 per night</h6>
                        <div class="featurea mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Rooms

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 sofa

                            </span>

                        </div>

                    </div>
                    <div class="facilities mb-4 mx-3">
                        <h6 class="mb-1 ">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Wifi

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Ac

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Room Heater

                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly mb-2">

                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>

                </div>

            </div>
            <!-- third card-->

            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">simple Room</h5>
                        <h6 class="mb-4">Rs1000 per night</h6>
                        <div class="featurea mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Rooms

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 sofa

                            </span>

                        </div>

                    </div>
                    <div class="facilities mb-4 mx-3">
                        <h6 class="mb-1 ">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Wifi

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Ac

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Room Heater

                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly mb-2">

                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>

                </div>

            </div>
            <!--fourth card-->
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">simple Room</h5>
                        <h6 class="mb-4">Rs1000 per night</h6>
                        <div class="featurea mb-4">
                            <h6 class="mb-1">Features</h6>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Rooms

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                1 Bathroom

                            </span>
                            <span class="badge rounded-pill bg-light text-dark  text-wrap">
                                2 sofa

                            </span>

                        </div>

                    </div>
                    <div class="facilities mb-4 mx-3">
                        <h6 class="mb-1 ">Facilities</h6>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Wifi

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Television

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Ac

                        </span>
                        <span class="badge rounded-pill bg-light text-dark  text-wrap">
                            Room Heater

                        </span>

                    </div>
                    <div class="d-flex justify-content-evenly mb-2">

                        <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                        <a href="#" class="btn btn-sm btn-outline-dark  shadow-none">More Details</a>
                    </div>

                </div>

            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-dark rounded-0 fw-bold shadow-none">More Rooms>>></a>

            </div>

        </div>
    </div>




    <!--Reach us-->
    <h2 class="mt-5 pt-4  text-center fw-bold h-font">Reach Us</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="320px"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.44024416578!2d80.56458307424403!3d28.706386480725275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ecc8394dc51d%3A0x3781d770867d2b87!2sHotel%20Gyanu%20Plaza!5e0!3m2!1sen!2snp!4v1685690232248!5m2!1sen!2snp"
                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
            <div class="col-lg-4 col-md-4">
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Call Us</h5>
                    <a href="Tel : 977-091-523456" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 977-091-523456
                    </a>

                </div>
                <div class="bg-white p-4 rounded mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                            <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                            <i class="bi bi-twitter me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3 ">
                        <span class="badge bg-light text-dark fs-6 p-2 ">
                            <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>

                </div>

            </div>
        </div>
    </div>



    <?php require('include/footer.php'); ?>


    <br><br><br>
    <br><br><br>




    <!--swiperjs-->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--js for swiper-->
    <script>
    var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 3500,
            disableOnInteraction: false,

        }

    });
    </script>
</body>

</html>