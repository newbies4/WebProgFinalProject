

<h2>Edit Post</h2>

<?php if($this->session->flashdata('category_exist')): ?>

<p class="bg-danger"><?php echo $this->session->flashdata('category_exist'); ?></p>

<?php endif; ?>
<?php if($this->session->flashdata('post_exist')): ?>

<p class="bg-danger"><?php echo $this->session->flashdata('post_exist'); ?></p>

<?php endif; ?>

<?php $attributes = array('id'=>'register_form', 'class'=>'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php echo form_open('post/edit', $attributes);?>

	<div class="form-group">
	<?php echo form_label('Post Title'); ?>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'post_title',
		'placeholder' => 'Enter Post Title',
		'value' => $post['title']
	);
	?>
	<?php echo form_input($data); ?>
	</div>

	<div class="form-group">
	<?php echo form_label('Category Name'); ?>

	<?php foreach($categories as $cat): ?>

		<?php $options[$cat['id']] = $cat['name'];?>

	<?php endforeach; ?>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'post_categories'
	);
	?>
	<?php echo form_dropdown($data,$options); ?>
	</div>

	<div class="form-group">
	<?php echo form_label('Post Author'); ?>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'post_author',
		'placeholder' => 'Enter Post Author',
		'value' => $post['author']
	);
	?>
	<?php echo form_input($data); ?>
	</div>

	<div class="form-group">
	<?php echo form_label('Post Content'); ?>
	<?php
	$data = array(
		'class' => 'form-control',
		'name' => 'post_content',
		'placeholder' => 'Enter Post Content',
		'value' => $post['content']
	);
	?>
	<?php echo form_textarea($data); ?>
	</div>

	
	<div class="form-group">
	<a href="<?php echo base_url();?>post/show" type="button" class="btn btn-default">Back</a>
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
