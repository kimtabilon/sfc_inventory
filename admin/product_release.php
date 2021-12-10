<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('transaction_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					  
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                           <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Released</div>
                          <div class="muted pull-right" style="margin-top: -10px;">
								<a href="product_release_add.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Release Product" ><i class="icon-plus-sign icon-large"></i> Release Product</a>
						  </div>
						</div>

<br>		
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="itemTable">
		<thead>		
		        <tr>			        
					<th>Employee</th>
					<th>Item</th>
					<th>Quantity </th>
					<th>Serial </th>
			        <th>Release Status  </th>	
			        <th>Added by</th>				
					<th>Date</th>						
                    <th class="empty"></th>					
                    <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$device_query = mysqli_query($conn,"
SELECT product_release.*, product.sku, product.name, client.* from product_release
LEFT JOIN product ON product_release.product_id = product.id			    
LEFT JOIN client ON product_release.employee_id = client.client_id			    
ORDER BY product_release.created_at DESC")or die(mysqli_error());

while($row = mysqli_fetch_array($device_query)){
	$id = $row['id'];
?>
		<tr>
			<td><?php echo $row['firstname'].($row['middlename']!='' ? $row['middlename'].' ' : ' ').$row['lastname'].' ( '.$row['type'].' : '.$row['position'].' ) #'.$row['contact_no']; ?></td>
			<td><?php echo $row['sku'].' '.$row['name']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['serial']; ?></td>												
			<td><?php echo $row['status']; ?></td>												
			<td><?php echo $row['created_by']; ?></td>												
			<td><?php echo $row['created_at']; ?></td>							
			<td><input type="hidden" class="release-id" value="<?=$id?>">
				<select class="change_status">
					<option value="">-- Change Status --</option>
					<option value="ready">Ready</option>
					<option value="released">Released</option>
					<option value="returned_good">Return/Good</option>
					<option value="returned_damaged">Return/Damage</option>
				</select>
			</td>							
			<td class="empty" width="80"><a onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};" rel="tooltip"  title="Delete Item" id="i<?php echo $id; ?>" href="product_release.php<?php echo '?delete='.$id; ?>" class="btn btn-danger"><i class="icon-trash"> Delete</i></a></td>
		</tr>
<?php } ?>

</tbody>
</table>
</form>	

<?php
if (isset($_GET['delete'])){
$id = $_GET['delete'];
										
mysqli_query($conn,"delete from product_release where id='$id'")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Delete Receiver id:$id')")or die(mysqli_error());											
?>
<script>
window.location = "product_release.php";
$.jGrowl("Item deleted", { header: 'Item deleted' });
</script>
<?php
}
?>	

<?php
if (isset($_GET['status'])){
$status = $_GET['status'];
$id = $_GET['id'];
$date = date('Y-m-d h:i:s');
										
mysqli_query($conn,"UPDATE product_release SET status='$status', updated_by='$admin_username', updated_at='$date' WHERE id='$id'")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Change release status id:$id, status:$status')")or die(mysqli_error());											
?>
<script>
window.location = "product_release.php";
$.jGrowl("Item deleted", { header: 'Item deleted' });
</script>
<?php
}
?>	
		
			  		
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