<?php if ( ! defined( 'ABSPATH' ) ) exit; ?>
<?php $options = get_option('ceiling'); ?>


<div class="wpcalc" >
<div class="wpcalc-col" id="frends">
</div>

<div class="wpcalc-col">
<div class="wpcalc-col-4"><input onclick="ac_addRow();" id="add_button" type="button" value="<?php echo $options['add']; ?>" disabled/></div>
<div class="wpcalc-col-4"><input type="text" id="kolvo" placeholder="<?php echo $options['quantity']; ?>" onkeyup="ac_change();"></div>
<div class="wpcalc-col-4"></div>
</div>

<div class="wpcalc-col">
<div class="wpcalc-col-4"></div>
<div class="wpcalc-col-4"><center><input onclick="ac_calcAll();" id="calc_button" type="button" value="<?php echo $options['calc']; ?>" disabled/></center></div>
<div class="wpcalc-col-4"></div>
</div>

<div id="ac_result"></div>


<div id="selceil" style="display:none;">
<?php 
$options_name = get_option('ceiling_name');
$options_price_sq = get_option('ceiling_price_sq');
$options_price_pl = get_option('ceiling_price_pl');
$count_name = count($options_name);
for ($i = 0; $i < $count_name; $i++){
		$text = '<option value="'.$options_price_sq[$i].':'.$options_price_pl[$i].'">'.$options_name[$i].'</option>';
		echo $text;
	}

?>
</div>



</div>