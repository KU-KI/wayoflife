<?php
session_start(); 
?>
<?php 
require 'dbconfig.php';
$fuid=$_SESSION['FBID'];

$check = mysql_query("select * from Users where Fuid='$fuid'");
$check = mysql_num_rows($check);

if (empty($check)): 
else:
    $check = mysql_query("select * from Users where Fuid='$fuid'");
    $row = mysql_fetch_array($check);
    $username = $row['Ffname'];
    $user_id = $row['UID'];

    $_SESSION['FULLNAME']=$username;
    $_SESSION['id']=$user_id;
    header("location: /dashboard.php?f=1");
endif 
?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Way Of Life</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/style.css" rel="stylesheet">

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
</div>
<div class="container">
    <div class="row col-md-offset-4">
        <div class="col-md-6 nopadding">
            <div class="module form-module">
                <div class="toggle">
                    <i class="fa fa-times fa-pencil"></i>
                    
                </div>            
                
                <div class="form">
                    <h2>Vytvorenie účtu</h2>
                    <form action="functions.php" method="post" accept-charset="utf-8">
                        <input type="text" id="user_name" name="user_name" value="<?php echo $_SESSION['FULLNAME']; ?>" required/>
                        <input type="password" id="password" name="password" value="" placeholder="Heslo" required/>
                        <input type="text" id="email_address" name="email_address" value="" placeholder="E-mail" required/>
                        <input type="submit" value="dokončiť" />

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
    <script src="/assets/js/bootstrap.min.js"></script>
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
