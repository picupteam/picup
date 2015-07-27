<form action="<?php echo base_url(); ?>index.php/user/dologin"
	method="post">

	Username: <input type="text" name="username" id="username" value=""
		class="input_text" placeholder="Enter Username..." /> Password: <input
		type="password" name="password" id="password" value=""
		class="input_text" placeholder="Enter Password..." />

	<div class="ui-block-b">
		<button type="submit" data-theme="b">Sign In</button>
	</div>
	<div class="ui-block-a">
		<button type="button" data-theme="c">Create New Account</button>
	</div>
</form>
