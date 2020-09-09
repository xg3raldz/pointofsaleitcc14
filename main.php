<?php include('templates/head.php'); ?>

<?php 
	include('server/connection.php');
	if(!isset($_SESSION['username'])){
		header('location: index.php');
	}
	$added = isset($_GET['added']);
	$error = isset($_GET['error']);
	$undelete = isset($_GET['undelete']);
	$updated = '';
	$deleted = '';
	$failure = isset($_GET['failure']);
	
	

?>

<!DOCTYPE html>

<html>

<head>
	
</head>
<body>

	<div class="h-100 bg-dark" id="container" class="bg-dark"style="background-image: url('bgm.png'); background-repeat: no-repeat; background-attachment: fixed;
  background-size: 100% 100%;">
		<div id="header">
			<?php include('alert.php'); ?>
			
			<div class="text-white mt-0 ml-5">
				<table class="table-responsive-sm">
					<tbody>
						<tr>


							&nbsp;&nbsp;&nbsp;<td valign="baseline"><small>User Logged on: Admin </small></td>
							<!--<td valign="baseline"><small><p class="pt-3 ml-5"><i class="fas fa-user-shield"></i> <?php //echo $row['position'];}}}?></p></small></td> -->
							
					
						
							
							<td valign="baseline"><small><p class="p-0 ml-5"><i class="fas fa-calendar-alt">&nbsp</i><span id='time'></span></p></small></td>
						
					
							<!--<td valign="baseline"><small class="mt-5">Customer Name:</small></td> -->
							<td valign="baseline"><small><div class="content p-0 ml-5"><input type="hidden" value="customer customer" class="form-control form-control-sm customer_search" 
                            autocomplete="off" data-provide="typeahead" id="customer_search" placeholder="Customer Search" name="customer"/></small></div>
							</td>

							<td valign="baseline"><button hidden class="btn-sm btn-info border ml-2" data-toggle="modal" data-target=".bd-example-modal-md" style="padding-top: 1px; padding-bottom: 2px;"><span class="badge badge-info"><i class="fas fa-user-plus"></i> New</span></button></td>
						</tr>
					</tbody>
				</table>
			</div>
			
		</div>
		
		<div id="content" class="mr-2" >
			<div id="price_column" class="m-2 table-responsive-sm table-wrapper-scroll-y my-custom-scrollbar-a">
				<form method="POST" action="">
				<table class="table-striped w-100 font-weight-bold" style="cursor: pointer;" id="table2" >
					<thead class="thead-dark" >
						<tr class='text-center'>
							<th>Barcode</th>
							<th>Description</th>
							<th>Price</th>
							<th>Unit</th>
							<th>Qty</th>
							<th>Sub.Total</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="tableData">
					</tbody>
				</table>
				</form>
			</div>
			<span class="card bg-light" .card> <div class="text-primary">

				<small >
						<p><h6 class="text-right text-danger">Grand Total 	&nbsp;	&nbsp;	&nbsp; </h6> </p>
				<p class="text-dark" style="float: right; font-size: 30px;" id="totalValue">₱ 0.00</p>
					<ul class="text-white justify-content-center">
					<p class="text-primary"><li class="d-flex mb-0 text-danger" >Total (₱): <p id="totalValue1" class="mb-0 ml-5 pl-3 text-danger" >0.00</p></li> </p>	
						<li  class="text-primary" >Discount (₱): <input style="width: 100px" class="text-right form-control-sm" type="number" name="discount" value="0" min="0" placeholder="Enter Discount" id="discount" >
						</li>

					</ul>
				</small>
				</div>

			</span>
			<br>
			<div id="table_buttons">
				<button id="buttons" type="button" name='enter' class="Enter btn btn-secondary border ml-2"><i class="fas fa-handshake"></i> Check out</button>
				
			</div>
		</div>
		<div id="sidebar">
			<div class="mt-1 ">
			<div class="input-group"><div class="input-group-prepend"><span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span></div>
   				<input class="form-control" type="text" placeholder="Product Search" aria-label="Search" id="search" name="search" onkeyup="loadproducts();"/>
   			</div></div>

			<div id="product_area" class="table-responsive-sm mt-2 table-wrapper-scroll-y my-custom-scrollbar" >
				<table class="w-100 table-striped font-weight-bold" style="cursor: pointer;" id="table1">
					<thead>

						<tr claclass='text-center'><b>
							<td>Barcode</td>
							<td>Product Name</td>
							<td>Price</td>
							<td>Unit</td>
							<td>Stocks</td>
							
						</tr></b>
						<tbody id="products">
							
						</tbody>
					</thead>
				</table>
			</div>
			<div class="w-100 mt-2" id="enter_area">
				<button id="buttons" type="button" class="cancel btn btn-secondary border"><i class="fas fa-ban"></i> Cancel</button>
			</div>
		</div>
		<div id="footer" class="w-100">
			<button id="buttons" onclick="window.location.href='user/user.php'" class="btn btn-light text-light"><i class="fas fa-users"></i> User</button>
			<button id="buttons" onclick="window.location.href='products/products.php'" class="btn btn-light text-light"><i class="fas fa-box-open"></i> Product</button>
			<button id="buttons" onclick="window.location.href='supplier/supplier.php'" class="btn btn-light text-light"><i class="fas fa-user-tie"></i> Supplier</button>
			<!--<button id="buttons" onclick="window.location.href='customer/customer.php'" class="btn btn-light"><i class="fas fa-user-friends"></i> Customer</button> -->
			<button id="buttons" onclick="window.location.href='logs/logs.php'" class="btn btn-light text-light"><i class="fas fa-globe"></i> Logs</button>
			<button id="buttons" onclick="window.location.href='cashflow/cashflow.php'" class="btn btn-light text-light"><i class="fas fa-money-bill-wave"></i> Cash-Flow</button>
			<button id="buttons" onclick="window.location.href='sales/sales.php'" class="btn btn-light text-light"><i class="fas fa-shopping-cart"></i> Sales</button>
			<button id="buttons" onclick="window.location.href='delivery/delivery.php'" class="btn btn-light text-light"><i class="fas fa-truck"></i> Deliveries</button>
			<div ><button id="buttons" name="logout" type="button" onclick="out();" class="logout btn btn-danger border mr-10 btn pull-right "><i class="fas fa-sign-out-alt"></i> Logout</button>  </div>
				 
		</div>
	</div>
	<?php include('add.php');?>
	<?php include('templates/js_popper.php');?>
	<script type="text/javascript" src="script.js"></script>
	<script src="bootstrap4/js/time.js"></script>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

	<style>
		.btn-light,
.btn-light:active,
.btn-light:visited {
  background-color: #E85A50 !important;
}

.btn-light:hover {
  background-color: #F3AAA4 !important;
 




	</style>

</body>
</html> 


