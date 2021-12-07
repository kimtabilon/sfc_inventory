<?php 
	$my_device = mysqli_query($conn,"select * from release_details    
	LEFT JOIN item ON release_details.item_id = item.item_id
	LEFT JOIN tbl_release ON release_details.release_id=tbl_release.release_id
	where dep_id = '$dep_id' ORDER BY release_details.release_details_id DESC ")or die(mysqli_error());
	$count_yes = mysqli_num_rows($my_device);
?>

<?php 
	$my_device = mysqli_query($conn,"select * from release_details    
	LEFT JOIN item ON release_details.item_id = item.item_id
	LEFT JOIN tbl_release ON release_details.release_id=tbl_release.release_id
	where dep_id = '' ORDER BY release_details.release_details_id  DESC ")or die(mysqli_error());
	$count_no = mysqli_num_rows($my_device);
?>

<?php $not_count = $count_yes -  $count_no; ?>