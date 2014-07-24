<!DOCTYPE html>
<html lang="es">
<head>
	<title>Bakti</title>
	<meta charset="utf-8" />
	
	<link rel="stylesheet" href="css/style.css" type="text/css" />

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
<div class="logo"><img src="images/logo.png" alt="logo"></div>
	<div class="lang"><a href="#">English</a> | <a href="#">Indonesia</a></div>
	<div class="search">
		<form name="form1" method="post" action="">
		  <label for="textfield"></label>
			<input name="" class="inputsearch" type="text" value="Type search keyword"  onblur="if(this.value=='') this.value='Type search keyword';" onfocus="if(this.value=='Type search keyword') this.value='';" />
			<input type="submit" name="button" id="button" class="btn_search" value="go">
		</form>
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
</div><!-- end menu -->
</header>


<article id="maincontent">

<div class="contentdesc">
<div class="pad">
<span>BAKTI</span> Membantu para pelaku pembangunan <span>bekerja lebih efektif</span> dalam
mencapai tujuan pembangunan <span>untuk kemajuan kawasan timur Indonesia</span>.
</div>
</div><!-- end contentdesc -->

<div class="wrapcontent">
	<div class="col1">
		<div class="ttlbox">
			<div class="heading">Fokus Bakti</div>
			<div class="path">Tentang BaKTI  >  Fokus BaKTI</div>
		</div>
	
<img src="images/ills1.jpg" alt="ils">
<?php print $content ?>
	
	</div><!-- end col1 -->
	<div class="col2">
			
		<div class="greenpaper">
Kawasan Timur Indonesia ( KTI ) Terdiri dari 4 Wilayah yaitu Nusa Tenggara, Sulawesi, Maluku dan Papua. Wilayah KTI meliputi 12 provinsi yaitu :
		</div>

		<div class="c_agenda">
		<h1>Agenda</h1><a href="#" class="selengkapnya">selengkapnya</a>

			<div class="tanggal">Jul<br /><span>15</span></div>
			<div class="h_agendacont"><a href="#">Event: Wajah Pendidikan Indonesia</a><br />"Inilah wajah pendidikan di negeri ini, Pak. Jadi jangan bicara mutu dulu. Keadaan seperti ini masih banyak disekitar kami."</div>

			<div class="tanggal">Jul<br /><span>15</span></div>
			<div class="h_agendacont"><a href="#">Event: Wajah Pendidikan Indonesia</a><br />"Inilah wajah pendidikan di negeri ini, Pak. Jadi jangan bicara mutu dulu. Keadaan seperti ini masih banyak disekitar kami."</div>

			<div class="tanggal">Jul<br /><span>15</span></div>
			<div class="h_agendacont"><a href="#">Event: Wajah Pendidikan Indonesia</a><br />"Inilah wajah pendidikan di negeri ini, Pak. Jadi jangan bicara mutu dulu. Keadaan seperti ini masih banyak disekitar kami."</div>

		</div>
	
	</div><!-- end col2 -->
</div><!-- end wrapcontent -->

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