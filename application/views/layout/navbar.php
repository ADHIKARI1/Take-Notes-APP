
<?php 
$login = '';
$register = '';
$page = $this->uri->segment(2);
if ($page == 'login')
  $login = 'active';
elseif($page == 'register')
  $register = 'active';


 ?>
<div class="container-fluid"> 
<div class="row">
  <div class="col-12">
<nav class="navbar  navbar-expand-xl navbar-light bg-primary">
  <a class="navbar-brand" href="<?php echo base_url();?>"><i class="fa fa-sticky-note" aria-hidden="true" style="font-size:30px;color:orange"></i>
 Take Notes</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav nav-pills ml-auto"> 
  <?php if(!$this->session->userdata('logged_in')): ?>
      <li class="nav-item <?php echo $login; ?>">
        <a class="nav-link" href="<?php echo base_url();?>users/login"><span class="sr-only">(current)</span><i class="fa fa-compass" aria-hidden="true"></i>
Login</a>
      </li>
      <li class="nav-item <?php echo $register; ?>">
        <a class="nav-link" href="<?php echo base_url();?>users/register"><i class="fa fa-user-plus" aria-hidden="true"></i>
Register</a>
      </li> 
  <?php else: ?>
  <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>users/logout">
        <i class="fas fa-arrow-alt-circle-right" style="font-size:20px;color:orange"> Logout</i>        
      </a>
  </li>
  <?php endif; ?>
    </ul>     
  </div>

</nav>
</div>
</div>
</div>

