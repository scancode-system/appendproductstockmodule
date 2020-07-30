<?php

namespace Modules\AppendProductStock\Validator; 


class AppendProductStockValidator
{

	public $date_columns = ['date_delivery'];
	public $string_columns = [];


	public function rule($data){
		return [
			'available' => 'integer|min:0',
			'date_delivery' => 'date',
		];
	}

	public function filterRules($data){
		return [
			['rule' => ['date_delivery' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
		];
	}


}
