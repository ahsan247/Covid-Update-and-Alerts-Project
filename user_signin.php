<?php

session_start();

require_once('DBconnect.php');
//session_destroy();

if(isset($_POST['mobile']) && isset($_POST['password'])){

    $u = $_POST['mobile'];
    $p = $_POST['password'];
    $sql = "select * from users where phone = '$u' and user_password = '$p'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) !=0)
    {
        $_SESSION['phone']=$u;
        //echo nl2br("Congratulations! \r\n LOGIN SUCCESSFUL");
        //echo $_SESSION['phone'];
        header("Location: userprofile.php");

    }
    else
{
    //echo "USERNAME OR PASSWORD IS WRONG";
    
    header("Location: userlogin.php");
}

}
else
{
    header("Location: userlogin.php");
}
?>
