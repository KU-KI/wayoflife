            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>, made with
                        <i class="fa fa-heart heart"></i>by
                        <a href="#">Trpaslici</a>
                    </div>
                </div>
            </footer>

        </div>
    </div>


</body>

<!--   Core JS Files   -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/jquery-1.10.2.js"); ?>" type="text/javascript"></script>
<script src="<?php echo base_url("application/views/assets/user/assets/js/bootstrap.min.js"); ?>" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/bootstrap-checkbox-radio.js"); ?>"></script>

<!--  Charts Plugin
<script src="<?php echo base_url("application/views/assets/user/assets/js/chartist.min.js"); ?>"></script> -->
<!--  Notifications Plugin    -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/bootstrap-notify.js"); ?>"></script>

<!--  Google Maps Plugin
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script> -->
<!-- Paper Dashboard Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/paper-dashboard.js"); ?>"></script>

<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url("application/views/assets/user/assets/js/demo.js"); ?>"></script>

<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'ti-gift',
            	message: "Vitaj !"

            },{
                type: 'success',
                timer: 4000
            });

    	});
</script>

</html>