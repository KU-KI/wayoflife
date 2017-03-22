<?php
include_once 'template/header.php';
if (isset($_POST['submit'])){include_once 'core/calculator.php';}
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <form method="post">
                    <div class="form-group">
                        <label for="vyska">Výška</label>
                        <input type="number" class="form-control" id="vyska" name="vyska" placeholder="Výška" />
                    </div>
                    <div class="form-group">
                        <label for="vaha">Váha</label>
                        <input type="number" class="form-control" id="vaha" name="vaha" placeholder="Váha" />
                    </div>
                    <input type="submit" name="submit" value="Vypočítať" class="btn btn-default" />
                </form>
            </div>
            <div class="col-md-8">
                <?php if (isset($_POST['submit']) AND $vysledok != NULL){
                          $zaokruhlenie=round($vysledok, 1); 
                ?>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="vysledok_bmi <?php if($zaokruhlenie < 18.5 ){echo 'bmi1';} 
                                                       elseif($zaokruhlenie >18.5 and $zaokruhlenie < 25){echo 'bmi2';}
                                                       elseif($zaokruhlenie >25 and $zaokruhlenie < 30){echo 'bmi3';}
                                                       elseif($zaokruhlenie >30){echo 'bmi4';}
                                                       else{}?>">
                            <?php  echo $zaokruhlenie; ?>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php include_once 'template/footer.php'; ?>