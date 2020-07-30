<?php

namespace Modules\AppendProductStock\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		return [
			'available' => 'integer|min:0',
			'date_delivery' => 'date',
		];
	}

	public function modifiers()
	{
		return  [
			['rule' => ['date_delivery' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
		];
	}

	public function columnsFormat()
	{
		return  ['date_delivery' => InfoValidationsService::DATE_FORMAT];
	}

}
