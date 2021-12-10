<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('item_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
							
		                        <!-- block -->
		                        <div class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Receive Product</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="product_receiver.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
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
											  <select name="id" class="chzn-select" required/>
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
										<input type="number" class="span8" name="qty" id="inputPassword" placeholder="Quantity" required>
									</div>
								</div>
									
								
								<div class="control-group">
									<label class="control-label" for="inputPassword">Serial</label>
									<div class="controls">
									<input type="text" class="span8" name="serial" id="inputPassword" placeholder="Serial">
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

$id = $_POST['id'];
$qty = $_POST['qty'];
$serial = $_POST['serial'];
										
mysqli_query($conn,"insert into product_receiver (product_id,qty,serial,created_by) values('$id','$qty','$serial','$admin_username')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add Receiver product_id:$id, qty:$qty, serial:$serial')")or die(mysqli_error());											
?>
<script>
window.location = "product_receiver.php";
$.jGrowl("Product Successfully received", { header: 'Product received' });
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
    </body>