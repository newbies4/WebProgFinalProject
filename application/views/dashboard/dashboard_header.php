<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url();?>">Blog</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo base_url();?>pages/dashboard">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>post/show">Post <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>category/show">Category <span class="sr-only">(current)</span></a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if($this->session->userdata('logged_in') == FALSE): ?>

        <li><?=anchor('pages/login', 'Login');?></li>
        
        <?php else: ?>
        <li><?=anchor('users/logout', 'Logout');?></li>
        <?php endif; ?>
        <!-- <li><a href="<?php echo base_url();?>pages/login">Login</a></li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>