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
                </ul><span class="navbar-text actions"> <a class="login" href="userlogin.php" style="font-family: Montserrat, sans-serif;"><strong>Log In</strong></a></span>
            </div>
        </div>
    </nav>
    <section class="register-photo">
        <div class="form-container" style="margin-top: 55px;">
            <div class="image-holder"></div>
            <form action="inser_user.php" method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input type="text" class="form-control" name="tel" placeholder="Mobile Number" /></div>
                <div class="form-group"><input type="text" class="form-control" name="Name" placeholder="Full Name" /></div>
                <div class="form-group"><input type="text" class="form-control" name="blood-group" placeholder="Blood Group" /></div>
                <div class="form-group"><input type="text" class="form-control" name="user-address" placeholder="Address" /></div>
                <div class="form-group"><input type="text" class="form-control" name="admin_id" placeholder="Admin id for admin only" /></div>
                <!----<div class="form-group"><input type="number" class="form-control" name="age" placeholder="Age" /></div>---->


                <div class="form-group">
                    <select name="support" class="form-control">
                        <option value="Null"> Do you want to be a supporter? </option>
                        <option value="yes"> Yes </option>
                        <option value="Null"> No </option>
                    </select>
                </div>
                <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password" /></div>

                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background: var(--red);">Sign Up</button></div><a class="already" href="#">You already have an account? Login here.</a>
            </form>
        </div>
    </section>
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