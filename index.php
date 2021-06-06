<?php
include("DBconnect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CovidUA</title>
    <link rel="icon" type="image/png" sizes="146x59" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="146x59" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="146x59" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="146x59" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="146x59" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/css/theme.bootstrap_4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---1-Login.css">
    <link rel="stylesheet" href="assets/css/Ludens-Users---3-Profile.css">
    <link rel="stylesheet" href="assets/css/mloureiro1973-login.css">
    <link rel="stylesheet" href="assets/css/mloureiro1973-login-1.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form-type1.css">
    <link rel="stylesheet" href="assets/css/Multi-step-form.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label-1.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label.css">
    <link rel="stylesheet" href="assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables-1.css">
    <link rel="stylesheet" href="assets/css/Pricing-Tables.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/Rounded-Button-1.css">
    <link rel="stylesheet" href="assets/css/Rounded-Button.css">
    <link rel="stylesheet" href="assets/css/Studious-switcher.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background: var(--white);box-shadow: 0px 0px 2px;border-bottom-width: 0px;border-bottom-color: var(--secondary);">
        <div class="container"><a class="navbar-brand" href="index.php"><img src="https://i.ibb.co/hmFmhCg/logo.png" alt="logo" border="0"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: var(--white);border-style: none;border-color: var(--light);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="border-color: var(--white);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"></li>
                </ul>
                
                <a class="login" href="adminlogin.php" style="font-family: Montserrat, sans-serif; margin-right: 15px"><strong>Admin Login</strong></a>
                
                <a class="login" href="userlogin.php" style="font-family: Montserrat, sans-serif; margin-right: 15px"><strong>User Login</strong></a>
                
                <span class="navbar-text actions"> <a class="btn btn-light text-center action-button" role="button" href="signup.php" style="border-color: var(--blue);background: linear-gradient(rgb(213,37,37) 0%, rgb(213,37,37) 100%);font-family: Montserrat, sans-serif;"><strong>Sign Up</strong></a></span>
            </div>
        </div>
    </nav>
    
    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
        <div class="container">
            <div class="intro" style="margin-top: 0;margin-bottom: 0;">
                <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: 785;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 60px;">Today's Update</h2>
            </div>
			
		
<form method="POST" action="ninfo_not_login.php" enctype="multipart/form-data" >
            <form class="form-row form-group">
                <h5>Check Information by Date</h5>
<input  class="form-control" type="date"  min="2021-01-04" name="dateinfo" id="dateinfo" required/><br>
<button class="btn btn-light submit-button" style="background-color: #dc3545; color: #ffffff" type="submit"  name="submit">Submit</button>
</form>

			<?php
			
			$query="select * from information where info_id=(select max(info_id) from information)";
			$result= mysqli_query($conn,$query);
			 
			 if(mysqli_num_rows($result)>0){
				 
			while($row=mysqli_fetch_array($result)){
			
			?>
			
            <div class="row justify-content-center features" style="margin-top: -38px;">
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 item">
                     <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="fas fa-leaf icon" style="color: var(--red);"></i>
                        <h3 class="name" style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 25px;">Active Cases<br></h3>
                        <p class="description" style="font-size:35px;font-weight: bold;font-family: Montserrat, sans-serif;color: var(--dark);"><?php echo $row['active']; ?></p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-4 col-xl-3 item">
                    <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="fas fa-leaf icon" style="color: var(--red);"></i>
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
                    <div class="box" style="border-bottom: 15px solid var(--red) ;"><i class="fas fa-calendar icon" style="color: var(--red);"></i>
                        <h4 class="name" style="font-size: 25px;font-family: Montserrat, sans-serif;font-weight: bold;"><strong>Date</strong><br></h4>
                        <p class="description" style="font-size: 35px;font-weight: bold;font-family: Montserrat, sans-serif;color: var(--dark);"><?php echo $row['date']; ?></p>
                    </div>
                </div>
            </div>
        </div>
		<?php
			
			}
			}
			?>

     </section><button class="add" onclick="location.href='userlogin.php'">Login to check information by area</button>

<?php
include('footer.php');
?>
