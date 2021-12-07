<?php
		session_start();	
        include('dbcon.php');
		$conn = dbcon(); 
		$username=$_POST['username'];
        $password=$_POST['password'];
		
		/*................................................ admin .....................................................*/
			$query = "SELECT * FROM user WHERE username='$username' and password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
			
		/*...................................................Technical Staff ..............................................*/
		$query_client = mysqli_query($conn,"SELECT * FROM technical_user WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$num_row_client = mysqli_num_rows($query_client);
		$row_client = mysqli_fetch_array($query_client);
		
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['user_id'];
		echo 'true_admin';
		
		mysqli_query($conn,"insert into user_log (username,login_date,user_id)values('$username',NOW(),".$row['user_id'].")")or die(mysqli_error());
		
		}else if ($num_row_client > 0){
		$_SESSION['technical_user']=$row_client['tech_id'];
		echo 'true';
		
		mysqli_query($conn,"insert into user_log (username,login_date,tech_id)values('$username',NOW(),".$row_client['tech_id'].")")or die(mysqli_error());
		
		 }else{ 
				echo 'false';
		}	
				
		?>