<?php include('header.php'); ?>
<?php include('session.php'); ?>
<link rel="stylesheet" type="text/css" href="assets/datatable/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="assets/datatable/buttons.dataTables.min.css">
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
                           <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Transaction Reports</div>
                         
						</div>

<br>		
<div class="block-content collapse in">
    <div class="span12">
    <?php  
    	$_from = isset($_GET['min']) ? $_GET['min'] : date("Y-m-01"); 
    	$_to = isset($_GET['max']) ? $_GET['max'] : date("Y-m-d"); 
    ?>
    <form method="GET">
    	<span>From: </span><input type="date" name="min" value="<?=$_from?>">
    	<span>To: </span><input type="date" name="max" value="<?=$_to?>">
    	<button class="btn btn-info">Generate Report</button>
    </form>
    
    <span>Status: </span>
    <select class="filter-status">
    	<option value="show_all">Show All</option>
    	<option value="ready">Ready</option>
    	<option value="released">Released</option>
    	<option value="returned_good">Returned/Good</option>
    	<option value="returned_damaged">Returned/Damaged</option>
    </select> <br><br>
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="releasedTable">
		<thead>		
		        <tr>			    
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
$device_query = mysqli_query($conn,"
SELECT product_release.*, product.sku, product.name, client.* from product_release
LEFT JOIN product ON product_release.product_id = product.id			    
LEFT JOIN client ON product_release.employee_id = client.client_id			    
WHERE product_release.created_at >= '$_from 00:00:01' AND product_release.created_at <= '$_to 23:59:00' 		    
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
											
?>
<script>
window.location = "product_release.php";
$.jGrowl("Status changed", { header: 'Status changed' });
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
		$('#releasedTable').dataTable( {
	        sDom: 'T<"clear">lfrtipB',
					aaSorting: [
	            [6, "desc"]
	        ],
	        aoColumnDefs: [{
	        	'bSearchable' : false, 
		        'bSortable': false,
		        'aTargets': [-1, -2] /* 1st one, start by the right */
		    }]
	    } );
	} );
</script>

<script type="text/javascript">
$(document).ready(function() {
	<?php if (isset($_GET['view'])){ ?>
		$('#releasedTable').dataTable().fnFilter('<?=$_GET['view']?>');
	<?php } ?>	

	$('.filter-status').on('change', function() {
		var status = $(this).val();

		if(status=='show_all') {
			$('#releasedTable').dataTable().fnFilterClear();
		} else {
			$('#releasedTable').dataTable().fnFilter(status);
		}
	});

	
} );
</script>

 </body>
</html>