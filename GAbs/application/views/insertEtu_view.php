<!DOCTYPE html>
<html>
<head>
    <title>Creation d'un compte stagiaire</title>
	<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style2.css">
</head>
<body>
	<div class="container">

	<!-- header -->
	<?php $this->load->view('include/header_view'); ?>
	
	<!-- navbar -->
	<?php $this->load->view('include/navbar_view'); ?>

	<div class="row">
	    <div class="col-md-6 col-md-offset-3">
	        <?php echo $this->session->flashdata('verify_msg'); ?>
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-6 col-md-offset-3">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                <h4>Creation d'un compte stagiaire</h4>
	            </div>
	            <div class="panel-body">
	                <?php $attributes = array("name" => "insertEtuForm");
	                echo form_open("admin/insertEtu", $attributes);?> <!-- form_open_multipart("admin/insertEtu", $attributes); -->
	                
	                <div class="form-group">
	                    <label for="pseudo" style="color:black;">Pseudo *</label> <!-- Kant "name" f for -->
	                    <input class="form-control" name="pseudo" placeholder="Pseudo" type="text" value="<?php echo set_value('pseudo'); ?>" />
	                    <span class="text-danger"><?php echo form_error('pseudo'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="password" style="color:black;">Password *</label>
	                    <input class="form-control" name="password" placeholder="Password" type="password" />
	                    <span class="text-danger"><?php echo form_error('password'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="cpassword" style="color:black;">Confirm Password *</label>
	                    <input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" />
	                    <span class="text-danger"><?php echo form_error('cpassword'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="cne" style="color:black;">CNE *</label>
	                    <input class="form-control" name="cne" placeholder="CNE" type="text" value="<?php echo set_value('cne'); ?>" />
	                    <span class="text-danger"><?php echo form_error('cne'); ?></span>
	                </div>
					
					<div class="form-group">
	                    <label for="fname" style="color:black;">Prenom *</label>
	                    <input class="form-control" name="fname" placeholder="Prenom" type="text" value="<?php echo set_value('fname'); ?>" />
	                    <span class="text-danger"><?php echo form_error('fname'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="lname" style="color:black;">Nom *</label>
	                    <input class="form-control" name="lname" placeholder="Nom" type="text" value="<?php echo set_value('lname'); ?>" />
	                    <span class="text-danger"><?php echo form_error('lname'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="date_naiss" style="color:black;">Date Naissance</label>
	                    <input class="form-control" name="date_naiss" placeholder="Date Naissance" type="date" value="<?php echo set_value('date_naiss'); ?>" />
	                    <span class="text-danger"><?php echo form_error('date_naiss'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="ville_naiss" style="color:black;">Ville Naissance</label>
	                    <input class="form-control" name="ville_naiss" placeholder="Ville Naissance" type="text" value="<?php echo set_value('ville_naiss'); ?>" />
	                    <span class="text-danger"><?php echo form_error('ville_naiss'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="adrs" style="color:black;">Adresse</label>
	                    <input class="form-control" name="adrs" placeholder="Adresse" type="text" value="<?php echo set_value('adrs'); ?>" />
	                    <span class="text-danger"><?php echo form_error('adrs'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="ville" style="color:black;">Ville</label>
	                    <input class="form-control" name="ville" placeholder="Ville" type="text" value="<?php echo set_value('ville'); ?>" />
	                    <span class="text-danger"><?php echo form_error('ville'); ?></span>
	                </div>

	               

		            
	                
	                <div class="form-group">
	                    <label for="email" style="color:black;">Email *</label>
	                    <input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" />
	                    <span class="text-danger"><?php echo form_error('email'); ?></span>
	                </div>

	                <div class="form-group">
	                    <label for="phone" style="color:black;">Telephone</label>
	                    <input class="form-control" name="phone" placeholder="Telephone" type="text" value="<?php echo set_value('phone'); ?>" />
	                    <span class="text-danger"><?php echo form_error('phone'); ?></span>
	                </div>

	                <div class="form-group">
	                    <input name="submit" type="submit" class="btn btn-primary" value="Inserer" />
	                    <input name="cancel" type="reset" class="btn btn-default" value="Cancel" />
	                </div>
	                <?php echo form_close(); ?>
	                <?php echo $this->session->flashdata('msg'); ?>
	            </div>
	        </div>
	    </div>
	</div>
</div>

</body>
</html>