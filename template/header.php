<?php
session_start(); 
?>
<?php if ($_SESSION['FBID'] OR $_SESSION['FULLNAME']):  
else: header("Location: /"); endif ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Way of life</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    Way of life
                </a>
            </div>

            <ul class="nav">
                <li <?php if($_SERVER['REQUEST_URI']=='/dashboard.php'){echo' class="active"';}?>>
                    <a href="/">
                        <i class="ti-panel"></i>
                        <p>Domov</p>
                    </a>
                </li>
                <li <?php if($_SERVER['REQUEST_URI']=='/calculator.php'){echo' class="active"';}?>>
                    <a href="calculator.php">
                        <i class="ti-user"></i>
                        <p>BMI kalkulačka</p>
                    </a>
                </li>
                <li <?php if($_SERVER['REQUEST_URI']=='/profile.php'){echo' class="active"';}?>>
                    <a href="profile.php">
                        <i class="ti-panel"></i>
                        <p>Profil</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <div class="navbar-brand"><?php echo $_SESSION['FULLNAME']; ?></div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
			<li>
                            <a href="core/logout.php">
				<i class="ti-power-off"></i>
				<p>Logout</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>