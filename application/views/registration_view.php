<div class="sign-up">
<h1 class="sign-up-title">Registration</h1>

 <?php echo validation_errors('<p class="error">'); ?>
 <?php echo form_open("user/registration"); ?>
  
  <input placeholder="Set Username" type="text" class="sign-up-input" name="user_name" value="<?php echo set_value('user_name'); ?>" />
  
  <input placeholder="Put Your Email" type="text" class="sign-up-input" name="email_address" value="<?php echo set_value('email_address'); ?>" />
  
  <input placeholder="Set Password"type="password" class="sign-up-input" name="password" value="<?php echo set_value('password'); ?>" />
  
  <input placeholder="Repeat Password"type="password" class="sign-up-input" name="con_password" value="<?php echo set_value('con_password'); ?>" />
  
  <input type="submit" class="sign-up-button" value="Submit" />
  
 <?php echo form_close(); ?>
</div>
<br>
<br>
<div class="membr" align="center">

    <span class="label label-primary"><?php echo anchor('user/indexx', 'Chit Chat'); ?></span>
    <span class="label label-success"><?php echo anchor('user/show_student_id', 'Adm. Chit Chat'); ?></span>
    <span class="label label-info"><?php echo anchor('user/welcome1', 'Dasbor'); ?></span>
    <span class="label label-warning"><?php echo anchor('user/index', 'Home'); ?></span>
    <span class="label label-danger"><?php echo anchor('user/logout', 'Logout'); ?></span>

  </div>
<br>
<div align="center" class="cr">&copy; 2014 <a href="http://raliyarmdn.com/">Ira Eliya Rahmadhani</a> All Rights Reserved.</div>