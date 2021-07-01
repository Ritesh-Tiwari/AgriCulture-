<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>

<!DOCTYPE HTML>

<html lang="en">

<head>
    <title>Profile:
        <?php echo $_SESSION['Username']; ?>
    </title>
    <link rel="icon" href="images/icon.icon">

    <meta charset="UTF-8">
    <link rel="icon" href="images/icon.icon">

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    strong {
        color: rgb(209, 127, 127);
    }

    .btn {
        width: 80%;
        margin-bottom: 10px;
        border-style: none;
        border-bottom-style: outset;
        border-color: rgb(233, 218, 179);
        border-radius: 0% 0% 20% 20%;
        height: 50px;
        font-size: 20px;
        font-weight: bolder;
    }
    </style>
</head>

<body>
    <?php require 'menu.php'; ?>

    <section class="bg-dark text-light" style="height:100vh">
        <div class="container">
            <div class="text-center pt-5">
                <span><img src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>"
                        style="height: 100px; border-radius: 100%; width:100px"></span>
                <br>
                <h2>
                    <?php echo $_SESSION['Name'];?>
                </h2>
                <h4>
                    <?php echo $_SESSION['Username'];?>
                </h4>


            </div>
        </div>

        <div class="container">

            <div class="row" style="margin-left: 20%;">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>RATINGS :</strong>
                    <?php echo $_SESSION['Rating'];?>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Email ID :</strong>
                    <?php echo $_SESSION['Email'];?>
                </div>

            </div>
            <div class="row" style="margin-left: 20%;">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Mobile Number :</strong>
                    <?php echo $_SESSION['Mobile'];?>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <strong>Address :</strong>
                    <?php echo $_SESSION['Addr'];?><br><br>
                </div>

            </div>
            <div class="row my-3" style="margin-left: 15%;">

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="update_password.php" class="btn btn-outline-success">Change
                        Password</a>
                </div>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="profileEdit.php" class="btn btn-outline-light">Edit Profile</a>
                </div>

            </div>
            <div class="row" style="margin-left: 15%;">
                <?php
if ( $_SESSION['Category']==1){
?>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="uploadProduct.php" class="btn btn-outline-success">Upload
                        Product</a>
                </div>
                <?php 
}
else{
    ?>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="productmenu.php" class="btn btn-outline-success">Purchase
                        Product</a>
                </div><?php
}

?>

                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <a href="Login/logout.php" class="btn btn-outline-light">LOG OUT</a>
                </div>

            </div>

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>


</body>

</html>