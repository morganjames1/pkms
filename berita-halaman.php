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
						<a href="index.php">Home</a>
						<span>Blog</span>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section-->

		<?php
					
    					$id_berita = $_GET['id'];
                       $queryBerita = mysqli_query($koneksi, "SELECT * from berita b JOIN admin a ON b.id_admin = a.id_admin where id_berita = '$id_berita'");
                        while($min=mysqli_fetch_array($queryBerita))
                        {
         ?>

		<div class="section page-content-first">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 aside">
						<div class="blog-post blog-post-single">
							<div class="blog-post-info">
								
								<div>
									<h2 class="post-title"><a href="blog-post-page.php"><?php echo $min['judul_berita'];?></a></h2>
									<div class="post-meta">
										<div class="post-meta-author">by <a href="index.php"><i><i><?php echo $min['nama_admin'];?></i></a></div>
										<div class="post-meta-social">
											<a href="#"><i class="icon-facebook-logo"></i></a>
											<a href="#"><i class="icon-twitter-logo"></i></a>
											<a href="#"><i class="icon-google-logo"></i></a>
											<a href="#"><i class="icon-instagram"></i></a>
										</div>
									</div>
									<div class="#"><?php echo $min['tanggal'];?></div>
								</div>
							</div>
							<div class="post-image">
								<img src="admin/images/?php echo $min['gambar'];?>" height = '500px' width = '500px'></a>
								
							</div>
							<div class="post-text">
								<?php echo $min['isi_berita'];?>
							</div>
							</div>
					

						<?php
					
    					$id_berita = $_GET['id'];
                       $queryBerita = mysqli_query($koneksi, "SELECT * from berita b JOIN admin a ON b.id_admin = a.id_admin where id_berita = '$id_berita'");
                        while($min=mysqli_fetch_array($queryBerita)){
         				 ?>

						<div class="side-block">
							<h3 class="side-block-title">Recent Posts</h3>
							<div class="blog-post post-preview">
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/blog/blog-post-featured-1.jpg" alt=""></a>
								</div>
								<div>
									<h4 class="post-title"><a href="blog-post-page.html">Are you brushing your teeth correctly?</a></h4>


									<a href="blog-post-page.html?id=<?php echo $min['id_berita'];?>"
								><?php echo $min['judul_berita'];?>

									<div class="post-meta">
										<div class="post-meta-author text-nowrap">by<a href="#"><i><?php echo $min['nama_admin'];?></i></a></div>

										<div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>17 Jan, 2018</div>
									</div>
								</div>
							</div>
							<div class="blog-post post-preview">
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/blog/blog-post-featured-2.jpg" alt=""></a>
								</div>
								<div>
									<h4 class="post-title"><a href="blog-post-page.html">FREE Dental Screening & X-Rays</a></h4>
									<div class="post-meta">
										<div class="post-meta-author text-nowrap">by <a href="#"><i>admin</i></a></div>
										<div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>17 Jan, 2018</div>
									</div>
								</div>
							</div>
							<div class="blog-post post-preview">
								<div class="post-image">
									<a href="blog-post-page.html"><img src="images/blog/blog-post-featured-3.jpg" alt=""></a>
								</div>
								<div>
									<h4 class="post-title"><a href="blog-post-page.html">How to Choose the Best Toothbrush</a></h4>
									<div class="post-meta">
										<div class="post-meta-author text-nowrap">by <a href="#"><i>admin</i></a></div>
										<div class="post-meta-date text-nowrap"><i class="icon icon-clock3"></i>17 Jan, 2018</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>

		<?php
	}
		?>
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