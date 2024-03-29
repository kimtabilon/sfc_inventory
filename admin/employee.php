<?php include('header.php'); ?>
<?php include('session.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/datatable/buttons.dataTables.min.css">

    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('manage_user_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_employee.php'); ?>	

				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
						
				<div class="empty">
                    <div class="alert alert-success alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         <i class="icon-info-sign"></i>  <strong>Note!:</strong> Select the checbox if you want to delete?
                    </div>
               </div>
			   								
				<?php	
	             $count_dev_name=mysqli_query($conn,"select * from client");
	             $count = mysqli_num_rows($count_dev_name);
                 ?>	 
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-folder-open-alt"></i> Employee(s) List</div>
								<div class="muted pull-right">
								Number of Employee: <span class="badge badge-info"><?php  echo $count; ?></span>
							 </div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form action="delete_emp.php" method="post" onsubmit="confirm('Delete selected employee?')">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="employeeTable">
									<button data-placement="right" title="Click to Delete check item" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"> Delete</i></button>
									<script type="text/javascript">
									 $(document).ready(function(){
									 $('#delete').tooltip('show');
									 $('#delete').tooltip('hide');
									 });
									</script>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>ID Number</th>
												<th>Full name</th>
												<th>Type</th>
												<th>Contact Number</th>
												<th>Position</th>
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$device_name_query = mysqli_query($conn,"select * from client")or die(mysqli_error());
													while($row = mysqli_fetch_array($device_name_query)){
													$id = $row['client_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>												
	                                            
												<td><?php echo $row['employee_id_no']; ?></td>
												<td><?php echo $row['firstname']; ?>
												<?php echo $row['middlename']; ?>
												<?php echo $row['lastname']; ?></td>
												<td><?php echo $row['type']; ?></td>
												<td><?php echo $row['contact_no']; ?></td>
												<td><?php echo $row['position']; ?></td>
												
											    <?php include('toolttip_edit_delete.php'); ?>															
												<td width="75">
												<a rel="tooltip"  title="Edit Employee Info" id="p<?php echo $id; ?>" href="edit_employee.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"> Edit</i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>

<script type="text/javascript" charset="utf8" src="assets/datatable/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="assets/datatable/buttons.print.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		$('#employeeTable').dataTable( {
	        sDom: 'T<"clear">lfrtipB',
			aaSorting: [
	            [1, "desc"]
	        ]
	    } );
	} );
</script>
    </body>

</html>