<?php

namespace Modules\AppendProductStock\Validator; 


class AppendProductStockValidator
{


	public function rule($data){
		return [
			'available' => 'integer|min:0',
			'date_delivery' => 'string|date_format:Y-m-d',
		];
	}

	public function filterRules($data){
		return [
			['rule' => ['date_delivery' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
		];
	}


}
