<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icon.icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login !</title>
<style>
    .form{
        margin: 5% 10% 0 10%;
        padding: 10% 10% 10% 10%;
        border-bottom-style: outset;
        border-radius: 15%;
        border-color: blanchedalmond;
    
    }   
</style>
  </head>
  <body class="bg-dark text-light">
      <?php
require "menu.php"
      ?>
   
<section>
<div class="container ">

    <div class="row">
        
        
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            
        </div>
        
      
      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="form">
                    <form action="Login/login.php" method="POST" class="form-horizontal" role="form">
                        <div class="form-group text-center">
                            <legend>Welcome</legend>
                        </div><br><br><br>
                
                        
                        <input type="text" name="uname" id="uname" placeholder="Username" class="form-control" value="" required>
                        <br>
                        
                        <input type="text" name="pass" id="pass" placeholder="Password" class="form-control" value="" required>
                        <br>
                        
                        <div class="row">
                            
                            <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4">
                                <p>Category :</p>
                            </div>
                            
                            <div class="col-xs-4 col-sm-4 col-md-12 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" id="farmer" value="1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Farmer
                                    </label>
                                  </div>
                            </div>
                            
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="category" value="0" id="buyer" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Buyer 
                                    </label>
                                  </div>
                            </div>
                            
                        </div>
                        
                        <button type="submit" class="form-control btn-success">LOGIN</button>
                        
                </form>
                <div class="row">
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a href="#" class="nav-link text-light">Forgot password? </a>
              
                    </div>
                    
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <a name="signup" href="sing_up_form.php" class="nav-link text-success ">Sign Up </a>
              
                    </div>
                    
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            </div>
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