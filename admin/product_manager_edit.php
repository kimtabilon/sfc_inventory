<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('item_sidebar.php'); ?>
		
						<div class="span9" id="content">
		                    <div class="row-fluid">
									
		                        <!-- block -->
		                        <div id="" class="block">
		                            <div class="navbar navbar-inner block-header">
		                                <div class="muted pull-left">Edit Product</div>
										<div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="product_manager.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#return').tooltip('show');
										$('#return').tooltip('hide');
										});
										</script> 
		                            </div>
		                            <div class="block-content collapse in">									
									
									<?php
									$query = mysqli_query($conn,"select * from product where id = '$get_id'")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
									
									    <form class="form-horizontal" method="post">
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">SKU</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['sku']; ?>" name="sku" id="inputPassword" placeholder="Item Name" required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="inputPassword">Name</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['name']; ?>" name="name" id="inputPassword" placeholder="Item Name" required>
											</div>
										</div>

										<div class="control-group">
										<label class="control-label" for="inputPassword">Brand</label>
											<div class="controls">
											<input type="text" class="span8" value="<?php echo $row['brand']; ?>" name="brand" id="inputPassword" placeholder="Item Brand" required>
											</div>
										</div>
										
										<div class="control-group">
											<label class="control-label" for="inputPassword">Description</label>
											<div class="controls">
													<textarea name="description" id="ckeditor_full">
													<?php echo $row['description']; ?>
													</textarea>
											</div>
										</div>
										
										<div class="control-group">
										<div class="controls">
										
										<button id="update" data-placement="right" title="Click to update" name="update" type="submit" class="btn btn-info"><i class="icon-save icon-large"></i> Update</button>
										</div>
										</div>
										<script type="text/javascript">
										$(document).ready(function(){
										$('#update').tooltip('show');
										$('#update').tooltip('hide');
										});
										</script> 
										</form>
										
										<?php
										if (isset($_POST['update'])){
                                        $sku = $_POST['sku'];
                                        $name = $_POST['name'];
                                        $brand = $_POST['brand'];
                                        $description = $_POST['description'];

										mysqli_query($conn,"update product set name = '$name',
																		brand  = '$brand',
																		sku  = '$sku',
																		updated_by = '$admin_username',
																		updated_at = '".date('Y-m-d h:i:s')."',
																		description = '$description'
																		where id = '$get_id' ") or die(mysqli_error());
																										
									    mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Product $sku $name')")or die(mysqli_error());
										?>
										<script>										
										window.location = "product_manager.php";
										$.jGrowl("Product Successfully Update", { header: 'Product update' });
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
<script>
	jQuery(document).ready(function(){
		jQuery("#opt11").hide();
		jQuery("#opt12").hide();
		jQuery("#opt13").hide();		

		jQuery("#qtype").change(function(){	
			var x = jQuery(this).val();			
			if(x == '1') {
				jQuery("#opt11").show();
				jQuery("#opt12").hide();
				jQuery("#opt13").hide();
			} else if(x == '2') {
				jQuery("#opt11").hide();
				jQuery("#opt12").show();
				jQuery("#opt13").hide();
			}
		});
		
	});
</script>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>