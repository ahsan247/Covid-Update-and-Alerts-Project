<?php
include("DBconnect.php");
if(isset($_POST['submit'])&& isset($_POST['death'])&& isset($_POST['recovery'])&& isset($_POST['active']))
{
	
	$date=date("Y-m-d");
	$death=$_POST['death'];
	$recovery=$_POST['recovery'];
	$active=$_POST['active'];
	
	$query="insert information (info_id,death, recovery, active,date) values (Null,'$death', '$recovery', '$active','$date')";
    if(mysqli_query($conn,$query)){
		echo " Data uploaded";
		header("Location:info.php");
		
	}
	else{
		echo" Data not uploaded";
	echo mysqli_error($conn);
	}


}
?>