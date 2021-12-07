<?php
 	 require ('./lib/dbcon.php'); 
     $conn = dbcon();
	require ('session.php');
	$id=$_POST['selector'];
 	$client_id  = $_POST['client_id'];
	$dep_id  = $_POST['dep_id'];

	if ($id == '' ){
	header("location: item_department.php");
	?>
	

	<?php }else{

	mysqli_query($conn,"insert into tbl_release (client_id,date_borrow) values ('$client_id',NOW()) ") or die(mysqli_error());
	

	$release_id  = mysqli_insert_id($conn); 
	
$history_record=mysqli_query($conn,"select * from user where user_id=$session_id");
$row1=mysqli_fetch_array($history_record);
$user=$row1['firstname']." ".$row1['lastname'];	

$N = count($id);
for($i=0; $i < $N; $i++)
{
		mysqli_query($conn,"INSERT INTO transaction_history (item_id,action,client_id,release_id,admin_name,date_added) VALUES ('$id[$i]','Borrowing Item','$client_id','$release_id','$admin_username',NOW())")or die(mysqli_error());


		mysqli_query($conn,"insert into release_details (item_id, dep_id, release_id,release_status,remarks) values ('$id[$i]','$dep_id','$release_id','pending','/ Re-used')")or die(mysqli_error());
        
       	mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$admin_username','Realease Item $id[$i] to $client_id to Department id $dep_id')")or die(mysqli_error());
}



header("location: item_department.php");
}  
?>
	
	

	
	