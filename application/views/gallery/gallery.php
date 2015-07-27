<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="mdl-grid demo-content">
	<!-- <div
		class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
		Gallery</div>
	 -->
	<?php for($i=0;$i<10;$i++){ ?> 
	<div
		class="gallery-cards mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet mdl-grid mdl-grid--no-spacing">
		<div
			class="demo-updates mdl-card mdl-shadow--2dp mdl-cell mdl-cell--4-col mdl-cell--4-col-tablet mdl-cell--12-col-desktop">
			<div class="mdl-card__title mdl-card--expand mdl-color--teal-300">
				<h2 class="mdl-card__title-text">Gallery Name (5)</h2>
			</div>
			<div class="mdl-card__supporting-text mdl-color-text--grey-600">Create
				on 11/07/2015</div>
			<div class="mdl-card__actions mdl-card--border">
				<a href="<?php echo base_url(); ?>index.php/gallery/view/"
					class="mdl-button mdl-js-button mdl-js-ripple-effect">View Photos</a>
			</div>
			<div class="mdl-card__menu">
				<a id="menu-add-photo"
					class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
					title="Add photo"> <i class="material-icons">insert_photo </i>
				</a> <a href="<?php echo base_url(); ?>index.php/gallery/prepare/"
					id="menu-shopping"
					class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
					title="Order to print"> <i class="material-icons">add_shopping_cart</i>
				</a> <a id="menu-download"
					class="mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect"
					title="Download all photos"> <i class="material-icons">get_app</i>
				</a>
			</div>
		</div>
	</div>
	<?php } ?> 
	
</div>
<a href="#" id="view-source"
	class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast">Add
	Gallery</a>

<!-- Dialog create gallery -->	
<div id="dialog-create" title="Create gallery">
  <p class="validateTips">All form fields are required.</p>
 <form>
    <fieldset>
      <label for="name">Name</label>
      <input type="text" name="gallery_name" id="gallery_name" value="" class="text ui-widget-content ui-corner-all">
      <br>
      <label for="description">Description</label>
      <input type="text" name="gallery_desc" id="gallery_desc" value="" class="text ui-widget-content ui-corner-all">
      
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type="submit" tabindex="-1" style="position:absolute; top:-1000px">
    </fieldset>
  </form>
</div>