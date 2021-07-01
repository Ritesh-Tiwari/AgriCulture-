<?php
	session_start();
	require 'db.php';
    $pid = $_GET['pid'];
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $pincode = $_POST['pincode'];
        $addr = $_POST['addr'];
        $bid = $_SESSION['id'];

        $sql = "INSERT INTO transaction (bid, pid, name, city, mobile, email, pincode, addr)
                VALUES ('$bid', '$pid', '$name', '$city', '$mobile', '$email', '$pincode', '$addr')";
        $result = mysqli_query($conn, $sql);
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            header('Location: Login/success.php');
        }
        else {
            echo $result->mysqli_error();
            //$_SESSION['message'] = "Sorry!<br />Order was not placed";
            //header('Location: Login/error.php');
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <title>AgroCulture: Transaction</title>
    <meta lang="eng">
    <meta charset="UTF-8">
    <title>AgroCulture</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="icon" href="images/icon.icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<style>
    .form-control{
        margin-top: 2.0rem;
    }
</style>
</head>

<body class="bg-dark text-light">

    <?php
        require 'menu.php';
    ?>


    <section id="main" class="pt-5">
        <div class="container">
            <center>
                <h2>Transaction Details</h2>
            </center>
            <section id="two" class="text-center pt-3">
                <div class="container px-lg-5">
                   
                        <form method="post" action="buyNow.php?pid=<?= $pid; ?>"
                            style="border: 1px solid black; padding: 15px;">
                                <div class="row">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="name" id="name" value="" class="form-control" placeholder="Name" required />
                                    </div>
                                  
                                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="city" id="city" value="" placeholder="City" class="form-control" required />
                                    </div>
                                </div>
                                <div class="row ">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="mobile" id="mobile" value="" class="form-control"
                                            placeholder="Mobile Number" required />
                                    </div>

<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    
<input type="email" name="email" id="email" value="" placeholder="Email" class="form-control"
                                            required />
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="pincode" id="pincode" value="" class="form-control" placeholder="Pincode"
                                            required />
                                    </div>
                                    
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                        <input type="text" name="addr" id="addr" value="" placeholder="Address" class="form-control"
                                         required />
                                    </div>
                                </div>
                                <br />
                                <p>
                                    <input type="submit" value="Confirm Order" class="btn btn-success" />
                                </p>
                            </center>
                        </form>
                        </fieldset>


                    </center>
                </div>
            </section>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

</body>

</html>