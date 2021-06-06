<?php
session_start();
include ('header.php');
?>



    <div class="container" style="margin-top: 125px;">
        <div class="row">
            <div class="col-md-12">
                <main class="page" style="min-height: 100%;">
                    <section class="clean-block about-us">
                        <div class="row" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col text-center">
                                <h2 class="text-info">Profile</h2>
                            </div>
                        </div>
                        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                            <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;">
                                <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ_2qZWl72WiCU5Cr7ViOpacdSXzLIZRQDf34a8oxNOa1ELFzzBjCOtDnWgdMAx9TR4BQ&usqp=CAU" />
                                    <div class="card-body info">
                                        <div class="row" style="margin-top: -24px;">
                                            <div class="col-md-12" style="margin-top: 22px;">
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>
                                                                <?php
                                                                require_once("DBconnect.php");
                                                                $uphone = $_SESSION['phone'];
                                                                $sql = "select * from users where phone='$uphone'";
                                                                $result = mysqli_query($conn, $sql);
                                                                $uname = mysqli_fetch_array($result);
                                                                echo $uname[1];
                                                                ?>
                                                            </strong></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Mobile</strong></p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="labels"><?php

                                                                            echo $uname[0];

                                                                            ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Address</strong></p>
                                                    </div>
                                                    <div class="col">
                                                        <p class="labels"><?php
                                                                            echo $uname[3];
                                                                            ?></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><strong>Blood Group</strong></p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <p class="labels"><?php
                                                                            echo $uname[2];
                                                                            ?></p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12"><a class="btn btn-success" role="button" href="user_admin.php"><i class="fas fa-pencil-alt"></i>Admin Login</a></div>
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