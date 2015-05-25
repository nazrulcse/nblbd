<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin Panel of NBL Website</title>
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
.logout{
float:right;
margin-right:10px;
}
		
</style>
</head>
<body>
	<div style="border:solid 0px #000000;height:37px;">
	<div class='logout'><a href="<?php echo base_url(); ?>index.php/adminlogin/logout"><img src="<?php echo base_url(); ?>/assets/img/logout.jpg" /></a></div>
	<div class='logout'><a href="<?php echo base_url(); ?>index.php/adminlogin/changepass"><img src="<?php echo base_url(); ?>/assets/img/resetpass.jpg" /></a></div>	
	<?php 	if ($this->session->userdata('u_id')=='admin'):	?>
	<div class='logout'><a href="<?php echo base_url(); ?>index.php/menumgmt"><img src="<?php echo base_url(); ?>/assets/img/home.jpg" /></a></div>
	</div>
	<?php endif; ?>
	<div style='height:20px;'></div>  
    	<div>
		<?php echo $output; ?>
    	</div>
</body>
</html>
