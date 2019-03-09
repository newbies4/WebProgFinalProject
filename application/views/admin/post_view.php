
<div class="container">

    <?php if($this->session->flashdata('post_created')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('post_created'); ?></p>

    <?php endif; ?>
    <?php if($this->session->flashdata('post_updated')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('post_updated'); ?></p>

    <?php endif; ?>
    <?php if($this->session->flashdata('post_removed')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('post_removed'); ?></p>

    <?php endif; ?>
    <?php if($this->session->flashdata('post_failed')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('post_failed'); ?></p>

    <?php endif; ?>



    <h1 class="text-center">Post</h1>

  <a href="<?php echo base_url();?>pages/create_post" type="button" class="btn btn-primary pull-right">Add new post</a>


  
    <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Content</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <?php foreach($results as $post): ?>
            <tr>
                <td><?php echo $post['id']; ?></td>
                <td><?php echo $post['title']; ?></td>
                <td><?php echo $post['author']; ?></td>
                <td><?php echo $post['name']; ?></td>
                <td><p class="text-justify"><?php echo substr($post['content'],0,50); ?></p></td>
                <td class="text-center"><a class='btn btn-info' href="<?php echo base_url('pages/edit_post/').$post['id']?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                  <a href="<?php echo base_url('post/remove/').$post['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <?php endforeach; ?>
  
    </div>
</div>