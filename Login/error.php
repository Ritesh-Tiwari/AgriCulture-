<?php session_start();?>
<!DOCTYPE html>
    <html >
     <head>
        <title>AgroCulture</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta charset="utf-8" />
        <link rel="icon" href="images/icon.icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    #banner{
		background: url("https://source.unsplash.com/1600x900/?agriculture");
		height: 100vh;
	}
	h2{
		padding-top: 20%;
	}
    
</style>
    </head>

    <body>
        <?php
            require '../menu.php';
        ?>

        <section id="banner" class="wrapper">
            <div class="container text-center text-light">
                   <h2>ERROR</h2>
                <p>
                    <?php
                        $page = $_SERVER['HTTP_REFERER'];
                        if(isset($_SESSION['message']) AND !empty($_SESSION['message']))
                        {
                            echo $_SESSION['message'];
                        }
                        else
                        {
                            header("Location: ../index.php");
                        }
                    ?>
                </p><br />
                <a href ="<?= $page ?>" class="btn btn-danger">Retry</a>


    	<?php $_SESSION['message'] = ""; ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>


		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

    </body>
</html>
