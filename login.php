<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])){
header('Location:blog.php');
}
else {
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiction Multipage Bootstrap Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="../views/plugins/bootstrap/bootstrap.min.css">
    <!-- ThemeFisher Icon -->
    <link rel="stylesheet" href="../views/plugins/themefisher-fonts/themefisher-fonts.css">
    <!-- Light Box -->
    <link rel="stylesheet" href="../views/plugins/magnific-popup/magnific-popup.css">
    <!-- animation css -->
    <link rel="stylesheet" href="../views/plugins/animate/animate.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="../views/plugins/slick/slick.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="../views/css/style.css">

    <style>
        /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
        #map_canvas {
            height: 100%;
        }

        .col-centered {
            float: none;
            margin: 0 auto;
        }
        .login-inputs{
            max-height: 20px;
        }

        /* Optional: Makes the sample page fill the window. */
    </style>
    <script src="../views/plugins/modernizr.min.js"></script>
</head>

<body style="height:100%">
<section class="contact-form" >
    <div style="height:100%;">
        <div class="container-fluid">
            <div class="row" style="height:750px">
                <div class="col-md-6 col-xs-6 col-xl-6 col-centered" style="margin-top:20%">
                    <div class="card">
                        <div class="card-header text-center">
                            <h2>Login page</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-6 col-centered">
                            <form method="POST" action="loginAction.php">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" name="email" class="form-control login-inputs" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="max-height:20px">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" class="form-control login-inputs" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-default btn-main">Submit</button>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    </div>
    </section>
</body>

    <?php  }?>