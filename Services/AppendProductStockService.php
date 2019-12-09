<?php

namespace Modules\AppendProductStock\Services;


class AppendProductStockService {
	
	public function fields(){
		return config('appendproductstock.fields');
	}

	public function sample(){
		return config('appendproductstock.sample');
	}

}
