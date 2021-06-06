<?php
include("DBconnect2.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CovidUA _1</title>
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
    <link rel="stylesheet" href="assets/css/Search-Input-Responsive-with-Icon.css">
    <link rel="stylesheet" href="assets/css/Studious-switcher.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body style="margin: auto;margin-top: 0px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background: var(--white);box-shadow: 0px 0px 2px;border-bottom-width: 0px;border-bottom-color: var(--secondary);">
        <div class="container"><a class="navbar-brand" href="info.php"><img src="https://i.ibb.co/hmFmhCg/logo.png" alt="logo" border="0"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: var(--white);border-style: none;border-color: var(--light);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="border-color: var(--white);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"></li>
                </ul><span class="navbar-text actions"> <a class="adminprofile" href="adminprofile.php" style="font-family: Montserrat, sans-serif;"><strong>Admin Profile</strong></a></span>
            </div>
        </div>
    </nav>
    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
        <div class="container">
            <div class="intro" style="margin-top: 0;margin-bottom: 0;"></div>
        </div>
    </section>
    <div class="row register-form">
        <div class="col-md-8 offset-md-2">
		<form method="POST" action="uploadinfo_area.php" enctype="multipart/form-data">
			
            <form class="form-row form-group">
                <h1>Update Area Information</h1>
				 
				 <?php                    
                    if(ISSET($_GET['mas']))                       
                        echo '<div class="alert alert-success" role="alert"> Data successfully inserted</div>';     
                ?>
				 
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="text-input-field">Location</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="location" id="location"required /></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="text-input-field">District</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="text" name="district" id="district" required /></div>
                </div>
                <div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="number-input-field">No. of covid patient</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="no_covid" id="no_covid" required/></div>
                </div>
				<div class="form-row form-group">
                    <div class="col-sm-4 label-column"><label class="col-form-label" for="number-input-field">No. of recovery</label></div>
                    <div class="col-sm-6 input-column"><input class="form-control" type="number" name="no_recovery" id="no_recovery" required/></div>
                </div>
				
				
				<button class="btn btn-light submit-button" type="submit" name="submit">Submit Update</button>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Data-Table-with-Search-Sort-Filter-and-Zoom-using-TableSorter.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/jquery.tablesorter.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-filter.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.31.2/js/widgets/widget-storage.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/Multi-step-form-type1.js"></script>
    <script src="assets/js/Multi-step-form.js"></script>
    <script src="assets/js/Pricing-Tables-1.js"></script>
    <script src="assets/js/Pricing-Tables.js"></script>
    <script src="assets/js/Studious-switcher.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>