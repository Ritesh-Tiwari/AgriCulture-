<?php
	session_start();
	require 'db.php';
	$pid = $_GET['pid'];
?>


<!DOCTYPE html>
<html>
<head>
	<title>AgroCulture: Product</title>
	<meta charset="UTF-8">
	<link rel="icon" href="images/icon.icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

		</head>
</head>
<body class="bg-dark">


				<?php
					require 'menu.php';

					$sql="SELECT * FROM fproduct WHERE pid = '$pid'";
					$result = mysqli_query($conn, $sql);
					$row = mysqli_fetch_assoc($result);

					$fid = $row['fid'];
					$sql = "SELECT * FROM farmer WHERE fid = '$fid'";
					$result = mysqli_query($conn, $sql);
					$frow = mysqli_fetch_assoc($result);

					$picDestination = "images/productImages/".$row['pimage'];

					?>
				<section id="main" class="text-light text-center">
						<div class="container">
							<div class="row">
								<div class="col-sm-4">
									<img class="image fit" src="<?php echo $picDestination.'';?>" alt=""  style="border-radius: 10%; margin-top: 5%;" width="100%"/>
								</div><!-- Image of farmer-->
								<div class="col-12 col-sm-6">
									<h1><?= $row['product']; ?></h1>
									<h3 >Product Owner : <?= $frow['fname']; ?></h3>
									<p style="font: 30px Times new roman;">Price : <?= $row['price'].' /-'; ?></p>
								</div>
							</div><br />
							<div class="row">
								<div class="col-12 col-sm-12" style="font: 25px Times new roman;">
									<?= $row['pinfo']; ?>
								</div>
							</div>
						</div>

						<br /><br />
						
						<div class="container">
						    <div class="row ">
								
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									
								</div>
											
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								
							</div>
							
								
								<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
									<a href="myCart.php?flag=1&pid=<?= $pid; ?>"  class="btn btn-primary form-control" >
										<span class="glyphicon glyphicon-shopping-cart"> AddToCart</a><br><br>	
                                   
								</div>
								
						
							<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
								<a href="buyNow.php?pid=<?= $pid; ?>" class="btn btn-primary form-control" >Buy Now</a>
                                   
								</div>
						
								
                        </div>

					<div class="container pt-3">
						<h1>Product Reviews</h1>
					<div class="row">
						<?php
							$sql = "SELECT * FROM review WHERE pid='$pid'";
							$result = mysqli_query($conn, $sql);
						?>
						<!-- <div class="col-0 col-sm-3"></div> -->
					<?php
								if($result) :
									while($row1 = $result->fetch_array()) :
							?>
									<div class="col-sm-4">
									<strong>Commnets	:</strong>   <em ><?= $row1['comment']; ?></em>
									</div>
									<div class="col-sm-4">
										<em ><?php echo "Rating : ".$row1['rating'].' out of 10';?></em>
									</div>
									<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
									
								<span ><?php echo "From: ".$row1['name']; ?></span>
								<br /><br /> 
								</div>
								</div>
								<hr>
								
								
							</div>
						<?php endwhile; endif;?>
					</div>
				</div>
			</div>
			<?php

			?>
			<div class="container ">
				<p style="font: 20px Times new roman; align-content: left;">Rate this product</p>
				<form method="POST" action="reviewInput.php?pid=<?= $pid; ?>">
					<div class="row">
						
						<div class="col-sm-6">
							<textarea class="form-control" cols="8" name="comment" id="comment" placeholder="Write a review"></textarea>
						</div>
						
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
							
						</div>
						
						<div class="col-sm-6">
						
							Rating: <input type="number" class="form-control" min="0" max="10" name="rating" id="rating" value="0"/>
						</div>
					</div>
					<div class="row">
						
						<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
							
						</div>
						
						<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
											<br />
							<input type="submit" class="btn btn-success form-control" />
						</div>
					</div>
				</form>
			</div>

	
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

	</body>
	</html>
