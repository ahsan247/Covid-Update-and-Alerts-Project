<?php
include("DBconnect.php");
if(isset($_POST['submit'])&& isset($_POST['location'])&& isset($_POST['no_recovery'])&& isset($_POST['no_covid'])&& isset($_POST['district']))
{
	
	$date=date("Y-m-d");
	$location=$_POST['location'];
	$no_recovery=$_POST['no_recovery'];
	$district=$_POST['district'];
	$no_covid=$_POST['no_covid'];
	
	
	$query="insert info_red_area (date,info_id,location,no_recovery, no_covid,district) values ('$date',(select max(info_id) from information),'$location', '$no_recovery', '$no_covid','$district')";
    if(mysqli_query($conn,$query)){
		$mas="Data successfully inserted";
		header("Location:update_area_info.php?mas=".$mas);
	}
	else{
		echo" Data not uploaded";
	echo mysqli_error($conn);
	}
		
	




}
?>