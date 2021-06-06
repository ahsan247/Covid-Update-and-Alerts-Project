<?php
include("DBconnect.php");
include('header.php');
if(isset($_POST['submit'])&& isset($_POST['dateinfo']))
{
	echo "success";
$date=$_POST['dateinfo'];
?>



    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
        <div class="container">
            <div class="intro" style="margin-top: 0;margin-bottom: 0;">
                <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: 785;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 45px;">Your Searched Date's Information</h2>
            </div>




            <?php
			$query="select * from information where info_id=(select max(info_id) from information where date='$date')";
			$result= mysqli_query($conn,$query);
			 
			 if(mysqli_num_rows($result)>0){
				 
			while($row=mysqli_fetch_array($result)){
			
			
			?>

            <div class="row justify-content-center features" style="margin-top: -38px;">
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 item">
                    <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="fa fa-leaf icon" style="color: var(--red);"></i>
                        <h3 class="name" style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 25px;">Active Cases<br></h3>
                        <p class="description" style="font-size:35px;font-weight: bold;font-family: Montserrat, sans-serif;color: var(--dark);"><?php echo $row['active']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 item">
                    <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="fa fa-leaf icon" style="color: var(--red);"></i>
                        <h3 class="name" style="font-size: 25px;font-family: Montserrat, sans-serif;font-weight: bold;"><strong>Recovered</strong><br></h3>
                        <p class="description" style="font-size: 35px;font-weight: bold;font-family: Montserrat, sans-serif;color: var(--dark);"><?php echo $row['recovery']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 item">
                    <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="far fa-sad-tear icon" style="color: var(--red);"></i>
                        <h3 class="name" style="font-size: 25px;font-family: Montserrat, sans-serif;font-weight: bold;"><strong>Died</strong><br></h3>
                        <p class="description" style="font-size: 35px;font-weight: bold;font-family: Montserrat, sans-serif;color: var(--dark);"><?php echo $row['death']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 item">
                    <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="fa fa-calendar icon" style="color: var(--red);"></i>
                        <h4 class="name" style="font-size: 25px;font-family: Montserrat, sans-serif;font-weight: bold;"><strong>Date</strong><br></h4>
                        <p class="description" style="font-size: 35px;font-weight: bold;font-family: Montserrat, sans-serif;color: var(--dark);"><?php echo $row['date']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
			}
			}
}
			?>

       </section><button class="add" onclick="location.href='info.php'">Return</button>

<?php
    include ('footer.php');
?>
</body>

</html>
