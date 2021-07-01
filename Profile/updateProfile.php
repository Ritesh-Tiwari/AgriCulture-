<?php
    session_start();
    require '../db.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = dataFilter($_POST['name']);
        $mobile = dataFilter($_POST['mobile']);
        $user = dataFilter($_POST['uname']);
        $email = dataFilter($_POST['email']);
        // $section = dataFilter($_POST['section']);
        // $post = dataFilter($_POST['post']);
        $year = dataFilter($_POST['year']);
        $edu = dataFilter($_POST['edu']);

        $_SESSION['Email'] = $email;
        $_SESSION['Name'] = $name;
        $_SESSION['Username'] = $user;
        $_SESSION['MobileNo'] = $mobile;
        // $_SESSION['Section'] = $section;
        // $_SESSION['Post'] = $post;
        $_SESSION['Edu'] = $edu;
        $_SESSION['Year'] = $year;
    }

    $a=$_SESSION['Category'];
    $id = $_SESSION['Email'];   
    if($a==1){
        $sql="UPDATE `farmer` SET `fname`='$name',`fusername`='$user',`fmobile`='$mobile',`femail`='$email',`fYear`='$year',`fEdu`='$edu' WHERE `femail`='$id'";  
     // $sql = "UPDATE farmer SET fname='$name',fusername='$user',fmobile='$mobile',femail='$email',fYear='$year',fEdu='$edu' WHERE femail='$id';";
    }else{
        $sql="UPDATE `buyer` SET `bname`='$name',`busername`='$user',`bmobile`='$mobile',`bemail`='$email',`bYear`='$year',`bEdu`='$edu' WHERE bemail='$id';";
        // $sql = "UPDATE buyer SET bname='$name',busername='$user',bmobile='$mobile',bemail='$email',bYear='$year',bEdu='$edu' WHERE bemail='$id';";
      
    }
    $result = mysqli_query($conn, $sql);
    if($result)
    {  
        // echo "update";
         $_SESSION['message'] = "Profile Updated successfully !!!";
            header("Location: ../profileView.php");
    }
    else
    {   
        $_SESSION['message'] = "There was an error in updating your profile! Please Try again!";
        header("Location: ../Login/error.php");
    }

function dataFilter($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
