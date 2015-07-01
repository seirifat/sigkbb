<?php
     include '../includes/session.php';
     if (is_login() && !is_admin()){
	
?>
<!DOCTYPE html>
<html lang="en">
  <?php include 'includes/head.php'; ?>
  <?php include 'includes/menu.php'; ?>
	<body role="document" style="padding-top: 100px;">
	<div class="container theme-showcase" role="main" >
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron padding-top col-sm-12" style="background-color:white;height:15em;">
		<div class="container">
			<div class="rows">
				<div class="col-sm-23">
					<div class="content-welcome"style="background-color: rgb(247, 247, 247); border-radius:6px;margin-left: -75px;margin-right: -75px;padding-left: 1em;padding-bottom: 1em;padding-top: 1em;" >
					<font size="6%"><b><center>Selamat datang!!</font></b></center>
					<font size="4%"><p>Selamat datang di Sistem Informasi Geografis Kabupaten Bandung Barat. Situs ini dipersiapkan sebagai pusat informasi, pendaftaran dan pengolahan data usaha di kabupaten Bandung Barat. </p></font>
					</div>
				</div>
			</div>
		<br><br>
		</div>
    </div>
	
	<hr class="featurette-divider">
	<div class="row">
		<div class="col-sm-4">
		  <div class="panel panel-primary">
			<div class="panel-heading">
					<h3 class="panel-title"><center>Data Usaha</h3></center>
			</div>
			<div class="panel-body">
			<center><img src="media/icon/sekolah.png" height=50><br><br>Memuat daftar usaha di kabupaten Bandung Barat<br><a href='data_usaha.php'>Selengkapnya.</a></center>
			</div>
		  </div>
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
		  <div class="panel panel-success">
			<div class="panel-heading">
			  <h3 class="panel-title"><center>Pendaftaran Usaha</h3>
			</div>
			<div class="panel-body">
			<center><img src="media/icon/online.png" height=50><br><br>Laman untuk melakukan pendaftaran usaha baru.<br><a href='daftar_usaha.php'>Selengkapnya</a></center>
			</div>
		  </div>
		  
		</div><!-- /.col-sm-4 -->
		<div class="col-sm-4">
		  <div class="panel panel-info">
			<div class="panel-heading">
			  <h3 class="panel-title"><center>Informasi Usaha</h3></center>
			</div>
			<div class="panel-body">
			<center><img src="media/icon/rekap.jpg" height=50><br><br>Memuat informasi usaha dalam maps.<br><a href='informasi_usaha.php'>Selengkapnya</a>
			</div>
		   </div><!-- /.col-sm-4 -->
		</div>
	</div>
	<hr class="featurette-divider">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="2000">
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
			<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item">
				<img data-src="holder.js/1140x500/auto/#777:#555/text:First slide" alt="First slide [1140x500]" src="media/img/2.jpg" data-holder-rendered="true">
			</div>
			<div class="item active">
				<img data-src="holder.js/1140x500/auto/#666:#444/text:Second slide" alt="Second slide [1140x500]" src="media/img/4.jpg" data-holder-rendered="true">
			</div>
			<div class="item">
				<img data-src="holder.js/1140x500/auto/#555:#333/text:Third slide" alt="Third slide [1140x500]" src="media/img/5.jpg" data-holder-rendered="true">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	
	<hr class="featurette-divider" width="80%">
	<?php include 'includes/footer.php'; ?>  
	</body>
</html>
<?php 
}
else
{
	if (is_admin()){
		redirect($url = 'error_page2.php');
	}
	else{
		redirect($url = 'error_page.php');
	}
}
?>