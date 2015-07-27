<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');?>

<div id="main_content">

<?php echo  form_open_multipart('album_ws/upload_image')?>

<input type="file" name="userfile" />

<p><input type="submit" name="submit" value="submit" /></p>

<?php echo form_close();?>

</div>