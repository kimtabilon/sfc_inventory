<?php include('header.php'); ?>
<?php include('session.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/datatable/buttons.dataTables.min.css">
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('item_sidebar.php'); ?>
			
				<div class="span9" id="content">
                     <div class="row-fluid">
					  
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                           <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Receiver (s) List</div>
                          <div class="muted pull-right" style="margin-top: -10px;">
								<a href="product_receiver_add.php" class="btn btn-info"  id="add" data-placement="right" title="Click to Add Receiver" ><i class="icon-plus-sign icon-large"></i> Receive Product</a>
						  </div>
						</div>

<br>		
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="receiverTable">
		<thead>		
		        <tr>			        
					<th>SKU : Stock Keeping Unit</th>
					<th>Name</th>
					<th>Quantity </th>
			        <th>Serial  </th>					
					<th>Added by</th>
					<th>Added at</th>		
                    <th class="empty"></th>					
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$device_query = mysqli_query($conn,"select product_receiver.*,product.sku,product.name from product_receiver 
LEFT JOIN product ON product_receiver.product_id = product.id			    
ORDER BY product_receiver.created_at DESC")or die(mysqli_error());
while($row = mysqli_fetch_array($device_query)){
	$id = $row['id'];
?>
		<tr>
			<td><?php echo $row['sku']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['serial']; ?></td>												
			<td><?php echo $row['created_by']; ?></td>												
			<td><?php echo $row['created_at']; ?></td>							
			<td class="empty" width="80"><a onclick="if (confirm('Delete selected item?')){return true;}else{event.stopPropagation(); event.preventDefault();};" rel="tooltip"  title="Delete Item" id="i<?php echo $id; ?>" href="product_receiver.php<?php echo '?delete='.$id; ?>" class="btn btn-danger"><i class="icon-trash"> Delete</i></a></td>
		</tr>
<?php } ?>

</tbody>
</table>
</form>	

<?php
if (isset($_GET['delete'])){
$id = $_GET['delete'];
										
mysqli_query($conn,"delete from product_receiver where id='$id'")or die(mysqli_error());
mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Delete Receiver id:$id')")or die(mysqli_error());											
?>
<script>
window.location = "product_receiver.php";
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
		$('#receiverTable').dataTable( {
	        sDom: 'T<"clear">lfrtipB',
			aaSorting: [
	            [5, "desc"]
	        ]
	    } );
	} );
</script>
 </body>
</html>