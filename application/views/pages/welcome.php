<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>
<?php if (@$user_profile or $this->session->userdata('user_name')!= NULL): ?>
<div class="container text-center">
    <h1>Way of life</h1>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="module form-module thanks">
                <h2>Túto časť môže vidieť jedine prihlásený! <?=$user_profile['name']?> <?php echo $this->session->userdata('user_name'); ?><?php echo anchor('home/logout', 'Odhlásiť'); ?></h2>
            </div>
        </div>
    </div>
</div>
<?php
else:

    redirect('');

endif;
?>