
<div class="row">
<div class="col-md-4 offset-md-4">
<h4 class="text-center">User Login</h4>
<br>
<?php echo validation_errors("<p class='bg-danger'>"); ?>
<?php $attributes = array('id'=>'login_form', 'class'=>'form-horizontal') ?>
<?php echo form_open('users/login', $attributes); ?>
<div class="form-group">
<?php echo form_label('E-mail Address:'); ?>
<?php $data = array(
	'class' => 'form-control',
	'name' => 'email',
	'placeholder' => 'E-mail'
); ?>
<?php echo form_input($data); ?>
</div>
<div class="form-group">
<?php echo form_label('Password:'); ?>
<?php $data = array(
	'class' => 'form-control',
	'name' => 'password',
	'placeholder' => 'Password'
); ?>
<?php echo form_password($data); ?>
</div>
<div class="form-group">
<?php $data = array(
	'class' => 'btn btn-block btn-primary',
	'name' => 'submit',
	'value' => 'Login'
); ?>
<?php echo form_submit($data); ?>
</div>
<?php form_close(); ?>
<h5 class="text-center">OR</h5> 
<a href="<?php echo base_url();?>users/guest" class="btn btn-block btn-primary">Login as Guest</a>
<br>
</div>
</div>