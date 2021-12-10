<?php 
	include('header.php'); 

	$employee_id = $_GET['id'];
	$user_query = mysqli_query($conn,"SELECT * FROM client WHERE employee_id_no = '$employee_id'")or die(mysqli_error());
	$user_row = mysqli_fetch_array($user_query);

	$id = $user_row['client_id'];
	$name = $user_row['firstname'].' '.($user_row['middlename']!='' ? $user_row['middlename'].' ' : '').$user_row['lastname'];
?>
    <body>
        <div class="container-fluid">
            <div class="row-fluid">
			
				<div class="span9" id="content" style="width: 100%; padding: 0 50px 0 50px;">
                     <div class="row-fluid">
					  
					 <div id="sc" align="center"><image src="images/sclogo.png" width="45%" height="45%"/></div>
				
				   <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                           <div class="muted pull-left"><i class="icon-reorder icon-large"></i> &nbsp; <?=$name?> - Transactions</div>
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
		    </tr>
		</thead>
<tbody>
<!-----------------------------------Content------------------------------------>
<?php
$device_query = mysqli_query($conn,"
SELECT product_release.*, product.sku, product.name, client.* from product_release
LEFT JOIN product ON product_release.product_id = product.id			    
LEFT JOIN client ON product_release.employee_id = client.client_id			    
WHERE employee_id='$id'")or die(mysqli_error());

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
		
			  		
</div>
</div>
</div>
</div>
</div>
	
</div>	
</div>
<script src="admin/bootstrap/js/jquery-1.11.0.js"></script>
<script src="admin/vendors/datatables/js/jquery.dataTables.min.js"></script>
<script src="admin/assets/DT_bootstrap.js"></script>

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
        ]
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