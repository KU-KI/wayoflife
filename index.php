

<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Under construction animation</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css'>

      <style>
      .bg {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 380px;
  text-align: center;
  z-index: -1;
}
.bg h1 {
  color: #fff;
  margin-bottom: .2em;
}
.bg .domain {
  display: inline-block;
  margin: auto;
  padding: .75em 2.5em;
  border-radius: 3px;
  font-size: 2em;
  font-weight: 300;
}
.bg .domain:before {
  content: 'www.';
  opacity: .7;
}
.container {
  position: relative;
  border-radius: 3px;
  margin-top: 224px;
  padding: 16px;
}
h1,
h2,
h3,
h4,
h5 {
  font-weight: 200;
}
p {
  font-weight: 300;
  font-size: 1.2rem;
  line-height: 2rem;
}
.construction-img {
  height: 8rem;
  width: 8rem;
  text-align: center;
  margin: auto;
}
.construction-img .build {
  font-size: 6rem;
  padding-top: 1rem;
}
.construction-img .anim-icon {
  height: 8rem;
  width: 8rem;
}
h2,
h5,
.c-img,
.material-icons {
  -webkit-transition: 3s;
  transition: 3s;
}
@-webkit-keyframes title {
  0%,
  10% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(0px);
            transform: translateX(0px);
  }
}
@keyframes title {
  0%,
  10% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
  20% {
    opacity: 1;
    -webkit-transform: translateX(0px);
            transform: translateX(0px);
  }
}
@-webkit-keyframes subtitle {
  0%,
  60% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
  70% {
    opacity: 1;
    -webkit-transform: translateX(0px);
            transform: translateX(0px);
  }
}
@keyframes subtitle {
  0%,
  60% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
  70% {
    opacity: 1;
    -webkit-transform: translateX(0px);
            transform: translateX(0px);
  }
}
@-webkit-keyframes icon {
  0%,
  30% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
  40% {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes icon {
  0%,
  30% {
    opacity: 0;
    -webkit-transform: translateX(-100px);
            transform: translateX(-100px);
  }
  40% {
    opacity: 1;
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@-webkit-keyframes icon-inner {
  0%,
  35% {
    -webkit-transform: rotate(-180deg) scale(0);
            transform: rotate(-180deg) scale(0);
  }
  55% {
    -webkit-transform: rotate(0deg) scale(1);
            transform: rotate(0deg) scale(1);
  }
}
@keyframes icon-inner {
  0%,
  35% {
    -webkit-transform: rotate(-180deg) scale(0);
            transform: rotate(-180deg) scale(0);
  }
  55% {
    -webkit-transform: rotate(0deg) scale(1);
            transform: rotate(0deg) scale(1);
  }
}
.anim-1 h2 {
  -webkit-animation: title 7s 1;
          animation: title 7s 1;
}
.anim-1 .c-img {
  -webkit-animation: icon 7s 1;
          animation: icon 7s 1;
}
.anim-1 .anim-icon {
  -webkit-animation: icon-inner 7s 1;
          animation: icon-inner 7s 1;
}
.anim-1 h5 {
  -webkit-animation: subtitle 7s 1;
          animation: subtitle 7s 1;
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no" >

  
<div class="bg indigo">
  <h1>Welcome at</h1>
  <div class="domain white indigo-text z-depth-1">www.wayoflife.azurewebsites.net</div>
</div>
<div class="container white z-depth-1 anim-0">
  <div class="row">
    <div class="col s12">
      <h2 class="center">Under construction</h2>
      <div class="construction-img circle yellow darken-1 c-img">
        <div class="anim-icon"><i class="material-icons build grey-text text-darken-4">build</i></div>
      </div>
      <h5 class="center">coming soon...</h5>
    </div>
  </div>
</div>
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js'></script>

    <script>
    $(function () {
  $('.anim-0')
  .removeClass('anim-0')
  .addClass('anim-1');
})
  </script>
</body>
</html>
 
