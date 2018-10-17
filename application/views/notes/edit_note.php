
<div class="row">	
<div class="offset-md-3 col-md-6">

<h2>Edit Note</h2>
<br>
<?php $attributes = array('id'=>'note_form', 'class'=>'form-horizontal') ?>
<?php echo validation_errors("<p class='bg-danger'>"); ?>	
<?php echo form_open('notes/edit/'.$note_data->id, $attributes); ?>
<div class="form-group">
<?php echo form_label('Note Title'); ?>
<?php $data = array(
	'class' => 'form-control',
	'name' => 'note_title',
	'value' => $note_data->note_title
); ?>
<?php echo form_input($data); ?>
</div>
<div class="form-group">
<?php echo form_label('Note Description'); ?>
<?php $data = array(
	'class' => 'form-control',
	'name' => 'note_body',
	'value' => $note_data->note_body
); ?>
<?php echo form_textarea($data); ?>
</div>
<div class="form-group">
<?php $data = array(
	'class' => 'btn btn-primary',
	'name' => 'submit',
	'value' => 'Update'
); ?>
<?php echo form_submit($data); ?>
</div>
<?php echo form_close(); ?>

</div>
</div>