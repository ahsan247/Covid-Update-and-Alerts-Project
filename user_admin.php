<?php
session_start();
require_once("DBconnect.php");
$phone = $_SESSION['phone'];
$sql = "select u.manage from (users u inner join admin a on u.manage=a.id and u.phone='$phone')";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) != 0) {

    //echo $row[0];
    $_SESSION['phone'] = $row[0];
    header("Location: adminprofile.php");
} else {
    //echo "Give information first";
    header("Location: adminlogin.php");
}
