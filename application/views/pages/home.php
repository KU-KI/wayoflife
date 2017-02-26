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
                <div class="toggle">
                    <i class="fa fa-times fa-pencil"></i>
                    
                </div>
                <div class="form">
                    <h2>Prihlásiť sa do účtu</h2>
                    <form>
                        <input type="text" placeholder="Používateľské meno" />
                        <input type="password" placeholder="Heslo" />
                        <button>prihlásiť sa </button>
                        <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
                    </form>
                </div>

                <div class="form">
                    <h2>Vytvorenie účtu</h2>
                    <form>
                        <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
                        <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
                        <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
                        <button>registrovať</button>

                        <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>


                    </form>
                </div>

                <div class="cta">
                    <a rel="nofollow" rel="noreferrer" href="#">Zabudol si heslo?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

endif;

?>