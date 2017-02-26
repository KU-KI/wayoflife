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
            <?php else: ?>
                <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
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
            <?php if (@$user_profile): ?>
            <?php else: ?>
            <a href="<?= $login_url ?>" class="btn btn-lg btn-primary btn-block facebook" role="button">... facebook</a>
            <?php endif; ?>
        </form>
    </div>

    <div class="cta">
        <a rel="nofollow" rel="noreferrer" href="#">Zabudol si heslo?</a>
    </div>
</div>