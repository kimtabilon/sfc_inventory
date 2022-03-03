<?php include('header.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('manage_user_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('employee_edit_form.php'); ?>		   			
				</div>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>

</html>