<?php
require_once('DBconnect.php');


if (!empty($_POST['tel']) && !empty($_POST['Name']) && !empty($_POST['blood-group']) && !empty($_POST['user-address']) && !empty($_POST['password'])) {
    //echo $_POST['udonate'];
    $phone = $_POST['tel'];
    $Name = $_POST['Name'];
    $blood = $_POST['blood-group'];
    $address = $_POST['user-address'];
    $support = $_POST['support'];
    if($support=="yes"){
        $support = $_POST['tel'];
    }
    $manage = 'Null';
    $info='Null';
    $rec='Null';
    $pass = $_POST['password'];
    $admin=$_POST['admin_id'];

    if (empty($_POST['admin_id'])) {
        $admin='Null';
    }
    $sql = "insert into users values('$phone','$Name','$blood','$address','$support',$admin,'$pass')";

    $result = mysqli_query($conn, $sql);

    if ($result) {

        //echo nl2br("Congratulations! \r\n INSERTION SUCCESSFUL");
        header("Location: userlogin.php");
    } else {
        //echo $phone;
        //echo $Name;
        //echo $support;
        //echo "FAILED TO INSERT";

        header("Location: signup.php");
    }
}
