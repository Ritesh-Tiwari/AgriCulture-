<?php
session_start();

?><!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/icon.icon">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title>AgroCulture</title>
</head>

<body>
	<?php
		require 'menu.php';
	?>


	<div class="container-fluid px-0">
		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
					aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://source.unsplash.com/1600x600/?agriculture" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h2>AgriCulture</h2>
						<p>Your Product Our Market</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="https://source.unsplash.com/1600x600/?agriculture" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h2>AgriCulture</h2>
						<p>Your Product Our Market</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="https://source.unsplash.com/1600x600/?agriculture" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h2>AgriCulture</h2>
						<p>Your Product Our Market</p>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>


	<div class="container-fluid px-0 bg-success py-5">
		<div class="text-center text-light  py-5">
			<h1>AgroCulture</h1><br>
			<h4>Explore the new way of trading...</h4>
		</div>

		<div class="container text-light px-5">

			<div class="row text-center">

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<i class='far fa-clock' style='font-size:150px'></i>
					<p>Digital Market</p>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<i class="far fa-comments" style='font-size:150px'></i>
					<p>Agro-Blog</p>
				</div>

				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					<i class="fas fa-user-circle" style='font-size:150px'></i>
					<p>Register with us</p>
				</div>

			</div>

		</div>

	</div>

	<div class="container-fluid px-0 bg-secondary" id="about">
		<div class="text-center py-5 text-light">
			<h1>About Us</h1>
		</div>

		<div class="container  text-light py-5">
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h3 style="font-family: 'Times New Roman', cursive;">AgroCulture &copy; </h3>
					<!--	<div class="logo">
						<a href="index.php"><img src="images/logo.png" width="200px"></a>
					</div>-->
					<br />
					<p style="font-size:20px;color:white">Your product Our market !!!</p>
					<br />
				</div>
			
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<p >
					<span style="font-size:20px"><b>About AgroCulture</b></span>
					AgroCulture is e-commerce trading platform for grains & grocerries...
				</p>
				<div class="footer-icons ">
					<a href="#"><i style="font-size:50px; margin-left: 10px;margin-top:5px; color:white;  "
							class="fab fa-facebook-square"></i></a>
					<a href="#"><i style="font-size:50px; margin-left: 10px;margin-top:5px;color:white;"
							class="fab fa-instagram"></i></a>
					<a href="#"><i style="font-size:50px ;margin-left: 10px;margin-top:5px;color:white;"
							class="fab fa-youtube"></i></a>
				</div>
			</div>

		</div>

	</div>

	</div>

	<div class="container-fluid px-0 " style="background-color:rgb(163, 191, 219);"  id="contact">
		<div class="text-center py-5 text-dark">
			<h1>Let's Get In Touch!</h1>
			<p style="font-size:20px"><i class="fas fa-map-marker-alt"> </i> Agro Culture Fam<span> Belur</span></p>
		</div>

		<div class="container">

			<div class="row text-center">


				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<i class="fas fa-phone-alt" style="font-size: 100px;"></i><br>
					<p style="font-size:20px">+91 7890352844</p>

				</div>


				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<p style="font-size:20px">
						<i class="fas fa-mail-bulk" style="font-size: 100px"></i> <br>
						<a class="nav-link text-dark" href="mailto:DesiSwag@gmail.com">
							demo@demo.com</a>
					</p>

				</div>


			</div>
		</div>


		<footer class="text-center bg-dark py-3 text-light">
			<p>Copyright &copy 2021 - DesiSwag</p>
		</footer>

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
			crossorigin="anonymous"></script>
		<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
		<!-- Option 2: Separate Popper and Bootstrap JS -->

		<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

</body>

</html>