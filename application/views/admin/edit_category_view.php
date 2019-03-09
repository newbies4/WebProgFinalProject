<h2>Edit Category</h2>

<?php if($this->session->flashdata('category_exist')): ?>

<p class="bg-danger"><?php echo $this->session->flashdata('category_exist'); ?></p>

<?php endif; ?>

<?php if($this->session->flashdata('category_updated')): ?>

<p class="bg-danger"><?php echo $this->session->flashdata('category_updated'); ?></p>

<?php endif; ?>

<?php $attributes = array('id'=>'register_form', 'class'=>'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('category/edit/', $attributes);?>

	<div class="form-group">

	<?php echo form_label('Categort Name'); ?>

	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'category_name',
		'placeholder' => 'Enter Category Name',
		'value' => $this->session->userdata('category_name')
	);
	?>

	<?php echo form_input($data); ?>

	</div>

	
	<div class="form-group">
	<a href="<?php echo base_url();?>category/show" type="button" class="btn btn-default">Back</a>
	<?php
	$data = array(
		'class' => 'btn btn-primary',
		'name' => 'submit',
		'value' => 'Save Changes'
	);
	?>

	<?php echo form_submit($data); ?>

	</div>

<?php echo form_close();?>
