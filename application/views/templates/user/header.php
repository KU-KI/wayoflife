<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="en">
<?php if (@$user_profile or $this->session->userdata('user_name')!= NULL):else:redirect(''); endif;

if (@$user_profile):$user=$user_profile['name'];else:$user=$this->session->userdata('user_name');endif; ?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Way Of life</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/bootstrap.min.css"); ?>" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/animate.min.css"); ?>" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/paper-dashboard.css"); ?>" rel="stylesheet" />


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url("application/views/assets/user/assets/css/demo.css"); ?>" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url("application/views/assets/user/assets/css/themify-icons.css"); ?>" rel="stylesheet" />

</head>
<body>

    <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        Way of life
                    </a>
                </div>

                <ul class="nav">
                    <li class="active">
                        <a href="#">
                            <i class="ti-panel"></i>
                            <p>Úvodná stránka</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo uri_string() ?>">
                            <i class="ti-user"></i>
                            <p>Profil užívateľa</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-view-list-alt"></i>
                            <p>Tabuľky hodnôt</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ti-text"></i>
                            <p>Poznámky</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="#">
                            <i class="ti-export"></i>
                            <p>Chcem viac</p>
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
                        <div class="navbar-brand"><?php echo $user; ?></div>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-panel"></i>
                                    <p>Štatistiky</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="ti-settings"></i>
                                    <p>Nastavenia</p>
                                </a>
                            </li>
                            <li><?php echo anchor('home/logout', '<i class="ti-power-off"></i> <p>Odhlásiť</p>'); ?></li>
                        </ul>

                    </div>
                </div>
            </nav>
