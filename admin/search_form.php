
<!-----------------------------------------------Advance Search Form Modal --------------------------------------------------->
<div id="myModal1" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
<h3 id="myModalLabel">Advance Search Form</h3>
</div>

<div class="modal-body">
    <form class="form-horizontal" method="get" action="advance_search.php">
	           
			  <div class="control-group">
		      <label class="control-label" for="inputEmail">Product</label>
			  <div class="controls">
			  <select name="product_id" class="" required/>
			  <option>&larr; Select Item Name &rarr;</option>
			  <?php
				$device_query = mysqli_query($conn,"select * from product")or die(mysqli_error());
				while($device_row = mysqli_fetch_array($device_query)){			
				?>
			  <option value="<?=$device_row['id']?>"><?php echo $device_row['name']; ?></option>
			  <?php } ?>
			  </select>
		      </div>
	          </div>
			  
			   							
                <div class="control-group">
                <div class="controls">
                <button type="submit" id="search1" data-placement="left" title="Click to Search" class="btn btn-primary"><i class="icon-search"></i> Search</button>
				 <script type="text/javascript">
		        $(document).ready(function(){
		        $('#search1').tooltip('show');
		        $('#search1').tooltip('hide');
		        });
		        </script> 
                </div>
                </div>
				
    </form>
    <hr>
    <strong>or Scan QR to find transaction</strong>
    <div id="reader" style="display: block;"></div>
    <div id="scanned-result"></div>
</div>

<div class="modal-footer">
<button class="btn" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i> Close</button>
</div>
</div>

<script src="assets/html5-qrcode.min.js"></script>

<script>
function docReady(fn) {
    // see if DOM is already available
    if (document.readyState === "complete" || document.readyState === "interactive") {
        // call on next available tick
        setTimeout(fn, 1);
    } else {
        document.addEventListener("DOMContentLoaded", fn);
    }
}
docReady(function() {
	// hljs.initHighlightingOnLoad();
	var lastMessage;
	var codeId = 0;
	function onScanSuccess(decodedText, decodedResult) {
        /**
         * If you following the code example of this page by looking at the
         * source code of the demo page - good job!!
         * 
         * Tip: update this function with a success callback of your choise.
         */
		if (lastMessage !== decodedText) {
			lastMessage = decodedText;
			<?php 
				 $base_url="http://".$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"].'?');
			?>
			window.location.href = "<?=$base_url?>/advance_search.php?id="+decodedText;
            // printScanResultPretty(codeId, decodedText, decodedResult);
            ++codeId;
		}
	}
	let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", 
        { 
            fps: 10,
            qrbox: { width: 250, height: 250 },
            // Important notice: this is experimental feature, use it at your
            // own risk. See documentation in
            // mebjas@/html5-qrcode/src/experimental-features.ts
            experimentalFeatures: {
                useBarCodeDetectorIfSupported: true
            },
            rememberLastUsedCamera: true
        });
	html5QrcodeScanner.render(onScanSuccess);
});
</script>