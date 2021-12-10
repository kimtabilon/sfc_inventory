<?php include('header.php'); ?>
<?php include('session.php'); ?>
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
                           <div class="muted pull-left"><i class="icon-reorder icon-large"></i> Realtime Inventory</div>
						</div>

<br>		
<div class="block-content collapse in">
    <div class="span12">
	<form action="" method="post">
  	<table cellpadding="0" cellspacing="0" border="0" class="table" id="inventoryTable">
		<thead>		
		        <tr>			        
					<th>QR</th>
					<th>SKU</th>
					<th>Name</th>
					<th>Received Qty</th>
			        <th>Allocate Qty</th>					
			        <th>Released Qty</th>					
					<th>Returned Good</th>
					<th>Returned Damage</th>
					<th>Total</th>			
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$products = [];
$device_query = mysqli_query($conn,"select * from product") or die(mysqli_error());
while($row = mysqli_fetch_array($device_query)){
	$id = $row['id'];
	$products[$id] = [
		'sku'=>$row['sku'],
		'name'=>$row['name'],
		'received_qty'=>0,
		'allocate_qty'=>0,
		'released_qty'=>0,
		'returned_good'=>0,
		'returned_damaged'=>0,
		'total'=>0,
	];
} 	

$receive_query = mysqli_query($conn,"select * from product_receiver") or die(mysqli_error());
while($row = mysqli_fetch_array($receive_query)){
	$id = $row['product_id'];
	if(isset($products[$id])) {
		@$products[$id]['received_qty']+=$row['qty'];
		@$products[$id]['total']+=$row['qty'];
	}
} 

$release_query = mysqli_query($conn,"select * from product_release") or die(mysqli_error());
while($row = mysqli_fetch_array($release_query)){
	$id = $row['product_id'];
	if(isset($products[$id])) {
		switch ($row['status']) {
			case 'ready':
				@$products[$id]['allocate_qty']+=$row['qty'];
				@$products[$id]['total']-=$row['qty'];
				break;

			case 'released':
				@$products[$id]['released_qty']+=$row['qty'];
				@$products[$id]['total']-=$row['qty'];
				break;

			case 'returned_good':
				@$products[$id]['returned_good']+=$row['qty'];
				break;

			case 'returned_damaged':
				@$products[$id]['returned_damaged']+=$row['qty'];
				@$products[$id]['total']-=$row['qty'];
				break;

			default:
				break;
		}
	}
		
} 	
?>
<?php foreach($products as $product) { ?>
		<tr>
			<td><img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=<?=$product['sku']?>&choe=UTF-8" title="Scan Item Code" style="width: 100px; height: 100px; max-width: none;" /></td>
			<td><?php echo $product['sku']; ?></td>
			<td><?php echo $product['name']; ?></td>
			<td><?php echo $product['received_qty']; ?></td>
			<td><?php echo $product['allocate_qty']; ?></td>
			<td><?php echo $product['released_qty']; ?></td>
			<td><?php echo $product['returned_good']; ?></td>
			<td><?php echo $product['returned_damaged']; ?></td>
			<td><?php echo $product['total']; ?></td>
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
	$(document).ready(function() {
		$('#inventoryTable').dataTable( {
			sDom: "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
			sPaginationType: "bootstrap",
			oLanguage: {
				"sLengthMenu": "_MENU_ records per page"
			},
			aaSorting: [
	            [8, "desc"]
	        ]
		} );
	} );
</script>
 </body>
</html>