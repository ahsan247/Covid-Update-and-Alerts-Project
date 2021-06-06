<?php
session_start();
require_once("DBconnect.php");
$id = $_SESSION['id'];
$sql= "select u.phone from (users u inner join admin a on u.manage=a.id and a.id='$id')";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_array($result);
if (mysqli_num_rows($result) != 0)
{

    //echo $row[0];
    $_SESSION['phone']=$row[0];
    header("Location: userprofile.php");
}
else
{
    //echo "Give information first";
    header("Location: signup.php");
}
