<?php include_once 'template/header.php'; ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <h3>BMI kalkulačka</h3>
                    <table class="table table-striped">
                        <thead>
                        <tr> <th>#</th> <th>Váha</th> <th>Výsledok</th></tr>
                        </thead>
                        <tbody>
                        <?php
                        $query = mysql_query("select * from Calculator where uid='$id'");

                        while ($data = mysql_fetch_array($query)) {
                        echo "<tr> <th scope='row'>".$data['id']."</th> <td>".$data['vaha']."</td> <td>".$data['vysledok']."</td></tr>";
                        }

                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php include_once 'template/footer.php'; ?>