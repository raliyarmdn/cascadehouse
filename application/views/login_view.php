<br>
<div class="membr" align="center">
<span class="label label-danger"><?php echo anchor('user/index', 'Go Back'); ?></span>
</div>
<div class="sign-up">
  <h1 class="sign-up-title">Log in</h1>
 <?php echo form_open("user/login"); ?>
  <input type="text" class="sign-up-input" placeholder="What's your email?" name="email" autofocus>
  <input type="password" class="sign-up-input" placeholder="What's your password?" name="pass">
  <input type="submit" value="Log me in!" class="sign-up-button">
 <?php echo form_close(); ?>

</div>
<br>
<div align="center" class="cr">&copy; 2014 <a href="http://raliyarmdn.com/">Ira Eliya Rahmadhani</a> All Rights Reserved.</div>
