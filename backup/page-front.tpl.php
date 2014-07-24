<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bakti</title>
	<?php print $head; ?>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="<?php print $base_url . $base_path; ?>/sites/all/themes/bakti/css/style.css" type="text/css" />

	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->
		
	
		
</head>

<body>

<div id="container">

<header id="top">
<div class="logo"><img src="<?php print $base_url . $base_path; ?>/sites/all/themes/bakti/images/logo.png" alt="logo"></div>
	<div class="lang"><a href="#">English</a> | <a href="#">Indonesia</a></div>
	<div class="search">
		<?php print $search_box ?>
	</div>
<div class="menu">
	<div class="menuribbon"><img src="images/menuribbon.png" alt="ribbon"></div>
		<ul>
			<li><a href="#">Tentang BaKTI</a></li>
			<li><a href="#">Program</a></li>
			<li><a href="#">Berita BaKTI</a></li>
			<li><a href="#">Informasi</a></li>
			<li><a href="#">Dampak</a></li>
			<li><a href="#">Hubungi Kami</a></li>
		</ul>
		
	<?php 
    print theme('nice_menus_primary_links','down');
	?>
</div><!-- end menu -->
</header>


<article id="maincontent">

<div class="zone1home">
	<div class="col1">
		slider here
	</div>
	<div class="col2">
		<h1>HELPDESK<br />INFORMASI KTI</h1>
		<p><span>BAKTI</span> Membantu para pelaku pembangunan <span>bekerja lebih efektif</span> dalam
		mencapai tujuan pembangunan <span>untuk kemajuan kawasan timur Indonesia</span>.</p>
	</div>
</div><!-- end zone1home -->

<div class="zone2home">
	<div class="col1">
		<div class="ribbon"><img src="images/new.png"></div>
		<h1>Edisi 66 | Mei 2011 - Juni 2011</h1>
		<a href="#"><img src="images/magazine.png"></a>
		<a href="#" class="selengkapnya">Selengkapnya</a>
	</div>
	<div class="col2">
		<div class="pad">
		<h1>Bagaimana Bermitra Dengan BaKTI?</h1>
		BaKTI membuka kemitraan dengan lembaga maupun individu yang memiliki perhatian terhadap pembangunan di Kawasan Timur Indonesia. 
		Cara Bermitra:
			<ol>
				<li>Bekerjasama dalam desain, sosialisasi, pemantauan dan evaluasi serta publikasi program pembangunan</li>
				<li>Menjadi relawan dalam kegiatan pertukaran pengetahuan</li>
				<li>Memanfaatkan layanan dan fasilitas yang ditujukan untuk umum</li>
				<li>Bergabung dalam jaringan yang difasilitasi oleh BaKTI</li>
				<li>Menjadi kontributor untuk majalah BaKTI News dan bursa pengetahuan online www.batukar.info</li>
			</ol>
		</div>
	</div>
	<div class="col3">
		<div class="pad">
		<h1>Agenda</h1><a href="#" class="selengkapnya">selengkapnya</a>

			<div class="tanggal">Jul<br /><span>15</span></div>
			<div class="h_agendacont"><a href="#">Event: Wajah Pendidikan Indonesia</a><br />"Inilah wajah pendidikan di negeri ini, Pak. Jadi jangan bicara mutu dulu. Keadaan seperti ini masih banyak disekitar kami."</div>

			<div class="tanggal">Jul<br /><span>15</span></div>
			<div class="h_agendacont"><a href="#">Event: Wajah Pendidikan Indonesia</a><br />"Inilah wajah pendidikan di negeri ini, Pak. Jadi jangan bicara mutu dulu. Keadaan seperti ini masih banyak disekitar kami."</div>

			<div class="tanggal">Jul<br /><span>15</span></div>
			<div class="h_agendacont"><a href="#">Event: Wajah Pendidikan Indonesia</a><br />"Inilah wajah pendidikan di negeri ini, Pak. Jadi jangan bicara mutu dulu. Keadaan seperti ini masih banyak disekitar kami."</div>

		</div>
	</div>
</div><!-- end zone2home -->

<div class="zone3home">
	<div class="col1">
		<div class="katamereka">
		<h1>Apa kata mereka</h1>
		"Sharing knowledge dari para anggota Kelompok Kerja (Pokja) Forum KTI dan Jaringan Peneliti KTI (JiKTI) yang diprakarsai oleh BaKTI sangat menginspirasi saya dan kita semua. Kami mendapatkan
		informasi mengenai praktik cerdas yang telah dilaksanakan selama ini oleh masyarakat Kawasan Timur Indonesia di berbagai tempat dan bahwa kesemuanya itu dapat direplikasi juga di daerah lain sehingga mendorong kemajuan
		pembangunan di wilayah ini."
		</div>
		<div class="katamereka_tutup">
			H. La Sara<br />
			Pembantu Rektor I Universitas Haluoleo<br />
			Kendari
		</div>
	</div>
	<div class="col2">
		<div class="pad">
			<h1>Berita Terbaru</h1><a href="#" class="selengkapnya">selengkapnya</a>
			
			<a href="#">News Two Title Here</a> <span class="tanggal">20 Agustus 2011</span> 
			<img src="images/sample1.png">
			<div class="h_beritacont">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
		
			<a href="#">News Two Title Here</a> <span class="tanggal">20 Agustus 2011</span> 
			<div class="h_beritacont">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
	
			<a href="#">News Two Title Here</a> <span class="tanggal">20 Agustus 2011</span> 
			<div class="h_beritacont">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
	
		</div>
	</div>
	<div class="col3">
		<div class="pad">
			<div class="h_newsletter">
				Stay informed of the latest BaKTI issues by subscribing to our free e-mail updates & event announcements.
				<form name="form1" method="post" action="">
				  <label for="textfield"></label>
				  <input type="text" name="textfield" id="textfield">
				  <input type="submit" name="button" id="button" class="btn_newsletter" value="Submit">
				</form>
			</div>
			<div class="h_facebook">
				fb
			</div>
			<div class="h_sharethis">
				<a href="#">sharethis</a>
			</div>
		</div>
	</div>
</div><!-- end zone3home -->

</article>

<footer id="bottom">
<div class="pad">
	<div class="col1">
		MORE CONTACT INFORMATION <br />
		<a href="#"><img src="images/iconfb.png" alt="facebook"></a>
		<a href="#"><img src="images/icontw.png" alt="twitter"></a>
		<a href="#"><img src="images/iconyt.png" alt="youtube"></a>
	</div>
	<div class="col2">
		ABOUT US
		<ul>
			<li><a href="#">FAQ's</a></li>
			<li><a href="#">Ketentuan Penggunaan</a></li>
			<li><a href="#">Laporan Tahunan 2009</a></li>
		</ul>
	</div>
	<div class="col3">
		GET INVOLVED
		<ul>
			<li><a href="#">Gabung Dengan Jaringan Kami</a></li>
			<li><a href="#">Bermitra Dengan Kami</a></li>
			<li><a href="#">Kunjungi Fasilitas Kami</a></li>
		</ul>
	</div>
	<div class="col4">
		SHARE
		<ul>
			<li><a href="#">Kirim Profil Lembaga Anda</a></li>
			<li><a href="#">Sebarluaskan Aktifitas Anda</a></li>
			<li><a href="#">Kirim Artikel</a></li>
		</ul>
	</div>
</div>
<p class="copyright">&#169; 2011 Bursa Pengetahuan Kawasan Timur Indonesia</p>
</footer>

</div><!-- end container -->

</body>
</html>