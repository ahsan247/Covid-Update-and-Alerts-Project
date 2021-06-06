<?php
session_start();

require_once('DBconnect.php');
session_destroy();
header("Location: userlogin.php");
?>