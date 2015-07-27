<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<div id="main_content">
<form action="<?php echo base_url(); ?>index.php/albums/do_create_album"
	method="post">

	Album Name: <input type="text" id="album_name" name="album_name" value="" />
	<br />
	Album Description: <input type="text" id="album_detail" name="album_detail" max="5" value="" />
	<input type="hidden" id="album_code" name="album_code"  value="<?php echo $album_code;?>" />	
	<div class="ui-block-b">
		<button type="submit" data-theme="b">Create</button>
	</div>
</form>
	
</div>
