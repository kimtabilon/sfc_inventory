<?php
include('../dbcon.php');
$conn = dbcon();

$request_id=$_GET['id'];

$products = [];
$device_query = mysqli_query($conn,"SELECT * FROM product WHERE id='$request_id'") or die(mysqli_error());
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

$receive_query = mysqli_query($conn,"SELECT * FROM product_receiver WHERE product_id='$request_id'") or die(mysqli_error());
while($row = mysqli_fetch_array($receive_query)){
	$id = $row['product_id'];
	if(isset($products[$id])) {
		@$products[$id]['received_qty']+=$row['qty'];
		@$products[$id]['total']+=$row['qty'];
	}
} 

$release_query = mysqli_query($conn,"SELECT * FROM product_release WHERE product_id='$request_id'") or die(mysqli_error());
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

echo json_encode($products[$request_id]);
?>