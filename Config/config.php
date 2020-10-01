<?php

return [
	'name' => 'AppendProductStock', 
	'fields' => ['available_atual', 'date_delivery_atual'],
	'sample' => [
		[
			'name' => 'available_atual',
			'observation' => 'Quantidade atual disponibilizada de produtos para geração de pedidos.',
			'sample_1' => '500',
			'filled' => false
		], 
		[
			'name' => 'date_delivery_atual',
			'observation' => 'Data aproximada atual em que o produto será entregue.',
			'sample_1' => '25/12/2020',
			'filled' => false
		],
		[
			'name' => 'available_futuro',
			'observation' => 'Quantidade futura disponibilizada de produtos para geração de pedidos.',
			'sample_1' => '500',
			'filled' => false
		], 
		[
			'name' => 'date_delivery_futuro',
			'observation' => 'Data futura aproximada em que o produto será entregue.',
			'sample_1' => '25/12/2020',
			'filled' => false
		]
	]
];
