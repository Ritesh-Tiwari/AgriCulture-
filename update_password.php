<?php
    session_start();

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		header("Location: Login/error.php");
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon.icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Change Password !!</title>
    <style>
        .form-control{
            margin-top: 2.0rem;
        }
    </style>
  </head>
  <body class="bg-dark text-light">
    <?php
    require "menu.php";
    ?>
    <section>
        
        <div class="container text-center pt-5">
            
            <div class="row">
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    
                </div>
                
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    
            <form action="Profile/changePass.php" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Update Password</legend>
                    
                    <div class="container">
                        
                        <div class="row pt-3">
                            
                            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                                
                                <input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $_SESSION['Username'];?>" class="form-control" required>
                                
                            </div>
                            
                            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                                
                                <input type="text" name="currPass" id="currPass" placeholder="Current Password" class="form-control" value="" required>
                                
                            </div>
                            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                                
                                <input type="text" name="newPass" id="newPass" placeholder="New Password" class="form-control" value="" required>
                                
                            </div>
                            
                            <div class="col-xs-12  col-sm-12 col-md-12 col-lg-12">
                                
                                <input type="text" name="conNewPass" id="conNewPass" placeholder="Current Password" class="form-control" value="" required>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn-primary form-control btn-lg">Submit</button>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
        
                
        
                <div class="form-group pt-4">
                  
                </div>
        </form>
                </div>
                
            </div>
            
        </div>
        
    </section>
    
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>