<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="mdl-grid demo-content">
	<div class="mdl-card mdl-shadow--2dp mdl-cell--12-col demo-card-wide">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text"><?php echo $gallery_name; ?></h2>
		</div>
		<div class="mdl-card__supporting-text"><?php echo $gallery_desc; ?></div>
		<div class="mdl-card__menu">
			<a  href="<?php echo base_url(); ?>index.php/gallery/prepare/"
				id="menu-shopping"
				class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
				title="Order to print">
				<i class="material-icons">add_shopping_cart</i>
			</a>

			<a id="menu-download"
				class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
				title="Download all photos">
				<i class="material-icons">get_app</i>
			</a>
		</div>
		<div class="mdl-card__actions mdl-card--border">
			<a
				class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				Add Photo </a> <a
				class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				Remove Photo </a>
				<a
				class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				Select All </a>
				<a
				class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				Deselect All </a>
		</div>

	</div>
	
	<div class="demo-grid-2 mdl-grid">		
		<?php for($i=0;$i<30;$i++){ ?>
			<div class="mdl-cell mdl-cell--2-col">
			<label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect"
				for="checkbox-<?php echo $i; ?>"> <input type="checkbox" id="checkbox-<?php echo $i; ?>"
				class="mdl-checkbox__input" /> 
				<!-- <span
				class="mdl-checkbox__label"><?php echo $i; ?></span>
				 -->
			</label>
			 <img alt=""
				src="http://127.0.0.1:8080/picup/asset/images/user.jpg">
		</div>
		<?php } ?>		
	</div>
</div>
