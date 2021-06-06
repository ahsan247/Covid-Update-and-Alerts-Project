<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

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

<body style="margin: auto;margin-top: 0px;">
    <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background: var(--white);box-shadow: 0px 0px 2px;border-bottom-width: 0px;border-bottom-color: var(--secondary);">
        <div class="container"><a class="navbar-brand" href="info.html"><img src="https://i.ibb.co/hmFmhCg/logo.png" alt="logo" border="0"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: var(--white);border-style: none;border-color: var(--light);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="border-color: var(--white);"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"></li>
                </ul><span class="navbar-text actions"> <a class="login" href="info.html" style="font-family: Montserrat, sans-serif;"><strong>Home</strong></a>

                    <a class="login" href="get_rec.php" style="font-family: Montserrat, sans-serif;"><strong>Recommendation</strong></a>

                    <a class="login" href="support.php" style="font-family: Montserrat, sans-serif;"><strong>Support</strong></a>

                    <a class="login" href="adminprofile.php" style="font-family: Montserrat, sans-serif;"><strong>Profile</strong></a>

                    <a class="login" href="admin_logout.php" style="font-family: Montserrat, sans-serif;"><strong>Log Out</strong></a>



                </span>
            </div>
        </div>
    </nav>
    <section class="features-boxed" style="margin: 93px 0px;margin-top: 100px;background: var(--light);">
        <div class="container">
            <div class="intro" style="margin-top: 0;margin-bottom: 0;">
                <h2 class="text-center" style="font-family: Montserrat, sans-serif;font-weight: bold;line-height: 88px;border-bottom: 5px solid var(--red);border-radius: 0px;font-size: 30px;text-align: center;margin-bottom: -81px;"><strong>Admin List</strong></h2>
            </div>
        </div>
    </section><button class="add" onclick="location.href='add_admin.php'">Click here to add another admin</button>

    <div class="table-responsive table-bordered table table-hover table-bordered results">
        <table class="table table-bordered table-hover">
            <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd" class="col-lg-1" style="background: var(--red);font-size: 15px;font-family: Montserrat, sans-serif;line-height: 19.5px;font-weight: bold;">Admin id</th>
                </tr>
            </thead>
            <tbody>
                <tr class="warning no-result">
                    <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No donor found!</td>
                </tr>
                <?php
                require_once("DBconnect.php");
                $sql = "select * from admin";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) != 0) {
                    //here we will print every query returned by the querry $sql
                    while ($row = mysqli_fetch_array($result)) {
                        //we will have to write some html code so we need to close the php
                ?>
                        <tr>
                            <td style="text-align:center;"><?php echo $row[0] ?></td>
                        </tr>
                <?php


                    }
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    <?php
        include('footer.php');
    ?>