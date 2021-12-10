<?php  include('header.php'); ?>
<?php  include('session.php'); ?>
    <body>
		<?php include('navbar.php') ?>
        <div class="container-fluid">
            <div class="row-fluid">
			 <?php include('dashboard_slidebar.php'); ?>		
                <div class="span9" id="content">
                    <div class="row-fluid">
         	         <?php $query= mysqli_query($conn,"select * from user where user_id = '$session_id'")or die(mysqli_error());
			         $row = mysqli_fetch_array($query);			
			         ?>
                    <div class="col-lg-12">
                      <div class="alert alert-success alert-dismissable">
                         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                          <img id="avatar1" class="img-responsive" src="<?php echo $row['adminthumbnails']; ?>"><strong> Welcome! <?php echo $user_row['firstname']." ".$user_row['lastname'];  ?></strong>
                      </div>
                    </div>
     
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left"><i class="icon-dashboard">&nbsp;</i>Dashboard Data Number</div>
								<div class="muted pull-right"><i class="icon-time"></i>&nbsp;<?php include('time.php'); ?></div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
									
<div class="block-content collapse in">
<div id="page-wrapper">
        <?php 
	     $stocks = mysqli_query($conn,"select * from product")or die(mysqli_error());
		 $stocks = mysqli_num_rows($stocks);
		 ?>
                <div class="row-fluid">				
                    <div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                        <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $stocks; ?></div>
                                        <div>All Stocked</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="product_inventory.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				<?php 
                 $_date = date('Y-m-d h:i:s', strtotime(date('Y-m-d h:i:s').' -5 days'));
	             $result= mysqli_query($conn,"SELECT * FROM product 
							 WHERE created_at > '$_date'")
						     or die (mysqli_error());
		         $result = mysqli_num_rows($result);
		         ?>	
                     <div class="span6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $result;?></div>
                                        <div>Availabe New Item</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="product_receiver.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
				 </div>
 </div> 				 							
<div id="page-wrapper">
           <div class="row-fluid">
		    <?php 
            $reused=0;
            $released=0;
            $returned=0;
	        $released_query = mysqli_query($conn,"select * from product_release")or die(mysqli_error());
		    while($row = mysqli_fetch_array($released_query)){
                switch ($row['status']) {
                    case 'ready':
                        break;

                    case 'released':
                        $released+=$row['qty'];
                        break;

                    case 'returned_good':
                        $reused+=$row['qty'];
                        $returned+=$row['qty'];
                        break;

                    case 'returned_damaged':
                        $returned+=$row['qty'];
                        break;

                    default:
                        break;
                }
            }
		     ?>	
			 <div class="span6">
                       <div class="panel panel-green">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                      <i class="fa fa-share-square fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $reused;?></div>
                                        <div>Availabe Re-Used Item</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="product_release.php?view=returned_good">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>
		<?php 
	     $client = mysqli_query($conn,"select * from client ")or die(mysqli_error());
		 $client = mysqli_num_rows($client);
		 ?>				
					<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa fa-group fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $client;?></div>
                                        <div>Register Client</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="employee.php">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>   				
              </div>	       
        </div>  	
        <div id="page-wrapper">
           <div class="row-fluid">	   
			<div class="span6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                       <i class="fa icon-ok  fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $released;?></div>
                                        <div>Release item</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="product_release.php?view=released">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>					
					<div class="span6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
							  <div class="container-fluid">
                                <div class="row-fluid">
                                    <div class="span3"><br/>
                                         <i class="fa fa-desktop fa-5x"></i><br/>
                                    </div>
                                    <div class="span8 text-right"><br/>
                                        <div class="huge"><?php echo $returned;?></div>
                                        <div>Return Item</div><br/>
                                    </div>
                                </div>
							 </div>	
                            </div>
                            <a href="product_release.php?view=returned">							  
                                <div class="modal-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="icon-chevron-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>							  
                            </a>
                        </div>
                    </div>         			  
      </div>
 </div>

               
				
				
			                 </div>
                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                 
                </div>
            </div>
    
         <?php include('footer.php'); ?>
        </div>
	<?php include('script.php'); ?>
    </body>
<embed src="../sound/wlcome.mp3" controller="true" autoplay="true" autostart="True" width="0" height="0" />	