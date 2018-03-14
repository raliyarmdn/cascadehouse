<div class="content">
  <h2>Welcome Back, <?php echo $this->session->userdata('username'); ?>!</h2>
  <p>This section represents the area that only <span style="color:red">ADMIN</span> can access.</p>

  <div class="membr" align="center">

  <span class="label label-primary"><?php echo anchor('user/indexx', 'Chit Chat'); ?></span>
  <span class="label label-success"><?php echo anchor('user/show_student_id', 'Adm. Chit Chat'); ?></span>
  <span class="label label-info"><?php echo anchor('user/viewregist', 'Registrasi Akun Baru'); ?></span>
	<span class="label label-warning"><?php echo anchor('user/index', 'Home'); ?></span>
	<span class="label label-danger"><?php echo anchor('user/logout', 'Logout'); ?></span>

  </div>
  	

  <br>
  <span style="text-align:left" class="cr">&copy; 2014 <a href="http://raliyarmdn.com/">Ira Eliya Rahmadhani</a> All Rights Reserved.</span>
</div><!--<div class="content">-->

