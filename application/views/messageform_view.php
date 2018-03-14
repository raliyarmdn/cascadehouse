<div id="content">
<div class="membr" align="center">

    <span class="label label-primary"><?php echo anchor('user/welcome', 'Back'); ?></span>
    <span class="label label-warning"><a href="http://localhost/ci/">home</a></span>
    <span class="label label-danger"><?php echo anchor('user/logout', 'Logout'); ?></span>

  </div>

<?php $this->load->helper('form'); ?>
  	<div class="message_form">
        <h2>Got Something to say, <?php echo $this->session->userdata('username'); ?>?</h2>
		<?php echo form_open("user/insert_message"); ?>
		<div class="name_field">
        <label for="name">Name: </label>
        <input type="text" name="name" id="name" value="<?php echo $this->session->userdata('username'); ?>" size="30" />
		</div>

		<div class="message_field">
        <label for="message">Message: </label>
        <textarea name="message" id="message" value="" cols="50" rows="4"></textarea>
	    </div>
        <p>
        <input type="submit" value="Submit" />
		</p>
		<?php echo form_close(); ?>
    </div>
<?php
foreach($query as $row)
{
?>
  	<div class="message_show">
    <p>
    	<?php echo $row->name; ?>: Says
    </p>
    <p>
       	<?php echo $row->message; ?>
    </p>
    </div>
   
<?php
}
?>
</div><!--<div id="content">-->