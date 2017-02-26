<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

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
            <button>Prihlásiť sa </button>
            <?php if (@$user_profile): ?>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img class="img-thumbnail" data-src="holder.js/140x140" alt="140x140" src="https://graph.facebook.com/<?=$user_profile['id']?>/picture?type=large" style="width: 140px; height: 140px;" />
                    <h2>
                        <?=$user_profile['name']?>
                    </h2>
                    <a href="<?= $logout_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Logout</a>
                </div>
            </div>
            <?php else: ?>
            <h2 class="form-signin-heading">Login with Facebook</h2>
            <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block" role="button">Login</a>
            <?php endif; ?>
        </form>
    </div>
    <div class="form">
        <h2>Vytvorenie účtu</h2>
        <form>
            <input type="text" placeholder="Používateľské meno" />
            <input type="password" placeholder="Heslo" />
            <input type="email" placeholder="E-mail" />
            <button>Registrovať</button>
            <button>Alebo skús FACEBOOK</button>
        </form>
    </div>
    <div class="cta">
        <a rel="nofollow" rel="noreferrer" href="#">Zabudol si heslo?</a>
    </div>
</div>