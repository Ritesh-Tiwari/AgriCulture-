<?php
    session_start();

    require '../db.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $user = dataFilter($_POST['uname']);
        $currPass = $_POST['currPass'];
        $newPass = $_POST['newPass'];
        $conNewPass = $_POST['conNewPass'];
        $pass =	dataFilter(password_hash($conNewPass, PASSWORD_BCRYPT));
	
        $newhash = dataFilter( md5( rand(0,1000) ) );
    }
    $a=$_SESSION['Category'];
    $id = $_SESSION['Email'];   
    if($a==1){
        $currHash = $_SESSION['Hash'];
        $sql = "UPDATE farmer SET fpassword='$pass', fhash='$newhash' WHERE fhash='$currHash';";
     // $sql = "UPDATE farmer SET fname='$name',fusername='$user',fmobile='$mobile',femail='$email',fYear='$year',fEdu='$edu' WHERE femail='$id';";
    }else{
        $currHash = $_SESSION['Hash'];
        $sql = "UPDATE buyer SET bpassword='$pass', bhash='$newhash' WHERE bhash='$currHash';";

    }
    $result = mysqli_query($conn, $sql);
    if($result)
    {  
         $_SESSION['message'] = "Profile Updated successfully !!!";
            header("Location: ../profileView.php");
    }
    else
    {
        // mysqli_error();
        $_SESSION['message'] = "There was an error in updating your profile! Please Try again!";
        header("Location: ../Login/error.php");
    }

// if($num_rows == 0)
//     {
//         // $sql = "SELECT * FROM farmer WHERE fusername='$user'";
//         // $result = mysqli_query($conn, $sql);
//         // $num_rows = mysqli_num_rows($result);
//         // if($num_rows == 0)
//         // {
//         //     $_SESSION['message'] = "Invalid User Credentials!";
//         //     header("location: error.php");
//         // }  
//         // else{
//             $User = $result->fetch_assoc();

//             if(password_verify($_POST['currPass'], $User['Password']))
//             {
//                 if($newPass == $conNewPass)
//                 {
//                     $conNewPass = dataFilter(password_hash($_POST['conNewPass'], PASSWORD_BCRYPT));
//                     $currHash = $_SESSION['Hash'];
//                     $sql = "UPDATE farmer SET fpassword='$conNewPass', fhash='$newHash' WHERE fhash='$currHash';";
    
//                     $result = mysqli_query($conn, $sql);
    
//                     if($result)
//                     {
//                         $_SESSION['message'] = "Password changed Successfully!";
//                         header("location: ../Login/success.php");
//                     }
//                     else
//                     {
//                         $_SESSION['message'] = "Error occurred while changing password<br>Please try again!";
//                         header("location: ../Login/error.php");
//                     }
//                 }
//             }
//             else
//             {
//                 $_SESSION['message'] = "Invalid current User Credentials!";
//                 header("location: ../Login/error.php");
//             }
    
//         // }  
    
//         // $_SESSION['message'] = "Invalid User Credentials!";
//         // header("location: error.php");
//         mysqli_error();
//     }
//     else
//     {
//         $User = $result->fetch_assoc();

//         if(password_verify($_POST['currPass'], $User['bpassword']))
//         {
//             if($newPass == $conNewPass)
//             {
//                 $conNewPass = dataFilter(password_hash($_POST['conNewPass'], PASSWORD_BCRYPT));
//                 $currHash = $_SESSION['Hash'];
//                 $sql = "UPDATE buyer SET bpassword='$conNewPass', bhash='$newHash' WHERE bhash='$currHash';";

//                 $result = mysqli_query($conn, $sql);

//                 if($result)
//                 {
//                     $_SESSION['message'] = "Password changed Successfully!";
//                     header("location: ../Login/success.php");
//                 }
//                 else
//                 {
//                     $_SESSION['message'] = "Error occurred while changing password<br>Please try again!";
//                     header("location: ../Login/error.php");
//                 }
//             }
//         }
//         else
//         {
//             // $_SESSION['message'] = "Invalid current User Credentials!";
//             // header("location: ../Login/error.php");
//         }
//     }

    function dataFilter($data)
    {
    	$data = trim($data);
     	$data = stripslashes($data);
    	$data = htmlspecialchars($data);
      	return $data;
    }

// ?>
