﻿<?php
include_once 'template/header.php';
if (isset($_POST['submit'])){{include_once 'core/calculator.php';}
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form method="post">
                    <div class="form-group">
                        <label for="vyska">Výška</label>
                        <input type="number" class="form-control" id="vyska" placeholder="Výška" />
                    </div>
                    <div class="form-group">
                        <label for="vaha">Váha</label>
                        <input type="number" class="form-control" id="vaha" placeholder="Váha" />
                    </div>
                    <input type="submit" name="submit" value="Vypočítať" class="btn btn-default" />
                </form>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    </div>
</div>

<?php include_once 'template/footer.php'; ?>