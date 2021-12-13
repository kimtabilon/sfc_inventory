<?php include('header.php'); ?>
<?php include('session.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/datatable/buttons.dataTables.min.css">
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('advance_search_slidebar.php'); ?>
				<div class="span9" id="content">
                     <div class="row-fluid">
					 
					 <div class="empty">
			 	         <div class="alert alert-success">
                            <strong> Advance Search Result List</strong>
                       </div>
			        </div>
				
					<h2 id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></h2>


				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                             <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Transactions</div>
						  </div>
						  
  <h4 id="sc">Device List 
    <div align="right" id="sc">Date:
		<?php
            $date = new DateTime();
             echo $date->format('l, F jS, Y');
        ?></div>
  </h4>
  
<br/>
 	
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="advanceSearchTable">
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
<?php
		$id = 0;
		$field = 'id';

		if(isset($_GET['product_id'])) {
			$id = $_GET['product_id'];
			$field = 'product_id';
		} 

		if(isset($_GET['id'])) {
			$id = $_GET['id'];
			$field = 'id';
		} 
		
		$search_query = mysqli_query($conn,"
			SELECT product_release.*, product.sku, product.name, client.* from product_release
			LEFT JOIN product ON product_release.product_id = product.id			    
			LEFT JOIN client ON product_release.employee_id = client.client_id			    
			WHERE product_release.$field = $id")or die(mysqli_error());
		
		while($row = mysqli_fetch_array($search_query)){
		?>
		<tr>
            <td><?php echo $row['firstname'].($row['middlename']!='' ? $row['middlename'].' ' : ' ').$row['lastname'].' ( '.$row['type'].' : '.$row['position'].' ) #'.$row['contact_no']; ?></td>
			<td><?php echo $row['sku'].' '.$row['name']; ?></td>
			<td><?php echo $row['qty']; ?></td>
			<td><?php echo $row['serial']; ?></td>												
			<td><?php echo $row['status']; ?></td>												
			<td><?php echo $row['created_by']; ?></td>												
			<td><?php echo $row['created_at']; ?></td>							
			<td>
				<input type="hidden" class="release-id" value="<?=$id?>">
				<input type="hidden" class="release-qty" value="<?=$row['qty']?>">
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
$qty = $_GET['qty'];
$input_qty = $_GET['input_qty'];
$date = date('Y-m-d h:i:s');

if($input_qty==$qty) {
	mysqli_query($conn,"UPDATE product_release SET status='$status', updated_by='$admin_username', updated_at='$date' WHERE id='$id'")or die(mysqli_error());
		
} else {
	$left_qty = $qty - $input_qty;
	mysqli_query($conn,"UPDATE product_release SET qty='$left_qty', updated_by='$admin_username', updated_at='$date' WHERE id='$id'")or die(mysqli_error());
	
	
	mysqli_query($conn,"INSERT INTO product_release (employee_id, department_id, product_id, status, qty, serial, created_by, created_at, updated_by, updated_at) SELECT employee_id, department_id, product_id, '$status', '$input_qty', serial, created_by, created_at, '$admin_username', '$date' FROM product_release  WHERE id='$id'")or die(mysqli_error());

	//mysqli_query($conn,"INSERT INTO product_release (date,username,action) VALUES (NOW(),'$admin_username','Change release status id:$id, status:$status')") or die(mysqli_error());
}

mysqli_query($conn,"INSERT INTO activity_log (date,username,action) VALUES (NOW(),'$admin_username','Change release status id:$id, status:$status')")or die(mysqli_error());										
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
		$('#advanceSearchTable').dataTable( {
	        sDom: 'T<"clear">lfrtipB',
			aaSorting: [
	            [6, "desc"]
	        ]
	    } );
	} );
</script>
 </body>
</html>