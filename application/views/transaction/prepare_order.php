<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');?>

<div class="mdl-card mdl-shadow--2dp mdl-cell--12-col">
	<div class="mdl-card__title mdl-card--expand">
		<h2 class="mdl-card__title-text">Prepare Order</h2>
	</div>
	<div class="mdl-card__supporting-text">Order No.: Create Date:</div>
	<div class="mdl-card__actions mdl-card--border">
		<table
			class="mdl-data-table mdl-js-data-table mdl-shadow--2dp mdl-cell--12-col">
			<thead>
				<tr>
					<th class="mdl-data-table__cell--non-numeric">Photo</th>
					<th class="mdl-data-table__cell--non-numeric">Photo Size</th>
					<th>Quantity</th>
					<th>Unit price</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="mdl-data-table__cell--non-numeric"><img alt=""
						src="http://127.0.0.1:8080/picup/asset/images/user.jpg" width="40"
						height="40"></td>
					<td class="mdl-data-table__cell--non-numeric"><select>
							<option>4x6</option>
							<option>1x1</option>
							<option>2x2</option>
					</select></td>
					<td><input id="sample2" /></td>
					</div>
					</td>
					<td>2.90</td>
				</tr>
				<tr>
					<td class="mdl-data-table__cell--non-numeric"><img alt=""
						src="http://127.0.0.1:8080/picup/asset/images/user.jpg" width="40"
						height="40"></td>
					<td class="mdl-data-table__cell--non-numeric"><select>
							<option>4x6</option>
							<option>1x1</option>
							<option>2x2</option>
					</select></td>
					<td><input id="sample2" /></td>
					<td>2.90</td>
				</tr>
				<tr>
					<td colspan=2></td>
					<td>Total</td>
					<td>5.80</td>
				</tr>
				<tr>
					<td colspan=2></td>
					<td>Discount</td>
					<td>-0.00</td>
				</tr>
				<tr>
					<td colspan=2></td>
					<td>Grand Total</td>
					<td>5.80</td>
				</tr>
				<tr>
					<td colspan=2></td>
					<td><a
						class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
							Confirm </a></td>
					<td><a href="<?php echo base_url(); ?>index.php/gallery/"
						class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
							Cancel </a></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

