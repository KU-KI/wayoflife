<?php include_once 'template/header.php';

$check = mysql_query("select * from Users where UID='$id'");
$row = mysql_fetch_array($check);
$username = $row['Ffname'];
$email = $row['Femail'];
$adress = $row['Fadress'];
$city = $row['Fcity'];
$state = $row['Fstate'];
$pcode = $row['Fcode'];
$about = $row['Fabout'];
if (isset($_POST['submit'])){include_once 'core/profile_update.php';}
?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5">
                    <div class="card card-user">
                        <div class="image">
                            <img src="assets/img/background.jpg" alt="..."/>
                        </div>
                        <div class="content">
                            <div class="author">
                                <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="..."/>
                                <h4 class="title"><?php echo $username; ?></h4>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Profile</h4>
                        </div>
                        <div class="content">
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control border-input" placeholder="Username" value="<?php echo $username; ?>" name="username">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control border-input" placeholder="Email" value="<?php echo $email; ?>" name="email">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control border-input" placeholder="Home Address" value="<?php echo $adress; ?>" name="adress">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control border-input" placeholder="City" value="<?php echo $city; ?>" name="city">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="form-control border-input" placeholder="Country" value="<?php echo $state; ?>" name="state">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Postal Code</label>
                                            <input type="number" class="form-control border-input" placeholder="ZIP Code" value="<?php echo $pcode; ?>" name="pcode">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>About Me</label>
                                            <textarea rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike" name="about"><?php echo $about; ?>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <input type="submit" name="submit" value="Upraviť profil" class="btn btn-default" />
                                </div>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

<?php include_once 'template/footer.php'; ?>