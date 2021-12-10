<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('transaction_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Realeasing Product</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="product_release.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script>                          
		                            </div>
									
		                <div class="block-content collapse in">	
                         <div class="alert alert-success"><i class="icon-info-sign"></i> Please Fill in required details</div>						
							<form class="form-horizontal" method="post">	

								<div class="control-group">
									 <label class="control-label" for="inputEmail" >Select Product</label>
										 <div class="controls">
											  <select name="product_id" class="chzn-select product-select" required/>
											  	<option value="">-- Product List --</option>
										          <?php $result =  mysqli_query($conn,"select id, sku, name from product")or die(mysqli_error()); 
										          while ($row=mysqli_fetch_array($result)){ ?>
											   <option value="<?php echo $row['id']; ?>"><?php echo $row['sku'].' '.$row['name']; ?></option>
											    <?php } ?>
											   </select>
									    </div>
								</div>

								<div class="control-group">
									<label class="control-label" for="inputPassword">Quantity</label>
									<div class="controls">
										<input type="number" class="span8 input-qty" name="qty" id="inputPassword" min="1" placeholder="Quantity" required>
									</div>
								</div>
									
								
								<div class="control-group">
									<label class="control-label" for="inputPassword">Serial</label>
									<div class="controls">
									<input type="text" class="span8" name="serial" id="inputPassword" placeholder="Serial">
									</div>
								</div>

								<div class="control-group">
									 <label class="control-label" for="inputEmail">Employee Name</label>
										 <div class="controls">
											  <select name="employee_id" class="chzn-select" required/>
											    <option></option>
										          <?php $result =  mysqli_query($conn,"select * from client")or die(mysqli_error()); 
										          while ($row=mysqli_fetch_array($result)){ ?>
											   <option value="<?php echo $row['client_id']; ?>"><?php echo $row['firstname']; ?>&nbsp<?php echo $row['middlename']; ?>&nbsp<?php echo $row['lastname']; ?></option>
											    <?php } ?>
											   </select>
									    </div>
								</div>

								<div class="control-group">
									 <label class="control-label" for="inputEmail" >Department Name</label>
										 <div class="controls">
											  <select name="department_id" class="chzn-select" required/>
											    <option></option>
										          <?php $result =  mysqli_query($conn,"select * from department")or die(mysqli_error()); 
										          while ($row=mysqli_fetch_array($result)){ ?>
											   <option value="<?php echo $row['dep_id']; ?>"><?php echo $row['dep_name']; ?></option>
											    <?php } ?>
											   </select>
									    </div>
								</div>

								<div class="control-group">
									 <label class="control-label" for="inputEmail" >Status</label>
										 <div class="controls">
											  <select name="status" class="chzn-select" required/>
											    <option value="ready">Ready</option>
											    <option value="released">Released</option>
											   </select>
									    </div>
								</div>


									
								<div class="control-group">
								<div class="controls">
								<button name="save" id="save" name="singlebutton" data-placement="right" title="Click here to Save your new data." class="btn btn-primary"><i class="icon-save"></i> Save</button>				
								</div>
								</div>
							</form>
<?php
if (isset($_POST['save'])){

$product_id = $_POST['product_id'];
$qty = $_POST['qty'];
$serial = $_POST['serial'];

$employee_id = $_POST['employee_id'];
$department_id = $_POST['department_id'];
										
mysqli_query($conn,"insert into product_release (employee_id, department_id, product_id,qty,serial,created_by) values('$employee_id','$department_id','$product_id','$qty','$serial','$admin_username')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Realeasing product_id:$product_id, qty:$qty, serial:$serial')")or die(mysqli_error());											
?>
<script>
window.location = "product_release.php";
$.jGrowl("Product Successfully release", { header: 'Product release' });
</script>
<?php
}

?>
																										
	                            </div>
	                        </div>
	                        <!-- /block -->
	                    </div>
	                </div>
        </div>
	<?php include('footer.php'); ?>
    </div>
	<?php include('script.php'); ?>

	<script type="text/javascript">
		<?php 
			 $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?');
		?>
		$('.product-select').on('change', function() {
			var id=$(this).val();
			console.log(id);
			$.get("<?=$base_url?>/product_inventory_ajax.php?id="+id, function(res, status){
				var res = JSON.parse(res);

				$('.input-qty').attr('max',res.total).attr('placeholder', 'Remaining Qty is '+res.total);
				console.log(res);
			});
		});
	</script>
</body>