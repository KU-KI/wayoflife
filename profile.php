<?php
session_start();
?>

<?php if ($_SESSION['FBID'] OR $_SESSION['FULLNAME']): header("Location: /dashboard.php"); else: endif ?>
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Way Of Life :)</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900' />
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 nopadding">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="slide"></div>
                    </div>
                    <div class="item">
                        <div class="slide2"></div>
                    </div>
                    <div class="item">
                        <div class="slide3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row background-green short-info">
                    <div class="col-md-3">
                        <div class="text-center icon">
                            <i class="fa fa-heart" aria-hidden="true"></i>
                            <h3>Zdravie</h3>
                        </div>
                        <div class="info-text-in">Vytvor si svoju vlastn˙ ûivotospr·vu! Vyber si z moûnostÌ jed·l, utvor jed·lniËek, str·û si kalorickÈ hodnoty a dostaÚ svoje telo do najlepöej formy!</div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center icon">
                            <i class="fa fa-calculator" aria-hidden="true"></i>
                            <h3>KalkulaËka</h3>
                        </div>
                        <div class="info-text-in">VypoËÌtaj si objem prÌjmu a v˝daju energickej hodnoty, nezabudni zar·taù cel˙ prijat˙ a vydan˙ energiu a udrûuj svoj jed·lniËek v spravnej hladine!</div>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center icon">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                            <h3>ätatistiky</h3>
                        </div>
                        <div class="info-text-in">Kontroluj ötatistiky, koæko si pribral, koæko si schudol a ako sa za celÈ obdobie zmenila tvoja v·ha! To vöetko na jednom mieste!</div>
                    </div>
                    <div class="col-md-3 text-center login-side">
                        <h2>Way Of Life</h2>
                        <button type="button" class="btn btn-default btn-login" data-toggle="modal" data-target="#myModal">
                            Prihl·siù sa
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row background-gray">
            <div class="col-md-12 text-center about-page-href">
                <a rel="nofollow" rel="noreferrer" href="http://trpaslici.azurewebsites.net/" target="_blank">Str·nka developerov</a>
            </div>
        </div>
    </div>
    <div class="container modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="row">
            <div class="col-md-12 text-right">
                <button type="button" class="btn btn-default btn-close-modal" data-dismiss="modal">Zavrieù</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="module form-module">
                    <div class="toggle">
                        <i class="fa fa-times fa-pencil"></i>

                    </div>

                    <div class="form">
                        <h2>Prihl·siù sa do ˙Ëtu</h2>
                        <form action="core/login.php" method="post" accept-charset="utf-8">
                            <input type="text" id="email" name="email" value="" placeholder="E-mail" required/ />
                            <input type="password" id="pass" name="pass" value="" placeholder="Heslo" required/ />
                            <input type="submit" class="" value="submit" name="submit" />
                            <a href="fbconfig.php" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
                        </form>
                    </div>

                    <div class="form">
                        <h2>Vytvorenie ˙Ëtu</h2>
                        <form action="core/functions.php" method="post" accept-charset="utf-8">
                            <input type="text" id="user_name" name="user_name" value="" placeholder="PouûÌvateæskÈ meno" required/ />
                            <input type="password" id="password" name="password" value="" placeholder="Heslo" required/ />
                            <input type="text" id="email_address" name="email_address" value="" placeholder="E-mail" required/ />
                            <input type="submit" value="submit" />

                            <a href="fbconfig.php" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
                        </form>
                    </div>

                    <div class="cta">
                        <a rel="nofollow" rel="noreferrer" href="http://trpaslici.azurewebsites.net/" target="_blank">Str·nka developerov</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.js"></script>
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
    <script>
            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                items: 1,
                dots: false,
                autoplay: true,
                autoplayTimeout:3000
              })
            })
    </script>
</body>
</html>
