<?php

session_start();

require_once('DBconnect.php');
//session_destroy();

if(isset($_POST['id']) && isset($_POST['password'])){

    $u = $_POST['id'];
    $p = $_POST['password'];
    $sql = "select * from admin where id = '$u' and password = '$p'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) !=0)
    {
        $_SESSION['phone']=$u;
        //echo nl2br("Congratulations! \r\n LOGIN SUCCESSFUL");
        //echo $_SESSION['phone'];
        header("Location: adminprofile.php");

    }
    else
{
    echo "USERNAME OR PASSWORD IS WRONG";
    
    //header("Location: index.php");
}

}
else
{
    echo "not availbable";
}