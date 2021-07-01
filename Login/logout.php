<?php
	session_start();
		$_SESSION['logged_in'] = false;
	session_unset();
	session_destroy();
?>

<!DOCTYPE html>
<html>
	<head>
        <title>AgroCulture: LogOut</title>
        <meta charset="utf-8" />
		<link rel="icon" href="images/icon.icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

         </head>
<style>
	#banner{
		background: url("https://source.unsplash.com/1600x900/?agriculture");
		height: 100vh;
	}
	h2{
		padding-top: 20%;
	}
</style>
	<body>
	   <?php
            require 'menu.php';
        ?>
	    <section id="banner">
			<div class="container text-center text-light">
                    <h2>Thanks for visiting !!!</h2>
					
                    	<p>You have been succesfully logged out !!!</p>
                        <div class="6u 12u$(xsmall)">
							<br />
                            <a href="../index.php" class="btn btn-success">HOME</a>
                        </div>
                    
                </div>
            </div>
        </section>
	</body>
	
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
	crossorigin="anonymous"></script>
	

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

</html>
