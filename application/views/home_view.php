<!-- <p class="bg-success">
<?php if($this->session->flashdata('login_success')): ?>

<?php echo $this->session->flashdata('login_success'); ?>

<?php endif; ?>	

<?php if($this->session->flashdata('user_registered')): ?>

<?php echo $this->session->flashdata('user_registered'); ?>

<?php endif; ?>

</p>

<p class="bg-danger">
<?php if($this->session->flashdata('login_failed')): ?>

<?php echo $this->session->flashdata('login_failed'); ?>

<?php endif; ?>	
</p>

<h1>This is from home_view.php</h1> -->


    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The CS Blog</h1>
        <p class="lead blog-description">The official CS Blog.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

              		
              	
          

          <div class="blog-post">
          	<?php foreach($post as $posts): ?>

            <h2 class="blog-post-title"><?php echo $posts['title']; ?></h2>
            <p class="blog-post-meta"><?php echo date('F d, Y', strtotime($posts['created_at'])); ?> by <b><?php echo $posts['author']; ?></b></p>

            
            <p class="text-justify"><?php echo substr($posts['content'],0,300); ?></p>

            <a class="btn btn-primary btn-right" href="<?php echo base_url();?>pages/no_page">Read More</a>
            <?php endforeach; ?>
          </div><!-- /.blog-post -->

          

          <nav>
            <ul class="pager">
              <li><a href="<?php echo base_url();?>pages/no_page">Previous</a></li>
              <li><a href="<?php echo base_url();?>pages/no_page">Next</a></li>
            </ul>
          </nav>

        </div><!-- /.blog-main -->

        <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Project in Web Prog</p>
            <p>Created by:</p>
            <ul class="list-unstyled">
            	<li>Haidir M. Hassan</li>
            	<li>Angelica Ochea</li>
            	<li>Adzhar Wee</li>
            	<li>Ranjie Amilasan</li>
            </ul>
          </div>
          <div class="sidebar-module">
            <h4>Categories</h4>       
            <ol class="list-unstyled">
            	<?php foreach($category as $categories): ?>
              		<li><a href="<?php echo base_url();?>pages/no_page"><?php echo $categories['name']; ?></a></li>
              	<?php endforeach; ?>
            </ol>
          </div>
        </div><!-- /.blog-sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->

