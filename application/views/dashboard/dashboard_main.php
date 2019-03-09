<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>custom/css/home.css">
	<script src="<?php echo base_url();?>/assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>/assets/js/bootstrap.min.js"></script>
</head>
<body>

	<?php $this->load->view('dashboard/dashboard_header'); ?>

	<div class="container">

			<?php $this->load->view($main_view); ?>

	</div>

</body>
</html>