<?php
include ('header.php');
?>





<?php
include ("DBconnect.php");

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    
$health_status = $_POST['health_status'];  
$age = $_POST['age'];
$vaccine_status = $_POST['vaccine_status'];
$money = $_POST['money'];      

    
    
        //MIN COST VALUES IF NOT FOUND        
        $cost_data= "SELECT MIN(cost) FROM recommandation";
        $result = mysqli_query($conn, $cost_data);
        $row2 = mysqli_fetch_array($result); 
        
        $cost_data2= "SELECT h_name, icu, ambulance, v_name, v_rate FROM recommandation WHERE cost=(SELECT MIN(cost) FROM recommandation)";
        $result2 = mysqli_query($conn, $cost_data2);
        $row3 = mysqli_fetch_array($result2); 
    
    
        $cost_data_medicine = "SELECT m.m_name, m.m_qty, m.rec_id, h.rec_id FROM recommandation h INNER JOIN medicine m ON h.rec_id=m.rec_id WHERE h.cost=(SELECT MIN(cost) FROM recommandation)";
  
        $result3 = mysqli_query($conn, $cost_data_medicine);
        $row4 = mysqli_fetch_array($result3);
 
    
    
   
    //conditions here for recommandation
    
    if($health_status == "yes" &&    $vaccine_status=="yes2" && $money=$_POST['money']){
                        
        
        $sql = "SELECT h.h_name, h.icu, h.v_name, h.ambulance, h.v_rate, h.cost, m.m_name, m.m_qty FROM recommandation h INNER JOIN medicine m ON h.rec_id=m.rec_id WHERE h.cost<='".$_POST['money']."' ORDER BY cost DESC";
  
        $retval = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($retval);                 
            
    
    }
    
    
    
    if($health_status == "no" &&  $vaccine_status=="no2" && $money=$_POST['money']){
        
        $sql = "SELECT h.h_name, h.icu, h.v_name, h.ambulance, h.v_rate, h.cost, m.m_name, m.m_qty FROM recommandation h INNER JOIN medicine m ON h.rec_id=m.rec_id WHERE h.cost<='".$_POST['money']."' ORDER BY cost DESC";
  
        $retval = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($retval);                 
    }
    
    
    
    else if($health_status == "yes" &&      $vaccine_status=="no2" && $money=$_POST['money']){
        
        $sql = "SELECT h.h_name, h.icu, h.v_name, h.ambulance, h.v_rate, h.cost, m.m_name, m.m_qty FROM recommandation h INNER JOIN medicine m ON h.rec_id=m.rec_id WHERE h.cost<='".$_POST['money']."' ORDER BY cost DESC";
  
        $retval = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($retval);                 
    }
    
    
    else if($health_status == "no" &&       $vaccine_status=="yes2" && $money=$_POST['money']){
        
        $sql = "SELECT h.h_name, h.icu, h.v_name, h.ambulance, h.v_rate, h.cost, m.m_name, m.m_qty FROM recommandation h INNER JOIN medicine m ON h.rec_id=m.rec_id WHERE h.cost<='".$_POST['money']."' ORDER BY cost DESC";
  
        $retval = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($retval);                 
    }
    
    
    else{
        echo "Somthing error...";            
    }
    
        
}
?>










<section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
    <div class="container">
        <div class="intro" style="margin-top: 0;margin-bottom: 0;">
            <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: bold;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 30px;text-align: center;"><strong>Recommendation</strong></h2>
        </div>
    </div>
</section>




<div class="container">

    <!---------------------General Observation--------------------------->

    <div class="card" id="TableSorterCard" style="margin-bottom: 60px;margin-top: 60px;">
        <div class="row table-topper align-items-center">
            <div class="col-12 col-md-12 offset-6 text-center" style="margin: 0px;padding: 5px 10px;">
                <h6 id="counter" style="font-size: 25px;font-weight: bold;color: var(--dark);width: auto;height: auto;font-family: Montserrat, sans-serif;">&nbsp; General Observations</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    <table class="table table tablesorter" id="ipi-table">
                        <thead class="thead-dark" style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 12px;">
                            <tr>
                                <th style="border-color: var(--red);background: var(--red);">Suggestions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-size: 15px;">
                                    <?php 
                                        if($health_status !="yes"){
                                        echo "You don't have any symptoms.
                                        
                                        <br><br>Since COVID-19 is spreading fast, stay safe by taking some simple precautions, such as physical distancing, wearing a mask, keeping rooms well ventilated, avoiding crowds, cleaning your hands, and coughing into a bent elbow or tissue. Check local advice where you live and work. Do it all! <br><br>

                                        In case you need hospital and medicine suggestions follow the informations below. But of course take <strong>doctor's advise first.</strong> You can call National Health Helpline: <strong>16263</strong>";
                                            
                                        }else{
                                            echo "You are <strong>COVID-19</strong> suspected.
                                        
                                        <br><br>                                    
                                        1. Follow the instructions provided but first consult with a doctor and take doctor’s instructions for care and medicine.
                                           
                                        <br><br>
                                        
                                        2. For most people, symptoms last a few days, and people usually feel better after a week.
                                           
                                        <br><br>
                                        
                                        3. See if over-the-counter medicines for fever help the person feel better.
                                        Make sure to drink a lot of fluids and rests.                                      
                                        <br><br>

                                        4. Follow hospital and medicine suggestions below. <Strong>We made this recommandation according to your budget.</strong>";
                                        }
                                        ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
        </div>
    </div>










    <!---------------------Hospital Info Area--------------------------->

    <div class="card" id="TableSorterCard" style="width: auto;height: auto;">
        <div class="row table-topper align-items-center">
            <div class="col-12 col-md-12 text-center" style="margin: 0px;padding: 5px 10px;">
                <h6 id="counter" style="font-size: 25px;font-family: Montserrat, sans-serif;font-weight: bold;color: var(--dark);width: auto;height: auto;">Hospital Information</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    <table class="table table tablesorter" id="ipi-table">
                        <thead class="thead-dark">
                            <tr>
                                <th style="background: var(--red);border-color: var(--red);font-size: 12px;font-family: Montserrat, sans-serif;font-weight: bold;">Hospital</th>
                                <th class="sorter-false" style="background: var(--red);border-color: var(--red);font-size: 10.8px;font-family: Montserrat, sans-serif;font-weight: bold;">ICU</th>
                                <th class="filter-false" style="background: var(--red);border-color: var(--red);font-size: 10.8px;font-family: Montserrat, sans-serif;font-weight: bold;">Ambulance</th>
                                <th class="filter-false" style="background: var(--red);border-color: var(--red);font-size: 10.8px;font-family: Montserrat, sans-serif;font-weight: bold;">Cost (Approx.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-size: 13px;">


                                    <?php 
                                     if($_POST['money']<$row2['MIN(cost)']){         echo "Sorry! No hospital of your budget. <br> Lowest budget hospital: ";
                                         echo $row3['h_name'];
                                                                            
                                     }else{                                         
                                         echo $row['h_name'];
                                     }
                                    ?>

                                </td>



                                <td style="font-size: 13px;">
                                    <?php 
                                     if($_POST['money']<$row2['MIN(cost)']){         echo $row3['icu'];;                                         
                                     }else{                                         
                                         echo $row['icu'];
                                     }
                                    ?>

                                </td>
                                <td style="font-size: 13px;">

                                    <?php 
                                     if($_POST['money']<$row2['MIN(cost)']){         echo $row3['ambulance'];                                        
                                     }else{                                         
                                         echo $row['ambulance'];
                                     }
                                    ?>

                                </td>



                                <td style="font-size: 13px;">
                                    <?php 
                                     if($_POST['money']<$row2['MIN(cost)']){         echo "You have to bear minimum: "; 
                                         echo $row2['MIN(cost)']; 
                                         echo " BDT";
                                     }else{                                         
                                         echo $row['cost']; echo " BDT";
                                     }
                                    ?>

                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>





        <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
        </div>
    </div>




    <!---------------------Medicine and Vaccine Info Area--------------------------->

    <div class="card" id="TableSorterCard" style="margin-bottom: 60px;margin-top: 60px;">
        <div class="row table-topper align-items-center">
            <div class="col-12 col-md-12 offset-6 text-center" style="margin: 0px;padding: 5px 10px;">
                <h6 id="counter" style="font-size: 25px;font-weight: bold;color: var(--dark);width: auto;height: auto;font-family: Montserrat, sans-serif;">&nbsp; Vaccine and Medicine</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div>
                    <table class="table table tablesorter" id="ipi-table">
                        <thead class="thead-dark" style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 12px;">
                            <tr>
                                <th style="border-color: var(--red);background: var(--red);">Medicine</th>
                                <th style="border-color: var(--red);background: var(--red);">Quantity</th>
                                <th class="sorter-false" style="border-color: var(--red);background: var(--red);">Vaccine Name</th>
                                <th class="filter-false" style="border-color: var(--red);background: var(--red);">Vaccine Rate</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="font-size: 13px;">
                                    <?php 
                                     if($_POST['money']<$row2['MIN(cost)']){         echo $row4['m_name'];                                        
                                     }else{                                         
                                         echo $row['m_name'];
                                     }
                                    ?>

                                </td>
                                <td style="font-size: 13px;">
                                    <?php 
                                     if($_POST['money']<$row2['MIN(cost)']){         echo $row4['m_qty'];                                        
                                     }else{                                         
                                         echo $row['m_qty'];
                                     }
                                    ?>


                                </td>
                                <td style="font-size: 13px;">
                                    <?php 
                                        if($vaccine_status !="yes2"){
                                            
                                            
                                        //echo $row['v_name'];                                                                        
                                     if($_POST['money']<$row2['MIN(cost)']){         echo $row3['v_name'];                                        
                                     }else{                                         
                                         echo $row['v_name'];
                                     }
                                    
                                        }
                                        
                                        
                                        
                                        else{
                                            echo "You have taken vaccine already. Not require.";
                                        }
                                        ?>
                                </td>
                                <td style="font-size: 13px;">
                                    <?php 
                                        if($vaccine_status !="yes2"){
                                        //echo $row['v_rate'];
                                            
                                            if($_POST['money']<$row2['MIN(cost)']){         echo $row3['v_rate'];                                        
                                     }else{                                         
                                         echo $row['v_rate'];
                                     }
                                        }else{
                                            echo "0 Dose";
                                        }
                                        ?>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" role="dialog" tabindex="-1" id="tablehelpModal" aria-labeledby="tablehelpModal" aria-hidden="true">
        </div>
    </div>
</div>


<?php
include ('footer.php');
?>
