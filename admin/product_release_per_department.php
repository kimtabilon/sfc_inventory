<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('item_location_slidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					  
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                           <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Release per Department</div>
                          <div class="muted pull-right"><a id="return" data-placement="left" title="Click to Return" href="item_department.php"><i class="icon-arrow-left icon-large"></i> Back</a></div>
							<script type="text/javascript">
							$(document).ready(function(){
							$('#return').tooltip('show');
							$('#return').tooltip('hide');
							});
							</script> 
						</div>

<br>		
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="itemTable">
		<thead>		
		        <tr>	
		        	<th>Department</th>		        
					<th></th>
					
					<th>Employee</th>
					<th>Item</th>
					<th>Quantity </th>
					<th>Serial </th>
			        <th>Release Status  </th>	
			        <th>Added by</th>				
					<th>Date</th>							
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$department_id = $_GET['id'];
$device_query = mysqli_query($conn,"
SELECT product_release.*, product.sku, product.name, client.*, department.* from product_release
LEFT JOIN product ON product_release.product_id = product.id			    
LEFT JOIN client ON product_release.employee_id = client.client_id	
LEFT JOIN department ON product_release.department_id = department.dep_id	
WHERE department_id='$department_id'		    
ORDER BY product_release.created_at DESC")or die(mysqli_error());

while($row = mysqli_fetch_array($device_query)){
	$id = $row['id'];
?>
		<tr>
			
			<td><?php echo $row['dep_name']; ?></td>
			<td><img src="<?php echo $row['thumbnails']; ?>" style="height: 50px; width: 50px;"></td>
			<td><?php echo $row['firstname'].($row['middlename']!='' ? $row['middlename'].' ' : ' ').$row['lastname'].' ( '.$row['type'].' : '.$row['position'].' ) #'.$row['contact_no']; ?></td>
			<td><?php echo $row['sku'].' '.$row['name']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['serial']; ?></td>												
			<td><?php echo $row['status']; ?></td>												
			<td><?php echo $row['created_by']; ?></td>												
			<td><?php echo $row['created_at']; ?></td>				
		</tr>
<?php } ?>

</tbody>
</table>
</form>	
			  		
</div>
</div>
</div>
</div>
</div>
	
</div>	
<?php include('footer.php'); ?>
</div>
<?php include('script.php'); ?>

<script type="text/javascript">
	$('.change_status').on('change', function() {
		if($(this).val()!='') {
			if(confirm('Continue change status to '+$(this).val())) {
				var id = $(this).parents('td').find('.release-id').val();
				window.location = "product_release.php?status="+$(this).val()+"&id="+id;
			} else {
				$(this).val('');
			}
		}
	}) 
</script>
 </body>
</html>