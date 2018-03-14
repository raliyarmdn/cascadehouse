<div class="content">
	<h2>Delete Data From Database Using CodeIgniter</h2>
	<p>Click On Name for Detail</p>
	<br>
	<br>
	<div class="membr" align="center">

	  	<span class="label label-primary"><?php echo anchor('user/indexx', 'Chit Chat'); ?></span>
	  	<span class="label label-success"><?php echo anchor('user/welcome1', 'Dasbor'); ?></span>
	  	<span class="label label-info"><?php echo anchor('user/viewregist', 'Registrasi Akun Baru'); ?></span>
		<span class="label label-warning"><?php echo anchor('user/index', 'Home'); ?></span>
		<span class="label label-danger"><?php echo anchor('user/logout', 'Logout'); ?></span>

	</div>
	<br>
	<br>
	<div class="row">

		<div class="col-md-2">
			
			<br>
			<!--====== Displaying Fetched Names from Database in Links ========-->
			<ol>
				<?php foreach ($students  as $message): ?>
				<li><a href="<?php echo base_url() . "index.php/user/show_student_id/" . $message->id; ?>"><?php echo $message->name; ?></a>
				</li><?php endforeach; ?>
			</ol>
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-9">
			<!--====== Displaying Fetched Details from Database ========-->
			<?php foreach ($single_student as $message): ?>
			<p>Comment Detail</p>
			<font size="5"><?php echo $message->name; ?></font><span>:</span><br>
			<?php echo $message->message; ?>
			<!--====== Delete Button ========-->
			<a href="<?php echo base_url() . "index.php/user/delete_student_id/" . $message->id; ?>">
			<br>
			<button id="delete">Delete</button></a>
			<?php endforeach; ?>
		</div>
	</div>
</div><!--<div class="content">-->