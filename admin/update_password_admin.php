 <?php
 include('./lib/dbcon.php'); 
 $conn = dbcon(); 
 include('session.php');
 $new_password  = $_POST['new_password'];
 mysqli_query($conn,"update user set password = '$new_password' where user_id = '$session_id'")or die(mysqli_error());
 ?>