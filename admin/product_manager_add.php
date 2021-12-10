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
		                                <div class="muted pull-left">Add Products</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="product_manager.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
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
											<label class="control-label" for="inputPassword">SKU</label>
											<div class="controls">
											<input type="text" class="span8" name="sku" id="inputPassword" placeholder="SKU" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">Name</label>
											<div class="controls">
											<input type="text" class="span8" name="name" id="inputPassword" placeholder="Name" required>
											</div>
										</div>
											
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Brand</label>
											<div class="controls">
											<input type="text" class="span8" name="brand" id="inputPassword" placeholder="Brand" required>
											</div>
										</div>
												
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full" required ></textarea>
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
$sku = $_POST['sku'];
$name = $_POST['name'];
$brand = $_POST['brand'];
$description = $_POST['description'];
										
						
$query = mysqli_query($conn,"select * from product where sku = '$sku' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('SKU Already Exist');
window.location = "product_manager.php";
</script>
<?php
}else{
mysqli_query($conn,"insert into product (sku,name,brand,description,created_by) values('$sku','$name','$brand','$description','$admin_username')")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Add Product $sku $name $brand')")or die(mysqli_error());											
?>
<script>
window.location = "product_manager.php";
$.jGrowl("Product Successfully added", { header: 'Product added' });
</script>
<?php
}
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