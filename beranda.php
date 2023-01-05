<!-- 
soal : 
1. buat pada menu ketika diklik menu LOGOUT aplikasi akan logout dan kembali ke menu login
2. ganti Nama Pengguna sesuai dengan nama pengguna yang login berdasarkan database
3. lengkapi "SLIDE CAROUSEL" dengan gambar
-->
<?php 
include "login.php";
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/css/carousel.css">
	<title>PPDB Online</title>
</head>
<body>
	<div class="container-fluid">
		<header>
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
				<div class="container-fluid">
			    	<a class="navbar-brand" href="#"><img src="images/logo_disdik.png" alt="" width="40"> &nbsp;SDN 054916</a>
				    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
				      <span class="navbar-toggler-icon"></span>
				    </button>
			    <div class="collapse navbar-collapse" id="navbarScroll">
			      	<ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
				        <li class="nav-item">
				          <a class="nav-link active" aria-current="page" href="#">Beranda</a>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">Jadwal</a>
				        </li>
				        <li class="nav-item dropdown">
				          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				            Peraturan
				          </a>
				          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
				            <li><a class="dropdown-item" href="#">Pendaftaran</a></li>
				            <li><a class="dropdown-item" href="#">Registrasi Ulang</a></li>
				            <li><hr class="dropdown-divider"></li>
				            <li><a class="dropdown-item" href="#">Akademik</a></li>
				          </ul>
				        </li>
				        <li class="nav-item">
				          <a class="nav-link" href="#">Daftar</a>
				        </li>
			      	</ul>
			      	<div class="d-flex">
						<a href="#" class="btn btn-dark">Hai, <?php echo $_SESSION['username']; ?>  </a> <br>
			      		<a href="logout.php" class="btn btn-light"><strong><i class="fa fa-sign-out-alt"></i> Log Out</strong></a>
			      	</div>
			    </div>
			  	</div>
			</nav>
		</header>
		<main>
			<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    			<div class="carousel-indicators">
			      	<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			      	<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
			      	<button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
		    	</div>
			    <div class="carousel-inner">
			      <div class="carousel-item active">
			      	<img src="images/sekolah1.png">
			        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

			        
			      </div>
			      <div class="carousel-item">
			      	<img src="images/sekolah2.png">
			        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

			        <div class="container">
			          <div class="carousel-caption">
			            <h1>Another example headline.</h1>
			            <p>Some representative placeholder content for the second slide of the carousel.</p>
			            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
			          </div>
			        </div>
			      </div>
			      <div class="carousel-item">
			      	<img src="images/sekolah3.jpg">
			        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

			        <div class="container">
			          <div class="carousel-caption text-end">
			            <h1>One more for good measure.</h1>
			            <p>Some representative placeholder content for the third slide of this carousel.</p>
			            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
			          </div>
			        </div>
			      </div>
			    </div>
			    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
			      	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      	<span class="visually-hidden">Previous</span>
			    </button>
			    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
			      	<span class="carousel-control-next-icon" aria-hidden="true"></span>
			      	<span class="visually-hidden">Next</span>
			    </button>
		  	</div>

		  	<div class="container marketing">
			    <div class="row">
			      <div class="col-lg-4">
			        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#198754"/></svg>

			        <h2>Heading</h2>
			        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
			        <p><a class="btn btn-success" href="#">View details &raquo;</a></p>
			      </div><!-- /.col-lg-4 -->
			      <div class="col-lg-4">
			        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#0d6efd"/></svg>

			        <h2>Heading</h2>
			        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
			        <p><a class="btn btn-primary " href="#">View details &raquo;</a></p>
			      </div><!-- /.col-lg-4 -->
			      <div class="col-lg-4">
			        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#dc3545"/></svg>

			        <h2>Heading</h2>
			        <p>And lastly, the third column of representative placeholder content to show things that can tell people something.</p>
			        <p><a class="btn btn-danger" href="#">View details &raquo;</a></p>
			      </div><!-- /.col-lg-4 -->
			   	</div>
			   	<br>
			   	<br>
			   	<br>
			</div>
		</main>
	</div>
	<div class="container-fluid pb-0 mb-0 justify-content-center text-dark bg-light ">
	<hr>
     <footer>
         <div class="row my-5 justify-content-center py-5">
             <div class="col-11">
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-12 my-auto mx-auto a">
                     	 <img src="images/logo_disdik.png" alt="" width="100">
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text "><b>MENU</b></h6>
                         <ul class="list-unstyled">
                             <li>Beranda</li>
                             <li>Peraturan</li>
                             <li>Tentang</li>
                             <li>Sosial Media</li>
                         </ul>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-12">
                         <h6 class="mb-3 mb-lg-4 bold-text"><b>ADDRESS</b></h6>
                         <p class="mb-1">Senang Street</p>
                         <p>Jakarta</p>
                     </div>
                 </div>
                 <div class="row ">
                     <div class="col-xl-8 col-md-4 col-sm-4 col-auto my-md-0 mt-5 order-sm-1 order-3 align-self-end">
                        <p>&copy; <?php echo date('Y'); ?> PPDB Online : <a href="#">SD NEGERI 054916</a></p>
						<a href="#" class="btn btn-secondary"><strong><i ></i> Back to top</strong></a>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
                         <h6 class="mb-3 mb-lg-4 bold-text"><b>Email</b></h6><small> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> SDN054916@gmail.com</small>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-2 align-self-end mt-3 ">
                         <h6 class="mb-3 mb-lg-4 bold-text"><b>Contact</b></h6><small><span><i class="fa fa-envelope" aria-hidden="true"></i></span> 021345678910</small>
                     </div>
                 </div>
             </div>
         </div>
    </footer>
 </div>
	
			
	<script src="assets/js/bootstrap.js"></script>

</body>
</html>				