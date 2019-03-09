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

	<?php $this->load->view('layouts/header'); ?>

	<div class="container">
		
		<!-- <?php
		$data = array(
			'categories_results' => $category,
			'posts_results' => $post
		);
		?> -->
		<!-- <div class="col-xs-9"> -->
			<?php $this->load->view($main_view,$data); ?>
		<!-- </div> -->

	</div>

</body>
</html>