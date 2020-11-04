<?php  


	function amader_soronio_meta_box(){


		$pbox = new_cmb2_box([
			'title'				=> 'sidebar Box',
			'id'				=> 'ssbb',
			'object_types'		=> ['page']
		]);


		$pbox -> add_field([
			'name'			=> 'Sidebar Position',
			'type'			=> 'select',
			'id'			=> 'zItaly-sp',
			'options'		=> [
				'right'		=> 'Right',
				'left'		=> 'Left',
				'full'		=> 'Full Width',
			],
			'default'		=> 'full'
		]);






		$food_menu = new_cmb2_box([
			'title'			=> 'Food Menu Box',
			'id'			=> 'zitaly_food_box',
			'object_types'	=> ['zitaly-menu']
		]);

		$food_menu -> add_field([
			'name'			=> 'Food Photo',
			'type'			=> 'file',
			'id'			=> 'food-photo-p'
		]);

		$food_menu -> add_field([
			'name'			=> 'Food Min Price',
			'type'			=> 'text_money',
			'id'			=> 'food-price-min',
			'before_field'	=> '৳'
		]);

		$food_menu -> add_field([
			'name'			=> 'Food Max Price',
			'type'			=> 'text_money',
			'id'			=> 'food-price-max',
			'before_field'	=> '৳'
		]);

		$food_menu -> add_field([
			'name'			=> 'Food Price Currency',
			'type'			=> 'select',
			'id'			=> 'food-price-curr',
			'options'		=> [
				'$'			=> '$',
				'৳'			=> '৳',
				'£'			=> '£',
				'€'			=> '€'
			],
			'default'		=> '৳',

		]);







		

	}
	add_action('cmb2_init','amader_soronio_meta_box');















?>