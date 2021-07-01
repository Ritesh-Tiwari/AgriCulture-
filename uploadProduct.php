<?php
 	session_start();
	require 'db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
		$productType = $_POST['type'];
		$productName = dataFilter($_POST['pname']);
		$productInfo = $_POST['pinfo'];
		$productPrice = dataFilter($_POST['price']);
		$fid = $_SESSION['id'];

		$sql = "INSERT INTO fproduct (fid, product, pcat, pinfo, price)
			   VALUES ('$fid', '$productName', '$productType', '$productInfo', '$productPrice')";

		$result = mysqli_query($conn, $sql);
		if(!$result)
		{
			$_SESSION['message'] = "Unable to upload Product !!!";
			header("Location: Login/error.php");
		}
		else {
			$_SESSION['message'] = "successfull !!!";
		}

		$pic = $_FILES['productPic'];
		$picName = $pic['name'];
		$picTmpName = $pic['tmp_name'];
		$picSize = $pic['size'];
		$picError = $pic['error'];
		$picType = $pic['type'];
		$picExt = explode('.', $picName);
		$picActualExt = strtolower(end($picExt));
		$allowed = array('jpg','jpeg','png');

		if(in_array($picActualExt, $allowed))
		{
			if($picError === 0)
			{
				$_SESSION['productPicId'] = $_SESSION['id'];
				$picNameNew = $productName.$_SESSION['productPicId'].".".$picActualExt ;
				$_SESSION['productPicName'] = $picNameNew;
				$_SESSION['productPicExt'] = $picActualExt;
				$picDestination = "images/productImages/".$picNameNew;
				move_uploaded_file($picTmpName, $picDestination);
				$id = $_SESSION['id'];

				$sql = "UPDATE fproduct SET picStatus=1, pimage='$picNameNew' WHERE product='$productName';";

				$result = mysqli_query($conn, $sql);
				if($result)
				{
															
					$_SESSION['message'] = "Product Image Uploaded successfully !!!";
					header("Location: market.php");
				}
				else
				{	// //die("bad");
					$_SESSION['message'] = "There was an error in uploading your product Image! Please Try again!";
					header("Location: Login/error.php");
				}
			}
			else
			{
				$_SESSION['message'] = "There was an error in uploading your product image! Please Try again!";
				header("Location: Login/error.php");
			}
		}
		else
		{
			$_SESSION['message'] = "You cannot upload files with this extension!!!";
			header("Location: Login/error.php");
		}
	}

	function dataFilter($data)
	{
	    $data = trim($data);
	    $data = stripslashes($data);
	    $data = htmlspecialchars($data);
	    return $data;
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>AgroCulture</title>
		<link rel="icon" href="images/icon.icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	</head>
	<body>

		<?php require 'menu.php'; ?>

		<!-- One -->

			<section class="bg-dark text-light text-center" style="height: 100vh;">
				<div class="container">
					<form method="POST" action="uploadProduct.php" enctype="multipart/form-data">
						<h2>Enter the Product Information here..!!</h2>
						<br>
			
					<input type="file" name="productPic"/>
					<br /><br>
				<div class="row mx-5">
					  <div class="col-sm-6 pt-2">
						  <div class="select-wrapper  bg-dark" style="width: auto" >
							  <select name="type" id="type" class="form-control">
								  <option value="" >- Category -</option>
								  <option value="Fruit">Fruit</option>
								  <option value="Vegetable" >Vegetable</option>
								  <option value="Grains">Grains</option>
							  </select>
						</div>
					  </div>
					  <div class="col-sm-3 pt-2">

						<input type="text" name="pname" id="pname" value="" class="form-control" placeholder="Product Name" style="background-color:white;color: black;" />
					  </div>
				</div>
				<br>
				<div class="mx-5">
					<textarea  name="pinfo" rows="4" class="form-control" placeholder="Desc Product Information..."></textarea>
				</div>
			<br>
			<div class="row mx-5">
				<div class="col-sm-6 pt-2">
					  <input type="text" name="price" class="form-control" id="price" value="" placeholder="Price" />
				</div>
				<div class="col-sm-6 pt-2">
					
					<button class="btn btn-success form-control" >Submit</button>
				</div>
			</div>
			</form>
		</div>
	</section>

		<script>
			 CKEDITOR.replace( 'pinfo' );
		</script>
	</body>
	
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

</html>
