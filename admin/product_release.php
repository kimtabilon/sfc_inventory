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
    <select class="filter-status">
    	<option value="show_all">Show All</option>
    	<option value="ready">Ready</option>
    	<option value="released">Released</option>
    	<option value="returned_good">Returned/Good</option>
    	<option value="returned_damaged">Returned/Damaged</option>
    </select><br><br>
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


<script type="text/javascript">
$(document).ready(function() {
	$('#releasedTable').dataTable( {
		sDom: "<'row'<'span6'l><'span6'f>r>t<'row'<'span6'i><'span6'p>>",
		sPaginationType: "bootstrap",
		oLanguage: {
			"sLengthMenu": "_MENU_ records per page"
		},
		aaSorting: [
            [6, "desc"]
        ],
        aoColumnDefs: [{
        	'bSearchable' : false, 
	        'bSortable': false,
	        'aTargets': [-1, -2] /* 1st one, start by the right */
	    }]
	});

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

	$('.change_status').on('change', function() {
		if($(this).val()!='') {
			var id = $(this).parents('td').find('.release-id').val();
			var qty = parseInt($(this).parents('td').find('.release-qty').val());
			var status = $(this).val();

			var inputQty = parseInt(prompt("Total Qty for "+status, qty));

			console.log(inputQty);
			console.log(qty);
			console.log(status);
			
			if(inputQty <= qty && inputQty > 0) {
				window.location = "product_release.php?status="+status+"&id="+id+"&input_qty="+inputQty+"&qty="+qty;
			} else {
				alert('Invalid input. Please try again');
			}
			$(this).val('');
		}
	}); 

	jQuery.fn.dataTableExt.oApi.fnFilterClear  = function ( oSettings )
	{
	    var i, iLen;
	 
	    /* Remove global filter */
	    oSettings.oPreviousSearch.sSearch = "";
	 
	    /* Remove the text of the global filter in the input boxes */
	    if ( typeof oSettings.aanFeatures.f != 'undefined' )
	    {
	        var n = oSettings.aanFeatures.f;
	        for ( i=0, iLen=n.length ; i<iLen ; i++ )
	        {
	            $('input', n[i]).val( '' );
	        }
	    }
	 
	    /* Remove the search text for the column filters - NOTE - if you have input boxes for these
	     * filters, these will need to be reset
	     */
	    for ( i=0, iLen=oSettings.aoPreSearchCols.length ; i<iLen ; i++ )
	    {
	        oSettings.aoPreSearchCols[i].sSearch = "";
	    }
	 
	    /* Redraw */
	    oSettings.oApi._fnReDraw( oSettings );
	};
} );
</script>

 </body>
</html>