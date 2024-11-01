<?php
if ( ! defined( 'ABSPATH' ) ) exit;

    $ceiling = array(
		'fix' => '0',	
		'hole' => '1',
		'course' => '80',
		'currency' => 'руб.',
		'width' => 'Ширина',
		'text_long' => 'Длина',
		'type' => 'Тип потолка',
		'quantity' => 'количество отверстий',
		'add' => 'Добавить потолок',
		'calc' => 'Рассчитать',
		'text_calc' => 'Стоимость',
		'text_call' => 'Вызвать специалиста'
		
		);
	add_option('ceiling', $ceiling);
	
	$ceiling_name = array(
		'0' => 'Standart'
		);
	add_option('ceiling_name', $ceiling_name);
	
	$ceiling_price_sq = array(
		'0' => '10'
		);
	add_option('ceiling_price_sq', $ceiling_price_sq);
	
	$ceiling_price_pl = array(
		'0' => '2'
		);
	add_option('ceiling_price_pl', $ceiling_price_pl);
	