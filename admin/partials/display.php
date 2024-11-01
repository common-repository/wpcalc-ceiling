<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
 
 <script>
    
jQuery(document).ready(function(){
    totalRows = jQuery("#kolvo").val(); 
    
})    
function ac_addRow(){    
    Row=totalRows;
    totalRows++;
    jQuery("#param").append('<tr id="row['+Row+']"><td><input name="ceiling_name['+Row+']" value=""/></td><td><input type="number" step="0.01" name="ceiling_price_sq['+Row+']" value=""/><td><input type="number" step="0.01" name="ceiling_price_pl['+Row+']" value=""/></td></tr>')
}
function ac_delRow(){
    Rows=totalRows-1;
    jQuery("#name_row_"+Rows).remove();  
    jQuery("#price_sq_row_"+Rows).remove();
	jQuery("#price_pl_row_"+Rows).remove();
    totalRows--;
}
</script>

<form method="post" name="potolock_options" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php $options = get_option('ceiling'); ?> 
<?php $options_name = get_option('ceiling_name'); ?> 
<?php $options_price_sq = get_option('ceiling_price_sq'); ?>
<?php $options_price_pl = get_option('ceiling_price_pl'); ?>
<div style="width:10px;"></div>
<a href="http://wpcalc.com/" target="_blank"><img src="<?php echo plugins_url('knowhow-logo.png', __FILE__); ?>"></a>

<h2><?php esc_attr_e("Setting Ceiling Calculator", "wpcalc-ceiling") ?></h2>

<div style="padding:10px; background:#fff;">
<?php esc_attr_e("To integrate the calculator using shortcode", "wpcalc-ceiling") ?> <b>[wpcalc-ceiling]</b>. <?php esc_attr_e("If you have any questions, please contact ad@wpcalc.com. Our website", "wpcalc-ceiling") ?> - <a href="http://wpcalc.com/" target="_blank">wpcalc.com</a><p/>
<?php esc_attr_e("You can purchase the full version of the calculator with sending data to the e-mail", "wpcalc-ceiling") ?> <a href="http://wpcalc.com/en/stretch-ceiling-2/"> http://wpcalc.com/en/stretch-ceiling-2/</a>
</div>  
 

<div class="metabox-holder" id="poststuff">
<div class="meta-box-sortables">
<script>
jQuery(document).ready(function($) {
	$('.postbox').children('h3, .handlediv').click(function(){ $(this).siblings('.inside').toggle();});
	$('#wpfp-reset-statistics').click(function(){
		return confirm('All statistic data will be deleted, are you sure ?');
		});
});
</script>
<div class="postbox">
    <div title="Open/close" class="handlediv">
      <br>
    </div>
    <h3 class="hndle"><span><?php esc_attr_e("Setting Ceiling Calculator", "wpcalc-ceiling") ?></span></h3>
    <div class="inside" style="display: block;">
    <table>
	<tr>
	<th><?php esc_attr_e("Name ceiling", "wpcalc-ceiling") ?></th>
	<th><?php esc_attr_e("Price ceiling", "wpcalc-ceiling") ?><br/><?php esc_attr_e("per 1 sq.m.", "wpcalc-ceiling") ?> </th>
	<th><?php esc_attr_e("Cost of the plinth", "wpcalc-ceiling") ?><br/>  <?php esc_attr_e("per 1 m.", "wpcalc-ceiling") ?></th>
	</tr>
	<tbody id="param">
	<tr><td>
	<table>
	<?php 
	foreach($options_name as $key => $value) 
	{ 
     echo '<tr id="name_row_'.$key.'"><td><input name="ceiling_name['.$key.']" value="'.$value.'"/></td></tr>'; 
	 } 
	 ?>
	 </table></td>
	 <td>
	 <table>
	 <?php 
	 foreach($options_price_sq as $key => $value)
	 { 
     echo '<tr id="price_sq_row_'.$key.'"><td><input type="number" step="0.01" name="ceiling_price_sq['.$key.']" value="'.$value.'"/> </td></tr>'; 
	 } 
	 ?>
	 </table>
	 </td>
	 <td>
	 <table>
	 <?php 
	 foreach($options_price_pl as $key => $value)
	 { 
     echo '<tr id="price_pl_row_'.$key.'"><td><input type="number" step="0.01" name="ceiling_price_pl['.$key.']" value="'.$value.'"/> </td></tr>'; 
	 } 
	 ?>
	 </table>
	 </td>
</tr>
</tbody>

<tr><td colspan=3><center><input type="button" onclick="ac_addRow();" value="Add"/> <input type="button" onclick="ac_delRow();" value="Delete"/></center></td></tr>
  
    </table>
	
<table>
<tr>
	<th><?php esc_attr_e("Parameter", "wpcalc-ceiling") ?></th>
	<th><?php esc_attr_e("Value", "wpcalc-ceiling") ?></th>
</tr>
<tr>
	<td><?php esc_attr_e("Fixed costs", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[fix]" value="<?php echo ( $options['fix'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Cost of hole", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[hole]" value="<?php echo ( $options['hole'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Course", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[course]" value="<?php echo ( $options['course'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Currency", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[currency]" value="<?php echo ( $options['currency'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Text in the field Width", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[width]" value="<?php echo ( $options['width'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Text in the field Long", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[text_long]" value="<?php echo ( $options['text_long'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Text in the field Type ceiling", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[type]" value="<?php echo ( $options['type'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Text in the field Number of holes", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[quantity]" value="<?php echo ( $options['quantity'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Text button Add ceiling", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[add]" value="<?php echo ( $options['add'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("Text button Calculate", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[calc]" value="<?php echo ( $options['calc'] ); ?>" /></td>
</tr>
<tr>
	<td><?php esc_attr_e("The text cost", "wpcalc-ceiling") ?></td>
	<td><input type="text" name="ceiling[text_calc]" value="<?php echo ( $options['text_calc'] ); ?>" /></td>
</tr>
	
	</table>
    </div>
</div>
    
<div class="wpcmfadmintext">
Wordpress Plugins from WpCalc.com
<iframe src="http://wpcalc.com/plug/" width="100%" height="500px;"></iframe>
</div>
    
<input type="hidden" name="kolvo" id="kolvo" value="<?php echo count($options_name);?>"/>

<input type="hidden" name="action" value="update" />
<input type="hidden" name="page_options" value="ceiling,ceiling_name,ceiling_price_sq,ceiling_price_pl" />
<p class="submit"><input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" /></p>
</form>
</div>
</div>

