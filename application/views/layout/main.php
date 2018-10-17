<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
	
	<!-- WYSIWYG text editor -->
  	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  	<script>tinymce.init({ selector:'textarea' });</script>
	
</head>
<body class="body-info">		
	<?php $this->view('layout/navbar'); ?>
	<div class="container">		
		<div class="row">			
			<div class="col-xl-12">
				<?php $this->view('message_view.php'); ?>
				<?php $this->view($main_view); ?>
			</div>
		</div>
	</div>	
</body>
</html>