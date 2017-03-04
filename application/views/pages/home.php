<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (@$user_profile or $this->session->userdata('user_name')!= NULL):

    redirect('home/account');

else:

?>
<div class="container text-center">
    <h1>Way of life</h1>
</div>
<div class="container">
    <div class="row col-md-offset-3">
        <div class="col-md-4 nopadding">
            <div class="module form-module info-text">
                <h2>Zdravíme ťa!</h2>
                <p>Na úvod si prečítajte, na čo slúži táto aplikácia.</p>
                <p>Aplikácia slúži na podporu a pomoc ľuďom pri tvorbe ich denného jedálnička, pri kontrole a podobných záležitostí spojené s správnou životosprávou.</p>
                <p>Po prihlásení sa v zobrazí administračné prostredie pre tvoje poznámky, kalkulačku a rôzne utility, ktoré vám v tomto smere pomôžu.</p>
            </div>
        </div>
        <div class="col-md-4 nopadding">
            <div class="module form-module">
                <div class="toggle">
                    <i class="fa fa-times fa-pencil"></i>
                    
                </div>
                <div class="form">
                    <h2>Prihlásiť sa do účtu</h2>               
                    <?php echo form_open("home/login"); ?>
                        <input type="text" id="email" name="email" value="" placeholder="E-mail" />
                        <input type="password" id="pass" name="pass" value="" placeholder="Heslo" />
                        <input type="submit" class="" value="prihlásiť" />
                        <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
                    <?php echo form_close(); ?>
                </div>

                <div class="form">
                    <h2>Vytvorenie účtu</h2>
                    <?php echo validation_errors('<p class="error">'); ?>
                    <?php echo form_open("home/register"); ?>
                        <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" placeholder="Používateľské meno" />
                        <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" placeholder="Heslo" />
                        <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" placeholder="E-mail" />
                        <input type="submit" value="registrovať" />

                        <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>


                    <?php echo form_close(); ?>
                </div>

                <div class="cta">
                    <a rel="nofollow" rel="noreferrer" href="http://trpaslici.azurewebsites.net/" target="_blank">Stránka developerov</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

endif;

?>