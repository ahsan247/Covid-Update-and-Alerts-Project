<?php
include("DBconnect.php");

$h_name=$_POST['h_name'];
$icu=$_POST['icu'];
$ambulance=$_POST['ambulance'];    
$v_name=$_POST['v_name'];  
$v_rate=$_POST['v_rate'];
$m_name=$_POST['m_name'];  
$m_qty=$_POST['m_qty'];  
$cost=$_POST['cost'];
$h_area=$_POST['h_area'];

if($conn->connect_error){
    die('Connection failed'.$conn->connect_error);
}else{    
    $stmt = $conn->prepare("INSERT INTO recommandation(h_name, icu, ambulance, v_name, v_rate, cost, h_area) values(?, ?, ?, ?, ?, ?, ?)");    
    
    $stmt->bind_param("siisiis", $h_name, $icu, $ambulance, $v_name, $v_rate, $cost, $h_area);
    
    $stmt->execute();    
    
    $stmt->close();
    
    
    
    
    $sql = "SELECT MAX(rec_id) FROM recommandation";
  
        $retval = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($retval);
        $result = $row['MAX(rec_id)'];
            
        echo $result;
    
    
    
    
        
    $stmt2 = $conn->prepare("INSERT INTO medicine(m_name, m_qty, rec_id) values(?, ?, ?)");
    
    $stmt2->bind_param("sii", $m_name, $m_qty, $result);
    
    $stmt2->execute();
    
    $msg= "success";
    
    $stmt2->close();
    
    
    $conn->close();
    
    
    header("Location: update_rec.php?msg=".$msg);
}

?>
