   <div class="row-fluid">					  
       <a href="department.php" class="btn btn-info"id="add" data-placement="right" title="Click to Add Department" ><i class="icon-plus-sign icon-large"></i> Add Department</a>
	               <script type="text/javascript">
		              $(document).ready(function(){
		              $('#add').tooltip('show');
		              $('#add').tooltip('hide');
		              });
		             </script>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Department</div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from department where dep_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" enctype="multipart/form-data" >
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="dep_name" value="<?php echo $row['dep_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Department Name" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
								          <label class="control-label" for="inputPassword">Browse Your Computer</label>
								           <div class="controls">
									        <input name="image" class="input-file uniform_on" id="fileInput" type="file" >
								           </div>
								         </div>
	
									<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success" id="update" data-placement="right" title="Click to Save"><i class="icon-save icon-large"> Save</i></button>
                                                <script type="text/javascript">
	                                            $(document).ready(function(){
	                                            $('#update').tooltip('show');
	                                            $('#update').tooltip('hide');
	                                            });
	                                            </script>
                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
	$ifImg="";
	$dep_name = $_POST['dep_name'];

	if($_FILES['image']['tmp_name']!='') {
		$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	 $image_name = addslashes($_FILES['image']['name']);
	 $image_size = getimagesize($_FILES['image']['tmp_name']);

	 move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
	 $thumbnails = "uploads/" . $_FILES["image"]["name"];
	 
	 $ifImg=", thumbnails=' $thumbnails'";
	}
mysqli_query($conn,"update department set dep_name = '$dep_name' $ifImg where dep_id = '$get_id' ")or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Edit Department $dep_name')")or die(mysqli_error());
?>

<script>
$.jGrowl("Department Successfully Update", { header: 'Department update' });
window.location = "department.php";
</script>
<?php

}
?>