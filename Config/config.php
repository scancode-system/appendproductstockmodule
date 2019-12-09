<?php

return [
    'name' => 'AppendProductStock', 
    'fields' => ['available', 'date_delivery'],
	'sample' => [
		[
			'name' => 'available',
			'observation' => 'Quantidade disponibilizada de produtos para geração de pedidos.',
			'filled' => false
		], 
		[
			'name' => 'date_delivery',
			'observation' => 'Data aproximada em que o produto será entregue.',
			'filled' => false
		]
	]
];
  