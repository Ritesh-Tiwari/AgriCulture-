<?php
	session_start();

	require 'db.php';

	if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] == 0)
	{
		$_SESSION['message'] = "You need to first login to access this page !!!";
		header("Location: Login/error.php");
	}

	if ($_SERVER["REQUEST_METHOD"] == "POST" AND isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
	{
		if(isset($_POST['comment']) AND $_POST['comment'] != "")
		{
			$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
			$result = mysqli_query($conn, $sql);

			while($row = $result->fetch_array())
			{
				$check = "submit".$row['blogId'];
				if(isset($_POST[$check]))
				{
					$blogId = $row['blogId'];
					break;
	 			}
			}

			$comment = dataFilter($_POST['comment']);
			if(isset($_SESSION['logged_in']) AND $_SESSION['logged_in'] == 1)
			{
				$commentUser = $_SESSION['Username'];
				$pic = $_SESSION['picName'];
			}
			else {
				$commentUser = "Anonymous";
				$pic = "profile0.png";
			}
			if(isset($blogId))
			{
				$sql = "INSERT INTO blogfeedback (blogId, comment, commentUser, commentPic)
						VALUES ('$blogId' ,'$comment', '$commentUser', '$pic');";
				$result = mysqli_query($conn, $sql);
			}
			$blogId=null;
			$comment=null;
			$commentUser=null;
			$pic=null;
		}

		else
		{
			$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
			$result = mysqli_query($conn, $sql);

			while($row = $result->fetch_array())
			{
				$check = "like".$row['blogId'];
				if(isset($_POST[$check]))
				{
					$blogId = $row['blogId'];
					break;
				}
			}
			$likeCheck = "isLiked".$blogId;
			if(!isset($_SESSION[$likeCheck]) OR $_SESSION[$likeCheck] == 0)
			{
				$id = $_SESSION['id'];
				$sql = "SELECT * FROM likedata WHERE blogId = '$blogId' AND blogUserId = '$id'";
				$result = mysqli_query($conn, $sql);
				$num_rows = mysqli_num_rows($result);
				if($num_rows == 0)
				{
					$sql = "INSERT INTO likedata (blogId, blogUserId)
							VALUES('$blogId', '$id')";
					$result = mysqli_query($conn, $sql);
					$sql = "UPDATE blogdata SET likes = likes + 1 WHERE blogId = '$blogId'";
					$result = mysqli_query($conn, $sql);
					$_SESSION[$likeCheck] = 1;
				}
			}
		}
	}

	function dataFilter($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$sql = "SELECT * FROM blogdata ORDER BY blogId DESC";
	$result = mysqli_query($conn, $sql);

	function formatDate($date)
	{
		return date('g:i a', strtotime($date));
	}

?>

<!DOCTYPE HTML>

<html>

<head>
    <title>AgroCulture : Blogs</title>
    <meta charset="utf-8" />
    <link rel="icon" href="images/icon.icon">

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>
    .box {
        border-radius: 4px;
        border: solid 1px rgba(144, 144, 144, 0.25);
        margin-bottom: 2em;
        padding: 1.5em;
    }

    blockquote {
        border-left: solid 4px rgba(144, 144, 144, 0.25);
        font-style: italic;
        margin: 0 0 2em 0;
        padding: 0.5em 0 0.5em 2em;
    }

    blockquote,
    q {
        quotes: none;
    }

    p {
        margin: 0 0 2em 0;
    }
    </style>
</head>

<body class="bg-dark">
    <?php require 'menu.php'; ?>

    <section id="main" class="text-light">
        <div class="pt-5">
            <div class="container pt-5" style="width: 70%">
                <div class="row">


                    <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">

                    </div>


                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                        <a href="blogWrite.php" class="btn btn-secondary py-2 px-5"><span
                                class="fas fa-pencil-alt"></span> Write a Blog</a>
                    </div>
                </div>
                <br />
                <?php
						while($row = $result->fetch_array()) :
							$id = $row['blogId'];
							$sql = "SELECT * FROM blogfeedback WHERE blogId = '$id'";
							$result1 = mysqli_query($conn, $sql);
							$numComment = mysqli_num_rows($result1);
					?>
                <div class="box py-5">
                    <h2 class="py-3"><?= $row['blogTitle']; ?></h2>
                    <blockquote>
                        <?= $row['blogContent']; ?>
                        <p>--- <?= $row['blogUser']; ?></p>
                        <p><?= $row['blogTime']; ?></p>
                    </blockquote>

                    <form method="post" action="blogView.php">
                        <div class="row">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <button class="btn btn-success" name="<?php echo 'like'.$id; ?>">
                                    <span class="fas fa-thumbs-up"></span> Like</button>
                                <span><?= $row['likes']?></span>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <span class="fas fa-pencil-alt"></span> Comments : <?= $numComment ?></button>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <br>
                                <textarea name="comment" class="form-control" id="comment" rows="1" value=""
                                    placeholder="Write a Comment!"></textarea>
                            </div>
                            <div class="12u$">
                                <center>
                                    <br>
                                    <input type="submit" name="<?php echo 'submit'.$id; ?>" class="btn btn-success px-3"
                                        value="Submit" />
                                </center>
                            </div>
                        </div>
                    </form>

                    <?php
							if($result1) :
								while($row1 = $result1->fetch_array()) :
						?>
                    <div>
                        <img width="50px" height="50px" style="border-radius: 100%;"
                            src="<?php echo 'images/profileImages/'.$row1['commentPic']?>"
                            alt="Avatar"><span><em><?= $row1['commentUser']; ?></em></span>
                        <br>
                        <?= $row1['comment']; ?>
                        <span class="pr-5"><?= formatDate($row1['commentTime']); ?></span>
                    </div>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>

                <?php endwhile; ?>

            </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="validation.js"></script>

</body>

</html>