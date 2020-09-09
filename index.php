



<?php include('server/connection.php'); ?>
<?php include('login.php');?>
<!DOCTYPE html>
<html>
<head>
<style > 

.button {
  background-color: #F6CFC9; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  
  font-size: 16px;
  
  cursor: pointer;



</style>
	<?php include('templates/head.php'); ?>
	<script src="bootstrap4/jquery/sweetalert.min.js"></script>
</head>
<body class="bg-dark"style="background-image: url('xx.png'); background-repeat: no-repeat; background-attachment: fixed;
  background-size: 100% 100%;">
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
	<div class="text-center ">
		<div class="main">
			<img class="img-fluid" src=""/>
  			<?php include('error.php');?>
		</div>

		<br>
		<br>
		<div class="fixed-center  mb-2">
			<div class="d-inline">

				<button type="button"  class="btn btn-primary btn btn-light"  data-toggle="modal" data-target=".bd-example-modal-sm"><i class="fas fa-user-tie"></i> <font color="white">Administrator</font></button>
			</div>
			<!--<div class="d-inline">
				<button type="button"  class="btn btn-primary btn btn-light"  data-toggle="modal" data-target="#modal-user"><i class="fas fa-user"></i><font color="white"> User</font></button>
			</div> -->
		</div>
	</div>
	<script src="bootstrap4/jquery/jquery.min.js"></script>
	<script src="bootstrap4/js/bootstrap.bundle.min.js"></script>
	<?php include('modals/admin_login_modal.php');?>
	<?php include('modals/employee_login_modal.php');?>


</div>

<style>
.btn-primary,
.btn-primary:active,
.btn-primary:visited {
  background-color: #F3AAA4  !important;
}

.btn-primary:hover {
  background-color: #E85A50 !important;
 
  
}

	</style>

</body>
</html>
