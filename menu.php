<?php
	if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		$loginProfile = "My Profile: ". $_SESSION['Username'];
		$logo = "fas fa-user-alt";
		if($_SESSION['Category']!= 1)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "login_form.php";
		$logo = "fas fa-user-alt";
	}
?>

<!DOCTYPE html>


<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">AgroCulture</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><span
                                class="fas fa-home"></span> Home</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myCart.php"><span class="fas fa-shopping-cart">
                                MyCart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="market.php"><span class="fas fa-seedling">
                                Digital-Market</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogView.php"><span class="far fa-comment"> BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $link; ?>" class="nav-link"><span class="<?php echo $logo; ?>">

                            </span><?php echo" ". $loginProfile; ?></a>

                    </li>

                </ul>

            </div>
        </div>
    </nav>
	
	<div class="row">
		
    <div id="alert_box" style="position: fixed;" class="alert text-center alert-warning  fade show my-0" role="alert">
        <strong><span id="msg"></span></strong>
    </div>

</div>
	

    <script src="validation.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  

</header>

<style>
@import url('https://fonts.googleapis.com/css2?family=EB+Garamond:wght@800&display=swap');

* {
    font-family: 'EB Garamond', serif;
}
</style>

</body>

</html>