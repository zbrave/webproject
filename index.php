<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script type="text/javascript" src="js/jquery-3.1.0.js" ></script>
	<script type="text/javascript" src="js/bootstrap.js" ></script>
	<!-- [if lt IE 9]>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
	<![endif]-->
	<title>BLOG - Ana Sayfa</title>
</head>
<body>
	<!-- Navbar -->
	<div id="MyMenu" class="navbar navbar-inverse navbar-static-top" >
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Home</a>
			    	
			    	<button class="navbar-toggle" data-toggle="collapse" data-target=".navbarSec">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
			</div>
			<div class="collapse navbar-collapse navbarSec">
				<ul class="nav navbar-right navbar-nav">
					<li class="active"><a href="#" title="">Anasayfa</a></li>
					<li><a href="#" title="">Hakkımızda</a></li>
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" title="">Blog<span class="caret"></span></a>
						<ul class="dropdown-menu navbar-inverse dropdownListMenu">
							<li><a href="">Blog1</a></li>
							<li><a href="">Blog2</a></li>
							<li><a href="">Blog3</a></li>
							<li><a href="">Blog4</a></li>
						</ul>
					</li>
					<li><a href="#" title="">İletişim</a></li>
				</ul>
			</div>	
		</div>
	</div>
	<!-- Navbar ends -->
	
	<!-- Carousel 
	<div class="container">-->
		<div class="carousel slide" id="MySlide">
			<ol class="carousel-indicators">
				<li class="active" data-target="#MySlide" data-slide-to="0"></li>
				<li data-target="#MySlide" data-slide-to="1"></li>
				<li data-target="#MySlide" data-slide-to="2"></li>
				<li data-target="#MySlide" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img src="images/slide/1.jpg" alt="" title="" longdesc="" />
					<div class="carousel-caption">
						<h2>Bootstrap Web</h2>
						<p>Bu ders içerik</p>
					</div>
				</div>
				<div class="item">
					<img src="images/slide/2.jpg" alt="" title="" longdesc="" />
					<div class="carousel-caption">
						<h2>Bootstrap Web</h2>
						<p>Bu ders içerik</p>
					</div>
				</div>
				<div class="item">
					<img src="images/slide/3.jpg" alt="" title="" longdesc="" />
					<div class="carousel-caption">
						<h2>Bootstrap Web</h2>
						<p>Bu ders içerik</p>
					</div>
				</div>
				<div class="item">
					<img src="images/slide/4.jpg" alt="" title="" longdesc="" />
					<div class="carousel-caption">
						<h2>Bootstrap Web</h2>
						<p>Bu ders içerik</p>
					</div>
				</div>
				<a class="left carousel-control" href="#MySlide" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#MySlide" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	<!--</div>
	 Carousel ends-->

	 <!-- Grid System started -->
	 <div class="container">
	 <br>
	 	<div class="row">
	 		<!-- Side Bar Started -->
		 	<div class="col-lg-3 col-md-3 col-sm-4">
		 		<div class="list-group">
		 			<a href="" class="list-group-item">Gezi</a>
		 			<a href="" class="list-group-item">Oyun</a>
		 			<a href="" class="list-group-item">Yazılım</a>
		 			<a href="" class="list-group-item">Teknoloji</a>
		 			<a href="" class="list-group-item">Araba</a>
		 			<a href="" class="list-group-item">Zımbırtı</a>
		 		</div>
		 	</div>
		 	<!-- Side Bar ends -->
		 	<!-- Content started -->
		 	<div class="col-lg-9 col-md-9 col-sm-8">
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
			 	<div class="col-lg-4 col-md-4 col-sm-6">
			 		<a href="" title="">
			 			<img class="img-responsive" src="images/slide/4.jpg" title="" alt="" longdesc="" />
			 		</a>
			 		<h4><a href="#" title="">Php include işlemi</a></h4>
			 		<p>Php include işlemini nasıl yapıldığı...</p>
			 	</div>
		 	</div>
		 	<!-- Content ends -->
		 </div>	
	 </div>
	 <div class="container">
	 	<div class="row marginTop10">
	 		<!-- Tabs -->
	 		<div class="col-lg-3 col-md-3 col-sm-4">
		 		<div class="list-group nav-tabs">
		 			<a class="list-group-item" href="#home" data-toggle="tab">Home</a>
		 			<a class="list-group-item" href="#profil" data-toggle="tab">Profil</a>
		 			<a class="list-group-item" href="#mesajlar" data-toggle="tab">Mesajlar</a>
		 			<a class="list-group-item" href="#ayarlar" data-toggle="tab">Ayarlar</a>
		 		</div>
	 		</div>
	 		<!-- Tab panes -->
	 		<div class="col-lg-9 col-md-9 col-sm-8">
		 		<div class="tab-content">
		 			<div class="tab-pane fade in active" id="home">1</div> <!-- "in" for first seen at home --> 
		 			<div class="tab-pane fade" id="profil">2</div>
		 			<div class="tab-pane fade" id="mesajlar">3</div>
		 			<div class="tab-pane fade" id="ayarlar">4</div>
		 		</div>
	 		</div>
	 	</div>
	 </div>
</body>
</html>