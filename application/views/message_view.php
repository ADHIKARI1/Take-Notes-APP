<p class="bg-success">
	<?php if($this->session->flashdata('success')): ?>
		<?php //echo $this->session->flashdata('success'); ?>
	<?php endif; ?>
</p>
<p class="bg-danger">
	<?php if($this->session->flashdata('failed')): ?>
		<?php //echo $this->session->flashdata('failed'); ?>
	<?php endif; ?>
</p>


<?php if($this->session->flashdata('success')): ?>

<!-- start-model -->
<div class="modal fade" id="success" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Take Notes</h4>
        </div>
        <div class="modal-body">
          <p><?php echo $this->session->flashdata('success'); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>        
        </div>
        </div>
    </div>
</div>
<!-- end-model -->

<?php endif; ?>

<?php if($this->session->flashdata('failed')): ?>

<!-- start-model -->
<div class="modal fade" id="failed" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Take Notes</h4>
        </div>
        <div class="modal-body">
          <p><?php echo $this->session->flashdata('failed'); ?></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">ok</button>        
        </div>
        </div>
    </div>
</div>
<!-- end-model -->

<?php endif; ?>