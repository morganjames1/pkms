<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description"
        content="html 5 template, dentist, stomatologist, dental clinic template, medical template, clinic template, surgery clinic theme, plastic surgery template">
    <meta name="author" content="websmirno.site">
    <meta name="format-detection" content="telephone=no">
    <title>Puskesmas Kemangai</title>
    <!-- Stylesheets -->
    <link href="vendor/slick/slick.css" rel="stylesheet">
    <link href="vendor/animate/animate.min.css" rel="stylesheet">
    <link href="icons/style.css" rel="stylesheet">
    <link href="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css" rel="stylesheet">
    <link href="css/style-color-3.css" rel="stylesheet">
    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <!-- Google map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCiFdr5Z0WRIXKUOqoRRvzRQ5SkzhkUVjk"></script>
</head>

<body class="shop-page layout-landing">
    <!--header-->
   <?php

   include "header.php";

   ?>
    <!--//header-->
    <div class="page-content">
        <!--section-->
        <div class="section mt-0">
            <div class="contact-map" id="googleMapContact"></div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section mt-0 bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md">
                        <div class="title-wrap">
                            <h5>Clinic Location</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-placeholder2"></i> DentCo Dental Clinic
                                <br>1560 Holden Street San Diego,
                                <br>CA 92139
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Contact Info</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-telephone"></i>Phone: <span class="theme-color"><span
                                        class="text-nowrap">1-800-267-0000,</span> <span
                                        class="text-nowrap">1-800-267-0001</span>
                                </span>
                                <br> Fax: <span class="theme-color"><span class="text-nowrap">(957) 267-0020</span>
                                </span>
                            </li>
                            <li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md mt-3 mt-md-0">
                        <div class="title-wrap">
                            <h5>Working Time</h5>
                            <div class="h-decor"></div>
                        </div>
                        <ul class="icn-list-lg">
                            <li><i class="icon-clock"></i>
                                <div>
                                    <div class="d-flex"><span>Mon-Thu</span><span class="theme-color">08:00 -
                                            20:00</span></div>
                                    <div class="d-flex"><span>Friday</span><span class="theme-color">07:00 -
                                            22:00</span></div>
                                    <div class="d-flex"><span>Saturday</span><span class="theme-color">08:00 -
                                            18:00</span></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
        <!--section-->
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md col-lg-5">
                        <div class="pr-0 pr-lg-8">
                            <div class="title-wrap">
                                <h2>Kirimkan Pertanyaan atau Saran Anda !</h2>
                                <div class="h-decor"></div>
                            </div>
                            <div class="mt-2 mt-lg-4">
                                <p>For general questions, please send us a message and we’ll get right back to you. You
                                    can also call us directly to speak with a member of our service team or insurance
                                    expert.</p>
                                <p class="p-sm">Fields marked with a * are required.</p>
                            </div>
                            <div class="mt-2 mt-md-5"></div>
                            <h5>Stay Connected</h5>
                            <div class="content-social mt-15">
                                <a href="https://www.facebook.com/" target="blank" class="hovicon"><i
                                        class="icon-facebook-logo"></i></a>
                                <a href="https://www.twitter.com/" target="blank" class="hovicon"><i
                                        class="icon-twitter-logo"></i></a>
                                <a href="https://plus.google.com/" target="blank" class="hovicon"><i
                                        class="icon-google-logo"></i></a>
                                <a href="https://www.instagram.com/" target="blank" class="hovicon"><i
                                        class="icon-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg-6 mt-4 mt-md-0">

                        <form id="form_validation" method="POST" action="kontak_tambah.php" enctype="multipart/form-data">


                       <!--  <form class="contact-form" id="contactForm" method="post" novalidate="novalidate">
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div> -->
                            <div>
                                <input type="text" class="form-control" name="name" placeholder="Your name*">
                            </div>
                            <div class="mt-15">
                                <input type="text" class="form-control" name="email" placeholder="Email*">
                            </div>
                            <div class="mt-15">
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone">
                            </div>
                            <div class="mt-15">
                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-hover-fill"><i
                                        class="icon-right-arrow"></i><span>Send message</span><i
                                        class="icon-right-arrow"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--//section-->
    </div>
    <!--footer-->
   <?php

   include "footer.php";

   ?>
    <!-- Vendors -->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/jquery-migrate/jquery-migrate-3.0.1.min.js"></script>
    <script src="vendor/cookie/jquery.cookie.js"></script>
    <script src="vendor/bootstrap-datetimepicker/moment.js"></script>
    <script src="vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="vendor/waypoints/sticky.min.js"></script>
    <script src="vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="vendor/slick/slick.min.js"></script>
    <script src="vendor/scroll-with-ease/jquery.scroll-with-ease.min.js"></script>
    <script src="vendor/countTo/jquery.countTo.js"></script>
    <script src="vendor/form-validation/jquery.form.js"></script>
    <script src="vendor/form-validation/jquery.validate.min.js"></script>
    <script src="vendor/isotope/isotope.pkgd.min.js"></script>
    <!-- Custom Scripts -->
    <script src="js/app.js"></script>
    <script src="js/app-shop.js"></script>
    <script src="form/forms.js"></script>

</body>

</html>