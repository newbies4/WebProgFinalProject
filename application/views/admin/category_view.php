
<div class="container">

    <?php if($this->session->flashdata('category_created')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('category_created'); ?></p>

    <?php endif; ?>
    <?php if($this->session->flashdata('category_removed')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('category_removed'); ?></p>

    <?php endif; ?>
    <?php if($this->session->flashdata('category_failed')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('category_failed'); ?></p>

    <?php endif; ?>
    <?php if($this->session->flashdata('category_updated')): ?>

    <p class="bg-success"><?php echo $this->session->flashdata('category_updated'); ?></p>

    <?php endif; ?>

    <h1 class="text-center">Category</h1>

  <a href="<?php echo base_url();?>pages/create_category" type="button" class="btn btn-primary pull-right">Add new categories</a>



    <table class="table table-striped custab">
    <thead>
    
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
            <?php foreach($results as $categories): ?>
            <tr>
                <td><?php echo $categories['id']; ?></td>
                <td><?php echo $categories['name']; ?></td>
                <td class="text-center"><a class='btn btn-info' href="<?php echo base_url('pages/edit_category/').$categories['id'].'/'.$categories['name'];?>"><span class="glyphicon glyphicon-edit"></span> Edit</a> 
                  <a href="<?php echo base_url('category/remove/').$categories['id'];?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Del</a></td>
            </tr>
            <?php endforeach; ?>
    </table>
</div>