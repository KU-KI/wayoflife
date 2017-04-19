<?php
include_once 'template/header.php';
if (isset($_POST['submit'])){include_once 'core/calculator.php';}
?>

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 <?php if (!isset($_POST['submit'])){echo'col-md-offset-4';}?>">
                <form method="post">
                    <div class="form-group">
                        <label for="vyska">Výška</label>
                        <input type="number" class="form-control" id="vyska" name="vyska" placeholder="Výška" value="<?php echo $vyska*100;?>"/>
                    </div>
                    <div class="form-group">
                        <label for="vaha">Váha</label>
                        <input type="number" class="form-control" id="vaha" name="vaha" placeholder="Váha" value="<?php echo $vaha*1;?>" />
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
            <?php if (isset($_POST['submit']) AND $vysledok != NULL){
                      $zaokruhlenie=round($vysledok, 1);
            ?>
            <div class="col-md-12">
                <h2>Čo znamená Vaša hodnota BMI?</h2>

                <table class="table table-bordered table-hover">

                    <thead>
                        <tr>
                            <th>Hodnota</th>
                            <th>Čo to znamená?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>18 a menej</td>
                            <td>Podváha</td>
                        </tr>
                        <tr>
                            <td>18-25</td>
                            <td>Normálna hodnota</td>
                        </tr>
                        <tr>
                            <td>25-29.9</td>
                            <td>Obezita 1. stupňa</td>
                        </tr>
                        <tr>
                            <td>30-34.9</td>
                            <td>Obezita 2. stupňa</td>

                        </tr>
                        <tr>
                            <td>35-39.9</td>
                            <td>Obezita 3.stupňa</td>
                        </tr>
                        <tr>
                            <td>40 a viac</td>
                            <td>Ťažká obezita</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr></tr>
                    </tfoot>
                </table>

                </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php include_once 'template/footer.php'; ?>