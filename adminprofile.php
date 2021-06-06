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
    <link rel="stylesheet" href="assets/css/multi-step-form-1.css">
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
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/get_rec.css">
</head>










<body style="margin: auto;margin-top: 0px;">
    <header>
        <nav class="navbar navbar-light navbar-expand-md fixed-top navigation-clean-button" style="background: var(--white);box-shadow: 0px 0px 2px;border-bottom-width: 0px;border-bottom-color: var(--secondary);">
            <div class="container"><a class="navbar-brand" href="info.php"><img src="https://i.ibb.co/hmFmhCg/logo.png" alt="logo" border="0"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background: var(--white);border-style: none;border-color: var(--light);"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="border-color: var(--white);"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item"></li>
                    </ul><span class="navbar-text actions"> <a class="login" href="info.php" style="font-family: Montserrat, sans-serif;"><strong>Home</strong></a>

                        <a class="login" href="get_rec.php" style="font-family: Montserrat, sans-serif;"><strong>Recommendation</strong></a>

                        <a class="login" href="support.php" style="font-family: Montserrat, sans-serif;"><strong>Support</strong></a>


                        <a class="login" href="logout.php" style="font-family: Montserrat, sans-serif;"><strong>Log Out</strong></a>
                    </span>
                </div>
            </div>
        </nav>
    </header>


    <div class="container" style="margin-top: 125px;">
        <div class="row">
            <div class="col-md-12">
                <main class="page" style="min-height: 100%;">
                    <section class="clean-block about-us">
                        <div class="row" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col text-center">
                                <h2 class="text-info">Admin</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="https://img.freepik.com/free-vector/male-call-center-agent_1270-395.jpg?size=338&ext=jpg" />
                                    <div class="card-body info">
                                        <div class="row" style="margin-top: -24px;">
                                            <div class="col-md-12" style="margin-top: 22px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Admin id:<?php
                                                                                            require_once("DBconnect.php");
                                                                                            $uphone = $_SESSION['phone'];
                                                                                            $sql = "select * from admin where id='$uphone'";
                                                                                            $result = mysqli_query($conn, $sql);
                                                                                            $uname = mysqli_fetch_array($result);
                                                                                            echo $uname[0];
                                                                                            $id= $uname[0];
                                                                                            $_SESSION['id']=$id;
                                                                                            ?></strong></p>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="updateinfo.php"><i class="fas fa-pencil-alt"></i>Update Information</a></div>
                                                </div>

                                                <br>

                                                <div class="row">
                                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="update_area_info.php"><i class="fas fa-pencil-alt"></i>Update Zones</a></div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="update_rec.php"><i class="fas fa-pencil-alt"></i>Update Recommandations</a></div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="add_admin.php"><i class="fas fa-user-plus"></i>Add Another admin</a></div>
                                                </div>
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-12"><a class="btn btn-success" role="button" href="admin_info.php"><i class="fas fa-info-circle"></i>My information</a></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
        </div>
    </div>
    <?php
include('footer.php');
?>
