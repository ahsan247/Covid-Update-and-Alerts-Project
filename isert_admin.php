<?php
require_once('DBconnect.php');


if (!empty($_POST['id']) && !empty($_POST['password'])) {
    //echo $_POST['udonate'];
    $id= $_POST['id'];
    $pass = $_POST['password'];
    
    $sql = "insert into admin values('$id','$pass')";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        //echo nl2br("Congratulations! \r\n INSERTION SUCCESSFUL");
        header("Location: show_admin.php");
    } else {
        //echo "FAILED TO INSERT";

        header("Location: add_admin.php");
    }
}
