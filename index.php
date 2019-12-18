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

	?>/
	<!--//header-->
	<div class="page-content">
		<!--section slider-->
		<div class="section mt-0">
			<div class="quickLinks-wrap js-quickLinks-wrap-d d-none d-lg-flex">
				<div class="quickLinks js-quickLinks closed">
					<div class="container">
						<div class="row no-gutters">
							<div class="col">
								<a href="#" class="link">
									<i class="icon-placeholder"></i><span>Lokasi</span></a>
								<div class="link-drop p-0">
									<div id="googleMapDrop" class="google-map"></div>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-clock"></i><span>Waktu Kerja</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-clock"></i>Waktu Kerja</h5>
									<table class="row-table">
										<tr>
											<td><i>Senin-Kamis</i></td>
											<td>08:00 - 20:00</td>
										</tr>
										<tr>
											<td><i>Jumat</i></td>
											<td> 07:00 - 22:00</td>
										</tr>
										<tr>
											<td><i>Sabtu</i></td>
											<td>08:00 - 18:00</td>
										</tr>
										<tr>
											<td><i>Minggu</i></td>
											<td>Tutup</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-calendar"></i><span>Jadwal Dokter</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-calendar"></i>Jadwal Dokter</h5>
									<p>Anda dapat melihat jadwal dokter yang ada di puskesmas Kemangai
									</p>
									<p class="text-right"><a href="#specialistsSection"
											class="btn btn-sm btn-hover-fill link-inside">Selengkapnya</a></p>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-price-tag"></i><span>Daftar Tarif</span>
								</a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-price-tag"></i>Daftar Tarif</h5>
									<table class="row-table">
										<tr>
											<td>Konsultasi</td>
											<td>Rp 20.000</td>
										</tr>
										<tr>
											<td>Perikasi Gigi</td>
											<td>Rp 35.000</td>
										</tr>
										<tr>
											<td>Cek Darah</td>
											<td>Rp 250.000</td>
										</tr>
										<tr>
											<td>Cabut Gigi</td>
											<td>Rp 150.000</td>
										</tr>
										<tr>
											<td>Bersihkan Gigi</td>
											<td>Rp 100.000 - Rp 250.000</td>
										</tr>
										<tr>
											<td>Scaning (X-ray)</td>
											<td>Rp 500.000</td>
										</tr>
									</table>
									<br>
									<p class="text-right"><a href="#specialistsSection"
											class="btn btn-sm btn-hover-fill link-inside">Selengkapnya</a></p>
								</div>
							</div>
							<div class="col">
								<a href="#" class="link">
									<i class="icon-emergency-call"></i><span>Panggilan Darurat</span></a>
								<div class="link-drop">
									<h5 class="link-drop-title"><i class="icon-emergency-call"></i>Panggilan Darurat
									</h5>
									<p>Panggilan darurat ini beguna untuk membantu korban kecelakaan, tidak sadarkan
										diri, atau terluka parah </p>
									<ul class="icn-list">
										<li><i class="icon-telephone"></i><span
												class="phone">(021)-6565231<br>082298163892</span>
										</li>
										<li><i class="icon-black-envelope"></i><a
												href="mailto:info@besthotel-email.com">puskesmaskemangai17@gmail.com</a>
										</li>
									</ul>
									<p class="text-right mt-2"><a href="#contactForm"
											class="btn btn-sm btn-hover-fill link-inside">Kontak Kami</a></p>
								</div>
							</div>
							<div class="col col-close"><a href="#" class="js-quickLinks-close"><i class="icon-top"
										data-toggle="tooltip" data-placement="top" title="Close panel"></i></a></div>
						</div>
					</div>
					<div class="quickLinks-open js-quickLinks-open"><span data-toggle="tooltip" data-placement="left"
							title="Open panel">+</span></div>
				</div>
			</div>
			<div id="mainSliderWrapper">
				<div class="loading-content">
					<div class="inner-circles-loader"></div>
				</div>
				<div class="main-slider mb-0 arrows-white arrows-bottom" id="mainSlider"
					data-slick='{"arrows": false, "dots": true}'>
					<div class="slide">
						<div class="img--holder" data-bg="images/content/slider/slide-01.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											Selamat Datang<br>
											<b>Puskesmas Kemangai</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											Kami melayani dengan segenap hati</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-bg="/images/content/slider/slide-02.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											Selamat Datang<br>
											<b>Puskesmas Kemangai</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											Kami melayani dengan segenap hati</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="img--holder" data-bg="images/content/slider/slide-03.jpg"></div>
						<div class="slide-content center">
							<div class="vert-wrap container">
								<div class="vert">
									<div class="container">
										<div class="slide-txt1" data-animation="fadeInDown" data-animation-delay="1s">
											Selamat Datang<br>
											<b>Puskesmas Kemangai</b></div>
										<div class="slide-txt2" data-animation="fadeInUp" data-animation-delay="1.5s">
											Kami melayani dengan segenap hati</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section slider-->
		<!--section-->
		<div class="section mt-0 shadow-bot pt-2 pb-0 py-sm-4 mb-2">
			<div class="container">
				<div class="row js-icn-text-alt-carousel">
					<div class="col-md-6 col-lg-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="icon-first-aid-kit"></i></div>
							<div>
								<h4 class="icn-text-alt-title">Ruangan Nyaman</h4>
								<p>Open round the clock for convenience, quick and easy access</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="icon-flask"></i></div>
							<div>
								<h4 class="icn-text-alt-title">Peralatan Memadai</h4>
								<p>Cost-efficient, comprehensive and clinical laboratory services</p>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="icn-text-alt">
							<div class="icn-text-alt-icn"><i class="icon-doctor"></i></div>
							<div>
								<h4 class="icn-text-alt-title">Pelayanan Profesional</h4>
								<p>Qualified and certified physicians for quality medical care</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section-->
		<!--section online appointment-->
		<div class="section">
			<div class="container-fluid px-0">
				<div class="block-full-appointment bg-cover"
					style="background-image: url(images/content/online-appointment-bg.jpg)">
					<div class="container">
						<div class="row">
							<div class="col-sm-6">
								<div class="box-progress">
									<div class="box-progress-number">150<sup>KK</sup></div>
									<div class="box-progress-text">
										<h5>Jumlah Kepala Keluarga</h5>
										<p>For over 15 years, we have delighted our customers and provide them with the
											necessary services.</p>
									</div>
								</div>
								<div class="box-progress">
									<div class="box-progress-number">100<sup>%</sup></div>
									<div class="box-progress-text">
										<h5>Pelayanan Menyenangkan</h5>
										<p>Absolutely all our clients are ready to assure you of the high quality of our
											services.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 mt-5 mt-md-0 text-center text-md-right">
								<h2 class="text1">Data Pasien<br>
									Puskesmas Ambalau</h2>
								<div class="text2">You can now book a limited amount of doctors’ appointments online
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section online appointment-->
		<!--section achieved-->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Pencapaian Klinik</div>
					<h2 class="h1">Apa yang telah kami capai</h2>
					<div class="h-decor"></div>
				</div>
				<div class="row d-block js-counter-carousel">
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-hand"></i></div>
							<div class="counter-box-number"><span class="count" data-to="15" data-speed="1500">0</span>+
							</div>
							<div class="decor"></div>
							<div class="counter-box-text">Tahun Pelayanan</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-tooth-1"></i></div>
							<div class="counter-box-number"><span class="count" data-to="2" data-speed="1500">0</span>K
							</div>
							<div class="decor"></div>
							<div class="counter-box-text">Dokter Profesional</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-team"></i></div>
							<div class="counter-box-number"><span class="count" data-to="30" data-speed="1500">0</span>
							</div>
							<div class="decor"></div>
							<div class="counter-box-text">Pegawai Profesional</div>
						</div>
					</div>
					<div class="col">
						<div class="counter-box">
							<div class="counter-box-icon"><i class="icon-placeholder3"></i></div>
							<div class="counter-box-number"><span class="count" data-to="10" data-speed="1500">0</span>
							</div>
							<div class="decor"></div>
							<div class="counter-box-text">Ruangan Nyaman</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section achieved-->
		<!--section faq-->
		<div class="section bg-grey py-0">
			<div class="container-fluid px-0">
				<div class="row no-gutters">
					<div class="col-xl-6 banner-left bg-fullheight"
						style="background-image: url(images/content/banner-left.jpg)"></div>
					<div class="col-xl-6">
						<div class="faq-wrap">
							<div class="title-wrap">
								<h2 class="h1">Informasi<span class="theme-color"> Pasien</span></h2>
							</div>
							<div class="nav nav-pills" role="tablist">
								<a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab">Umum</a>
								<!-- <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab">Darurat</a> -->
							</div>
							<div id="tab-content" class="tab-content mt-sm-1">
								<div id="tab-A" class="tab-pane fade show active" role="tabpanel">
									<div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem1"
												aria-expanded="true"><span>1.</span><span>Apakah bisa tetap berobat jika tidak punya kartu BPJS/KIS ?</span></a>
											<div id="faqItem1" class="collapse show faq-item-content" role="tabpanel">
												<div>
													<p>
														Pelayanan kesehatan untuk berobat masih tetap bisa dilakukan, akan tetapi seluruh biaya pengobatan ditanggung oleh pasien
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem2"
												aria-expanded="false" class="collapsed"><span>2.</span><span>Apakah masih bisa berobat di atas jam 14.00 Wib ?</span></a>
											<div id="faqItem2" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Bisa, tetapi pelayanan pengobatan diarahkan menuju UGD bila di atas jam 14.00 Wib
													</p>
												</div>
											</div>
										</div>
									<!-- 	<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem3"
												aria-expanded="false" class="collapsed"><span>3.</span><span>How do I
													know if my teeth are healthy?</span></a>
											<div id="faqItem3" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist
														about how often you need to have your teeth checked by them
														based on the condition of your mouth, teeth and gums. It’s
														recommended that children see their dentist at least once a
														year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion1" href="#faqItem4"
												aria-expanded="false" class="collapsed"><span>4.</span><span>How can I
													improve my oral hygiene?</span></a>
											<div id="faqItem4" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist
														about how often you need to have your teeth checked by them
														based on the condition of your mouth, teeth and gums. It’s
														recommended that children see their dentist at least once a
														year.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div id="tab-B" class="tab-pane fade" role="tabpanel">
									<div id="faqAccordion2" class="faq-accordion" data-children=".faq-item">
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem21"
												aria-expanded="true"><span>1.</span><span>How can I improve my oral
													hygiene?</span></a>
											<div id="faqItem21" class="collapse show faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist
														about how often you need to have your teeth checked by them
														based on the condition of your mouth, teeth and gums. It’s
														recommended that children see their dentist at least once a
														year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem22"
												aria-expanded="false" class="collapsed"><span>2.</span><span>How do I
													know if my teeth are healthy?</span></a>
											<div id="faqItem22" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist
														about how often you need to have your teeth checked by them
														based on the condition of your mouth, teeth and gums. It’s
														recommended that children see their dentist at least once a
														year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem23"
												aria-expanded="false" class="collapsed"><span>3.</span>Why are regular
												dental assessments so important?</a>
											<div id="faqItem23" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist
														about how often you need to have your teeth checked by them
														based on the condition of your mouth, teeth and gums. It’s
														recommended that children see their dentist at least once a
														year.
													</p>
												</div>
											</div>
										</div>
										<div class="faq-item">
											<a data-toggle="collapse" data-parent="#faqAccordion2" href="#faqItem24"
												aria-expanded="false" class="collapsed"><span>4.</span><span>How often 1
													should I visit my dentist?</span></a>
											<div id="faqItem24" class="collapse faq-item-content" role="tabpanel">
												<div>
													<p>
														Everyone’s needs are different, so have a chat to your dentist
														about how often you need to have your teeth checked by them
														based on the condition of your mouth, teeth and gums. It’s
														recommended that children see their dentist at least once a
														year.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div> -->
							</div>
							<a href="#" class="btn mt-15 mt-md-3" data-toggle="modal"
								data-target="#modalQuestionForm"><i class="icon-right-arrow"></i><span>Ask
									question</span><i class="icon-right-arrow"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section faq-->
		<!--section special offers-->
		<div class="section" id="specialOffer">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Untuk Pasien Kami</div>
					<h2 class="h1">Kegiatan Rutin</h2>
					<div class="h-decor"></div>
				</div>
				<div class="special-carousel js-special-carousel row">
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<div class="corner-ribbon-wrap">
									<div class="corner-ribbon">
										10%<span>Diskon</span>
									</div>
								</div>
								<img src="images/content/special-photo-01.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Perawatan Gigi</div>
								<div class="special-card-txt2"></div>
								<div class="special-card-txt3">Rabu, 12 Oktober 2019
									<br>Jam 12.00-14.00 WIB</div>
								<div><a href="schedule.html" class="btn"><i
											class="icon-right-arrow"></i><span>Schedule</span><i
											class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-02.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Perawatan Gigi</div>
								<div class="special-card-txt2"></div>
								<div class="special-card-txt3">Rabu, 12 Oktober 2019
									<br>Jam 12.00-14.00 WIB</div>
								<div><a href="schedule.html" class="btn"><i
											class="icon-right-arrow"></i><span>Schedule</span><i
											class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-03.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Perawatan Gigi</div>
								<div class="special-card-txt2"></div>
								<div class="special-card-txt3">Rabu, 12 Oktober 2019
									<br>Jam 12.00-14.00 WIB</div>
								<div><a href="schedule.html" class="btn"><i
											class="icon-right-arrow"></i><span>Schedule</span><i
											class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
					<div class="col-6">
						<div class="special-card">
							<div class="special-card-photo">
								<img src="images/content/special-photo-04.jpg" alt="">
							</div>
							<div class="special-card-caption text-left">
								<div class="special-card-txt1">Perawatan Gigi</div>
								<div class="special-card-txt2"></div>
								<div class="special-card-txt3">Rabu, 12 Oktober 2019
									<br>Jam 12.00-14.00 WIB</div>
								<div><a href="schedule.html" class="btn"><i
											class="icon-right-arrow"></i><span>Schedule</span><i
											class="icon-right-arrow"></i></a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section special offers-->
		<!--section specialists-->
		<div class="section" id="specialistsSection">
			<div class="container">
				<div class="title-wrap text-center">
					<div class="h-sub theme-color">Tenaga Ahli Kami</div>
					<h1>Dokter</h1>
					<div class="h-decor"></div>
				</div>
				<p class="text-center max-600">Puskesmas Tambalau menyiapkan tenaga ahli profesional kepada pasien untuk
					memberikan pelayanan yang terbaik.</p>
				<form class="filterCarousel">
				</form>
				<div class="row specialist-carousel js-specialist-carousel">
					<div class="col-sm-6 col-md-4 category1">
						<div class="doctor-box doctor-box-style2 text-center">
							<div class="doctor-box-photo">
								<img src="images/content/doctor-05.jpg" class="img-fluid" alt="">
							</div>
							<div class="doctor-box-top">
								<h5 class="doctor-box-name">Dr. Terri Williams</h5>
								<div class="doctor-box-position">Psychiatrist</div>
							</div>
							<ul class="doctor-box-shedule">
								<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
								<li><span>Friday</span><span>07:00 - 22:00</span></li>
								<li><span>Saturday</span><span>08:00 - 18:00</span></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 category1"></div>
					<div class="col-sm-6 col-md-4 category2">
						<div class="doctor-box doctor-box-style2 text-center">
							<div class="doctor-box-photo">
								<img src="images/content/doctor-06.jpg" class="img-fluid" alt="">
							</div>
							<div class="doctor-box-top">
								<h5 class="doctor-box-name">Dr. Berry Gardner</a></h5>
								<div class="doctor-box-position">Cardiolog</div>
							</div>
							<ul class="doctor-box-shedule">
								<li><span>Mon-Thu</span><span>08:00 - 20:00</span></li>
								<li><span>Friday</span><span>07:00 - 22:00</span></li>
								<li><span>Saturday</span><span>08:00 - 18:00</span></li>
							</ul>

						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section specialists-->
		<!--section blog posts -->
		<div class="section">
			<div class="container">
				<div class="title-wrap text-center">
					<h2 class="h1">Berita Terbaru</h2>
					<div class="h-decor"></div>
				</div>
				<div class="blog-grid-full blog-grid-carousel-full js-blog-grid-carousel-full mt-3 mb-0 row">
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Simpler Solution That
											Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs,
								NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i
										class="icon-right-arrow"></i><span>Read more</span><i
										class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Trending Now: Thighlighting</a>
									</h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who
								come to us from Albany and beyond appreciate the versatility of liposuction — and it can
								also treat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i
										class="icon-right-arrow"></i><span>Read more</span><i
										class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-03.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Our Spa One Bridal Packages</a>
									</h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride.
								Photographs from a wedding day are designed to be timeless, cherished in frames in the
								homes of...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill"><i
										class="icon-right-arrow"></i><span>Read more</span><i
										class="icon-right-arrow"></i></a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-01.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">17<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">The Simpler Solution That
											Lasts</a></h2>
								</div>
							</div>
							<div class="post-teaser">When patients visit our practice from places like Saratoga Springs,
								NY, they often express that laser hair removal can sound daunting or excessive ...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read
									more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-02.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">22<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Trending Now: Thighlighting</a>
									</h2>
								</div>
							</div>
							<div class="post-teaser">No longer is liposuction just used on the abdomen. Patients who
								come to us from Albany and beyond appreciate the versatility of liposuction — and it can
								also treat...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read
									more</a></div>
						</div>
					</div>
					<div class="col-md-6 col-lg-4">
						<div class="blog-post bg-grey">
							<div class="post-image">
								<a href="blog-post-page.html"><img src="images/content/news-03.jpg" alt=""></a>
							</div>
							<div class="blog-post-info">
								<div class="post-date">26<span>JAN</span></div>
								<div>
									<h2 class="post-title"><a href="blog-post-page.html">Our Spa One Bridal Packages</a>
									</h2>
								</div>
							</div>
							<div class="post-teaser">There is no one more interested in looking beautiful than a bride.
								Photographs from a wedding day are designed to be timeless, cherished in frames in the
								homes of...</div>
							<div class="mt-2"><a href="blog-post-page.html" class="btn btn-sm btn-hover-fill">Read
									more</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--//section blog posts -->
	</div>
	<!--footer-->
	

	<?php

include "footer.php";
	?>

	<!--//footer-->
	<div class="backToTop js-backToTop">
		<i class="icon icon-up-arrow"></i>
	</div>
	<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Ask a Question</h3>
						<form class="mt-15" id="questionForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
									<i class="icon-user"></i>
								</span>
								<input type="text" name="name" class="form-control" autocomplete="off"
									placeholder="Your Name*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-email2"></i>
								</span>
								<input type="text" name="email" class="form-control" autocomplete="off"
									placeholder="Your Email*" />
							</div>
							<div class="input-group">
								<span>
									<i class="icon-smartphone"></i>
								</span>
								<input type="text" name="phone" class="form-control" autocomplete="off"
									placeholder="Your Phone" />
							</div>
							<textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Ask Now</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal modal-form fade" id="modalBookingForm">
		<div class="modal-dialog">
			<div class="modal-content">
				<button aria-label='Close' class='close' data-dismiss='modal'>
					<i class="icon-error"></i>
				</button>
				<div class="modal-body">
					<div class="modal-form">
						<h3>Book an Appointment</h3>
						<form class="mt-15" id="bookingForm" method="post" novalidate>
							<div class="successform">
								<p>Your message was sent successfully!</p>
							</div>
							<div class="errorform">
								<p>Something went wrong, try refreshing and submitting the form again.</p>
							</div>
							<div class="input-group">
								<span>
									<i class="icon-user"></i>
								</span>
								<input type="text" name="bookingname" class="form-control" autocomplete="off"
									placeholder="Your Name*" />
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-email2"></i>
										</span>
										<input type="text" name="bookingemail" class="form-control" autocomplete="off"
											placeholder="Your Email*" />
									</div>
								</div>
								<div class="col-sm-6 mt-1 mt-sm-0">
									<div class="input-group">
										<span>
											<i class="icon-smartphone"></i>
										</span>
										<input type="text" name="bookingphone" class="form-control" autocomplete="off"
											placeholder="Your Phone" />
									</div>
								</div>
							</div>
							<div class="row row-xs-space mt-1">
								<div class="col-sm-6">
									<div class="input-group">
										<span>
											<i class="icon-birthday"></i>
										</span>
										<input type="text" name="bookingage" class="form-control" autocomplete="off"
											placeholder="Your age" />
									</div>
								</div>
							</div>
							<div class="selectWrapper input-group mt-1">
								<span>
									<i class="icon-tooth"></i>
								</span>
								<select name="bookingservice" class="form-control">
									<option selected="selected" disabled="disabled">Select Service</option>
									<option value="Cosmetic Dentistry">Cosmetic Dentistry</option>
									<option value="General Dentistry">General Dentistry</option>
									<option value="Orthodontics">Orthodontics</option>
									<option value="Children`s Dentistry">Children`s Dentistry</option>
									<option value="Dental Implants">Dental Implants</option>
									<option value="Dental Emergency">Dental Emergency</option>
								</select>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-calendar2"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingdate" type="text" class="form-control datetimepicker"
										placeholder="Date" readonly>
								</div>
							</div>
							<div class="input-group flex-nowrap mt-1">
								<span>
									<i class="icon-clock"></i>
								</span>
								<div class="datepicker-wrap">
									<input name="bookingtime" type="text" class="form-control timepicker"
										placeholder="Time">
								</div>
							</div>
							<textarea name="bookingmessage" class="form-control" placeholder="Your comment"></textarea>
							<div class="text-right mt-2">
								<button type="submit" class="btn btn-sm btn-hover-fill">Book now</button>
							</div>
						</form>
					</div>
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