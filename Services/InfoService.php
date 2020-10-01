<?php

namespace Modules\AppendProductStock\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;
use Modules\Portal\Services\Validation\Data\InfoValidationsService;
use Exception;


class InfoService extends InfoValidationService
{


	public function rule($data, $index, $columns)
	{
		$fields_available = $this->fieldsAvailable(collect($data)->keys());
		$fields_date_delivery = $this->fieldsDateDelivery(collect($data)->keys());
		//$fields_date_delivery = $this->fieldsDateDelivery($data);

		$rules = collect([]);

		foreach ($fields_available as $field) {
			$rules->put($field, 'integer|min:0');
		}
		foreach ($fields_date_delivery as $field) {
			$rules->put($field, 'date');
		}

		return $rules;
		
		/*return [
			'available' => 'integer|min:0',
			'date_delivery' => 'date',
		];*/
	}

	public function modifiers()
	{
		/*return  [
			['rule' => ['date_delivery' => 'required|date_format:d/m/Y'], 'filter' => 'dateDMY'],
			['rule' => ['date_delivery' => 'required|date_format:j/n/Y'], 'filter' => 'dateDMY'],
		];*/
	}

	public function columnsFormat($header)
	{
		$fields_date_delivery = $this->fieldsDateDelivery($header);

		$columns_date = collect([]);
		foreach ($fields_date_delivery as $field) {
			$columns_date->put($field, InfoValidationsService::DATE_FORMAT);
		}

		return $columns_date->toArray();

//		return  ['date_delivery_futuro' => InfoValidationsService::DATE_FORMAT];
	}

	private function fieldsAvailable($data){
		$fields = collect([]);
		foreach ($data as $field) {
			if(preg_match('/\b(available_\w*)\b/', $field)){
				$fields->push($field);
			}
		}
		return $fields;
	}

	private function fieldsDateDelivery($data){
		$fields = collect([]);
		foreach ($data as $field) {
			if(preg_match('/\b(date_delivery_\w*)\b/', $field)){
				$fields->push($field);
			}
		}
		return $fields;
	}

}



/*
<?php

namespace Modules\AppendPriceListProduct\Services; 


use Modules\Portal\Services\Validation\Data\InfoValidationService;


class InfoService extends InfoValidationService
{

 
	public function rule($data, $index, $columns)
	{
		$fields = $this->fieldsPricePerQty($data);

		$rules = [];
		foreach ($fields as $field) {
			$rules[$field] = 'numeric|min:0|regex:/^\d+(\.\d{1,2})?$/'; 
		}

		return $rules;
	}

	public function modifiers()
	{
		$fields = $this->fieldsPricePerQty($data);

		$filters = collect([]);
		foreach ($fields as $field) {
			$filters->push(['rule' => [$field => ['required', 'regex:/^(R\$)?( )?([1-9]{1}[\d]{0,2}(\.[\d]{3})*(\,[\d]{0,2})?|[1-9]{1}[\d]{0,}(\,[\d]{0,2})?|0(\,[\d]{0,2})?|(\,[\d]{1,2})?)$/']], 'filter' => 'currencyFormat']);
		}

		return $filters;
	}

	private function fieldsPricePerQty($data){
		$fields = collect([]);
		foreach ($data as $field => $value) {
			if(preg_match('/\b(price_list_\w*)\b/', $field)){
				$fields->push($field);
			}
		}
		return $fields;
	}

	public function columnsFormat()
	{
		return  [];
	}

}*/