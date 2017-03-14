<?php
session_start(); 
?>
<?php if ($_SESSION['FBID'] OR $_SESSION['FULLNAME']): header("Location: /dashboard.php"); else: endif ?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Way Of Life</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container text-center">
    <h1>Way of life</h1>
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
        Launch demo modal
    </button>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row background-green">
                <div class="col-md-3">
                    1
                </div>
                <div class="col-md-3">
                    1
                </div>
                <div class="col-md-3">
                    1
                </div>
                <div class="col-md-3">
                    1
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="module form-module">
                <div class="toggle">
                    <i class="fa fa-times fa-pencil"></i>

                </div>

                <div class="form">
                    <h2>Prihlásiť sa do účtu</h2>
                    <form action="core/login.php" method="post" accept-charset="utf-8">
                        <input type="text" id="email" name="email" value="" placeholder="E-mail" required/ />
                        <input type="password" id="pass" name="pass" value="" placeholder="Heslo" required/ />
                        <input type="submit" class="" value="submit" name="submit" />
                        <a href="fbconfig.php" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
                    </form>
                </div>

                <div class="form">
                    <h2>Vytvorenie účtu</h2>
                    <form action="core/functions.php" method="post" accept-charset="utf-8">
                        <input type="text" id="user_name" name="user_name" value="" placeholder="Používateľské meno" required/ />
                        <input type="password" id="password" name="password" value="" placeholder="Heslo" required/ />
                        <input type="text" id="email_address" name="email_address" value="" placeholder="E-mail" required/ />
                        <input type="submit" value="submit" />

                        <a href="fbconfig.php" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
                    </form>
                </div>

                <div class="cta">
                    <a rel="nofollow" rel="noreferrer" href="http://trpaslici.azurewebsites.net/" target="_blank">Stránka developerov</a>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        // Toggle Function
    $('.toggle').click(function(){
      // Switches the Icon
      $(this).children('i').toggleClass('fa-pencil');
      // Switches the forms
      $('.form').animate({
        height: "toggle",
        'padding-top': 'toggle',
        'padding-bottom': 'toggle',
        opacity: "toggle"
      }, "slow");
    });
    </script>
  </body>
</html>
