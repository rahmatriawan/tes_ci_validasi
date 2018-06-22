<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CodeIgniter Tes</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<style type="text/css">
		label{
			margin-top:7px;
		}
		.alert{
			margin-top:20px;
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<h1 class="page-header text-center">CodeIgniter Tes</h1>
		<div class="col-sm-6 col-sm-offset-3">
			<?php
		    	if(validation_errors()){
		    		?>
		    		<div class="alert alert-danger text-center">
		    			<?php echo validation_errors(); ?>
		    		</div>
		    		<?php
		    	}

				if($this->session->flashdata('success')){
					?>
					<div class="alert alert-success text-center">
						<span class="glyphicon glyphicon-check"></span> <?php echo $this->session->flashdata('success'); ?>
					</div>
					<?php
				}	
		    ?>
			<div class="well">
				<form method="POST" name="validation" action="<?php echo base_url(); ?>index.php/form/validate">
					<div class="form-group row">
						<div class="col-sm-2">
							<label class="text-center">Name:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo set_value('name'); ?>" name="name">
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-2">
							<label class="text-center">Email:</label>
						</div>
						<div class="col-sm-10">
							<input type="text" class="form-control" value="<?php echo set_value('email'); ?>" name="email">
						</div>
					</div>
					
					<div class="form-group row">
						<div class="col-sm-2">
							<label class="text-center">Borndate:</label>
						</div>
						<div class="col-sm-10">
							<input type="date" class="form-control" value="<?php echo set_value('borndate'); ?>" name="borndate">
						</div>
					</div>
					
					<hr>
					<button type="submit" class="btn btn-success">Validate</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>