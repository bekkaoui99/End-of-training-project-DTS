<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style4.css">
     <title>Login Form</title>
    
</head>
<body>

    
          
          <div class="box">
          
               <?php 
               $attributes = array(
               	"class" => "form-horizontal", 
               	"id" => "loginform", 
               	"name" => "loginform"
               	);
               echo form_open("login", $attributes);?> 
               <fieldset  >
                    <h1>Login</h1>
                   
                         
                    
                         <input class="form-control" id="txt_username" name="txt_username" autocomplete="off"  placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                         <span class="msg"><?php echo form_error('txt_username'); ?></span>
                   
                    
                    
                 
                    
                         <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                         <span class="msg"><?php echo form_error('txt_password'); ?></span>
                   
                                   
                   
                         <input id="btn_login" name="btn_login" type="submit"  value="Login" />
                         <input id="btn_cancel" name="btn_cancel" type="reset"  value="Cancel" />
                    
               <?php echo form_close(); ?>
         <div class="msg">
               <?php echo $this->session->flashdata('msg'); ?>
          </div>
              </div>   
         
         
 
  
     
</body>
</html>