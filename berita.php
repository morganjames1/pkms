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
			<div class="breadcrumbs-wrap">
				<div class="container">
					<div class="breadcrumbs">
						<a href="index.html">Home</a>
						<span>Blog Posts</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->



		<div class="section page-content-first">
			<div class="container">
				<div class="text-center mb-2  mb-md-3 mb-lg-4">
					<h1>Daftar Berita Puskesmas</h1>
					<div class="h-decor"></div>
				</div>
			</div>
			<div class="container">
				<div class="blog-isotope">
<?php
					
                       $queryBerita = mysqli_query($koneksi, "SELECT * from berita b JOIN admin a ON b.id_admin = a.id_admin ORDER BY id_berita desc limit 6");
                        while($min=mysqli_fetch_array($queryBerita))
                        {
                    ?>
					 
					<div class="blog-post">
						<div class="post-image" >
							<a href="berita-halaman.php"><img src="admin/images/<?php echo $min['gambar'];?>" height = '300px' width = '300px'></a>
						</div>



						
								<h2 class="post-title"><a href="berita-halaman.php?id=<?php echo $min['id_berita'];?>"
								><?php echo $min['judul_berita'];?></a></h2>
								<div class="post-meta">
									<div class="post-meta-author">by <a href="index.php"><i><?php echo $min['nama_admin'];?></i></a></div>

									<div class="post-meta-social">
										<a href="#"><i class="icon-facebook-logo"></i></a>
										<a href="#"><i class="icon-twitter-logo"></i></a>
										<a href="#"><i class="icon-google-logo"></i></a>
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
								</div>
								<div class="blog-post-info">
							<?php echo $min['tanggal']?>
							<div>
							</div>
						</div>

						<!-- <?php
$num_char = 50;
$text = 'Contoh script yang digunakan untuk memotong 50 huruf pertama dari kalimat / paragraf dengan php';
echo substr($text, 0, $num_char) . '...';
?> -->

						<div class="post-teaser">

						<?php
						$num_char = 250;
						$min['isi_berita'];
						 echo substr ($min['isi_berita'], 0, $num_char) . '...' ;?>
						 	
						 </div>
						 
						<div class="mt-2"><a href="berita-halaman.php?id=<?php echo $min['id_berita'];?>"
								 class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read more</span><i class="icon-right-arrow"></i></a></div>
					</div>

					<?php

				}
					?>
						

			</div>
		</div>
		<div class="clearfix">
				<ul class="pagination justify-content-center">
					<li class="page-item active"><a class="page-link" href="#">1</a></li>
					<li class="page-item"><a class="page-link" href="#">2</a></li>
					<li class="page-item"><a class="page-link" href="#">3</a></li>
					<li class="page-item"><span class="page-link">...</span></li>
					<li class="page-item"><a class="page-link" href="#">15</a></li>
				</ul>
				</div>
	</div>
	<!--//section-->
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="row py-1 py-md-2 px-lg-0">
                <div class="col-lg-4 footer-col1">
                    <div class="row flex-column flex-md-row flex-lg-column">
                        <div class="col-md col-lg-auto">
                            <div class="footer-logo">
                                <img src="images/footer-logo.png" alt="" class="img-fluid">
                            </div>
                            <div class="mt-2 mt-lg-0"></div>
                            <div class="footer-social d-lg-none">
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
                        <div class="col-md">
                            <div class="footer-text mt-1 mt-lg-2">
                                <p>To receive email releases, simply provide
                                    <br>us with your email below</p>
                                <form action="#" class="footer-subscribe">
                                    <div class="input-group">
                                        <input name="subscribe_mail" type="text" class="form-control"
                                            placeholder="Your Email" />
                                        <span><i class="icon-black-envelope"></i></span>
                                    </div>
                                </form>
                            </div>
                            <div class="footer-social d-none d-lg-block">
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
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3>Blog Posts</h3>
                    <div class="h-decor"></div>
                    <div class="footer-post d-flex">
                        <div class="footer-post-photo"><img src="images/content/footer-post-author-03.jpg" alt=""
                                class="img-fluid"></div>
                        <div class="footer-post-text">
                            <div class="footer-post-title"><a href="post.html">Medications & Oral Health</a></div>
                            <p>September 26, 2018</p>
                        </div>
                    </div>
                    <div class="footer-post d-flex">
                        <div class="footer-post-photo"><img src="images/content/footer-post-author-01.jpg" alt=""
                                class="img-fluid"></div>
                        <div class="footer-post-text">
                            <div class="footer-post-title"><a href="post.html">Smile For Your Health!</a></div>
                            <p>August 22, 2018</p>
                        </div>
                    </div>
                    <div class="footer-post d-flex">
                        <div class="footer-post-photo"><img src="images/content/footer-post-author-02.jpg" alt=""
                                class="img-fluid"></div>
                        <div class="footer-post-text">
                            <div class="footer-post-title"><a href="post.html">Tooth Fairy Traditions...</a></div>
                            <p>July 25, 2018</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <h3>Our Contacts</h3>
                    <div class="h-decor"></div>
                    <ul class="icn-list">
                        <li><i class="icon-placeholder2"></i>1560 Holden Street San Diego, CA 92139
                            <br>
                            <a href="contact.html" class="btn btn-xs btn-gradient"><i
                                    class="icon-placeholder2"></i><span>Get directions on the map</span><i
                                    class="icon-right-arrow"></i></a>
                        </li>
                        <li><i class="icon-telephone"></i><b><span class="phone"><span
                                        class="text-nowrap">1-800-267-0000</span>, <span
                                        class="text-nowrap">1-800-267-0001</span></span></b>
                            <br>(24/7 General inquiry)</li>
                        <li><i class="icon-black-envelope"></i><a href="mailto:info@dentco.net">info@dentco.net</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row text-center text-md-left">
                    <div class="col-sm">Copyright © 2018 <a
                            href="#">DentCo</a><span>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span>
                        <a href="#">Privacy Policy</a></div>
                    <div class="col-sm-auto ml-auto"><span class="d-none d-sm-inline">For emergency
                            cases&nbsp;&nbsp;&nbsp;</span><i
                            class="icon-telephone"></i>&nbsp;&nbsp;<b>1-800-267-0000</b></div>
                </div>
            </div>
        </div>
    </div>
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