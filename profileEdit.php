<?php
    session_start();
?>

<!DOCTYPE HTML>

<html lang="en">

<head>
    <title>Profile:
        <?php echo $_SESSION['Username']; ?>
    </title>
    <meta charset="utf-8" />
    <link rel="icon" href="images/icon.icon">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .form-control {
        margin-bottom: 10px;
        width: 300px;
    }
    </style>
</head>

<body class="bg-dark text-light">

    <?php
            require 'menu.php';
        ?>

    <section>
        <div class="container">

            <div class="row text-center">

                <span class="image left"><img
                        src="<?php echo 'images/profileImages/'.$_SESSION['picName'].'?'.mt_rand(); ?>"
                        class="img-circle img-responsive" height="130px"></span>
                <br>
                <h2>
                    <?php echo $_SESSION['Name'];?>
                </h2>
                <h4>
                    <?php echo $_SESSION['Username'];?>
                </h4>
                <br>

                <div class="container">

                    <div class="row">
                        <form method="post" action="Profile/updatePic.php" enctype="multipart/form-data">
                            <input type="file" name="profilePic" id="profilePic">
                            <br>
                            <br>
                            <input type="submit" class="btn btn-success px-5" name="upload" value="Upload" />
                            <input type="submit" class="btn btn-success px-5" name="remove" value="Remove" />

                        </form>
                        <hr class="my-3">
                    </div>
                </div>

                <form method="post" action="Profile/updateProfile.php">

                    <div class="container">

                        <div class="row">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

                            </div>

                            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4">
                                <input type="text" name="name" class="form-control" id="name"
                                    value="<?php echo $_SESSION['Name'];?>" placeholder="Full Name" required />

                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="text" name="mobile" id="mobile" class="form-control"
                                    value="<?php echo $_SESSION['Mobile'];?>" placeholder="Mobile No" required />

                            </div>

                        </div>

                        <div class="row">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">

                            </div>

                            <div class="col-xs-4 col-sm-6 col-md-4 col-lg-4">
                                <input type="text" name="uname" id="uname" class="form-control"
                                    value="<?php echo $_SESSION['Username'];?>" placeholder="Username" required />

                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <input type="email" name="email" id="email" class="form-control"
                                    value="<?php echo $_SESSION['Email'];?>" placeholder="Email" required />

                            </div>

                        </div>
                        <div class="row text-center">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                                <strong>Education :</strong>
                            </div>

                            <div class="col-xs-1  col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="diploma" name="edu" value="Diploma" checked>
                                <label for="1">Diploma</label>
                            </div>

                            <div class="col-xs-1  col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="btech" name="edu" value="B.TECH">
                                <label for="btech">B.TECH</label>

                            </div>

                            <div class="col-xs-1  col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="mtech" name="edu" value="M.TECH">
                                <label for="mtech">M.TECH</label>

                            </div>

                        </div>

                        <div class="row ">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <strong>Choose Year :</strong>
                            </div>

                            <div class="col-xs-1  col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="1" name="year" value="1" checked>
                                <label for="1">1<sup>st</sup> Year</label>

                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="2" name="year" value="2">
                                <label for="2">2<sup>nd</sup> Year</label>

                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="3" name="year" value="3">
                                <label for="3">3<sup>rd</sup> Year</label>

                            </div>

                            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                                <input type="radio" id="4" name="year" value="4">
                                <label for="4">4<sup>th</sup> Year</label>

                            </div>

                        </div>

                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <input type="submit" class="btn btn-success my-3" style="width: 100%;"
                                    value="Update Profile" />
                            </div>

                        </div>

                    </div>

            </div>
            </form>
        </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

</body>

</html>