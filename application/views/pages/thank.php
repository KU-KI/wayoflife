<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

      if (@$user_profile):

          redirect('home/login');

      else:

?>
<div class="container text-center">
    <h1>Way of life</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="module form-module">
                <h2>Ďakujeme za registráciu!</h2>
            </div>
        </div>
    </div>
</div>
<?php

      endif;

?>