<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/main.css">
<!--===============================================================================================-->
<link rel="stylesheet" href="<?= base_url() ?>assets/sweetalert/sweetalert2.min.css">

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form method="post" action="<?= site_url('auth/login')?>" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32" style="text-align: center;">
						SIDATUK
						<h6 style="margin-top: 10px;">Sistem Pengendalian Mutu Konstruksi</h6>
					</span>

					<span class="txt1 p-b-11">
						NIP
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "NIP is required">
						<input class="input100" type="text" name="nip" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
						<input type="submit" value="Login" class="login100-form-btn">
							
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="<?= base_url() ?>assets/js/main.js"></script>
	<script src="<?= base_url() ?>assets/sweetalert/sweetalert2.min.js"></script>

   <script>
   	// $(document).ready(function() {

   	function notifAlert(notif,type){
        if(notif != ""){
            Swal.fire({
            icon: type,
            // title: 'Oops...',
            text: notif,
            //   footer: '<a href>Why do I have this issue?</a>'
            });
        }
    }
// } );

   </script> 
    
    <?php if(!empty($this->session->flashdata('notif'))) { 
			if(empty($this->session->flashdata('type'))){
				$type = "error";
			} else{
				$type = $this->session->flashdata('type');
			}?>
	<script>
	notifAlert("<?= $this->session->flashdata('notif'); ?>","<?= $type ?>");
    </script>
<?php } ?>
</body>
</html>
