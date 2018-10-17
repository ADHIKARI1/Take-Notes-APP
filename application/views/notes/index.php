

<div class="row">
<div class="col-md-8">
<br>
<?php foreach($notes as $note): ?>
<div class="card text-white bg-info mb-3" style="max-width: 35rem;">
  <div class="card-header">
  	Notice 
  	<br>
  	<small>Create Date : <?php echo substr($note->date_created, 0, -9); ?></small>
  	<small class="float-right">Update Date : <?php echo substr($note->date_updated, 0, -9); ?></small>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $note->note_title; ?></h5>
    <p class="card-text"><?php echo $note->note_body; ?></p>
    <a href="<?php echo base_url();?>notes/edit/<?php echo $note->id; ?>" class="btn btn-primary"><i class="fas fa-edit"></i> Edit</a>
    <a href="<?php echo base_url();?>notes/delete/<?php echo $note->id; ?>" class="btn btn-danger float-right remove-link"><i class="fas fa-times-circle"></i> Remove</a>
  </div>
</div>
<?php endforeach; ?>




</div>
<div class="col-md-4">
<br>
<h2>Create Note</h2>
<?php if($this->session->userdata('status') == 'user'): ?>
	<p><?php echo " You re logged in from ".$this->session->userdata('email'); ?></p>
<?php else: ?>
	<p><?php echo " You re logged in as a Guest ";  ?></p>
<?php endif; ?>
 <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
 Click Here
 </button>

<div class="collapse" id="collapseExample">
<br>
<?php $attributes = array('id'=>'note_form', 'class'=>'form-horizontal') ?>
<?php echo validation_errors("<p class='bg-danger'>"); ?>	
<?php echo form_open('notes/create', $attributes); ?>
<div class="form-group">
<?php echo form_label('Note Title'); ?>
<?php $data = array(
	'class' => 'form-control',
	'name' => 'note_title',
	'placeholder' => 'Enter Title'
); ?>
<?php echo form_input($data); ?>
</div>
<div class="form-group">
<?php echo form_label('Note Description'); ?>
<?php $data = array(
	'class' => 'form-control',
	'name' => 'note_body',
	'placeholder' => 'Enter Description'
); ?>
<?php echo form_textarea($data); ?>
</div>
<div class="form-group">
<?php $data = array(
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Create'
); ?>
<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>
</div>
</div>
</div>
