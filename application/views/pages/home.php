<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (@$user_profile):

    redirect('home/login');

else: 

?>
<div class="container text-center"><h1>Way of life</h1></div>
<div class="module form-module">
    <div class="toggle">
        <i class="fa fa-times fa-pencil"></i>
        <div class="tooltip">Click Me</div>
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
            <input type="text" placeholder="Používateľské meno" />
            <input type="password" placeholder="Heslo" />
            <input type="email" placeholder="E-mail" />
            <button>registrovať</button>

            <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>


        </form>
    </div>

    <div class="cta">
        <a rel="nofollow" rel="noreferrer" href="#">Zabudol si heslo?</a>
    </div>
</div>
<?php 

endif; 

?>