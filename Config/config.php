<?php

return [
	'name' => 'AppendProductStock', 
	'fields' => ['available', 'date_delivery'],
	'sample' => [
		[
			'name' => 'available',
			'observation' => 'Quantidade disponibilizada de produtos para geração de pedidos.',
			'sample_1' => '500',
			'filled' => false
		], 
		[
			'name' => 'date_delivery',
			'observation' => 'Data aproximada em que o produto será entregue.',
			'sample_1' => '25/12/2020',
			'filled' => false
		]
	]
];
