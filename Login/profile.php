<?php
    session_start();

    if ( $_SESSION['logged_in'] != 1 )
    {
      $_SESSION['message'] = "You must log in before viewing your profile page!";
      header("location: error.php");
    }
    else
    {

       $email =  $_SESSION['Email'];
       $name =  $_SESSION['Name'];
       $user =  $_SESSION['Username'];
       $mobile = $_SESSION['Mobile'];
       $active = $_SESSION['Active'];
    }
?>

<!doctype html>
<html lang="en">
<style>
    .banner {
        background: url("https://source.unsplash.com/1600x900/?agriculture");
        height: 100vh;
        color: white;
    }

    .major {
        padding-top: 15%;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="icon" href="images/icon.icon">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>AgroCulture</title>
</head>

<body>
    <?php
            require 'menu.php';
        ?>
    <section class=banner>

        <div class="container text-center">
            <header class="major">
                <h2>Welcome</h2>
            </header>
            <p>
                <?php
                    if ( isset($_SESSION['message']) )
                    {
                        echo $_SESSION['message'];
                        unset( $_SESSION['message'] );
                    }
                ?>
            </p>

            <?php
                    if ( !$active )
                    {
                        echo
                        "<div>
                            Account is not verified! Please confirm your email by clicking
                            on the email link!
                        </div>";
                    }
                ?>
            <h2>
                <?php echo $name; ?>
            </h2>
            <p>
                <?= $email ?>
            </p>


            <div class="container">
                <?php if($_SESSION['Category'] == 1): ?>
                <div class="row pt-2">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href=../profileView.php class="btn btn-success" style="width: 200px; margin-top: 20px;">My
                            Profile</a>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="logout.php" class="btn btn-success" style="width: 200px;margin-top: 20px;">Log Out</a>
                    </div>

                </div>
                <?php else: ?>
                <div class="row pt-2">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href=../market.php class="btn btn-success" style="width: 200px; margin-top: 20px;">Digital
                            Market</a>

                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="logout.php" class="btn btn-success" style="width: 200px; margin-top: 20px;">Log out</a>

                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
        </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
        </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

</body>

</html>