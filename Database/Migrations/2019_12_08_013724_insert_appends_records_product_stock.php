<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation; 
use Modules\Portal\Entities\Append; 


class InsertAppendsRecordsProductStock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $validation = Validation::where('module_name', 'ValidationProduct')->first();
        Append::create(['validation_id' => $validation->id, 'module' => 'AppendProductStock', 'alias' => 'Estoque Simples']);
    }
 
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        (Append::where('module', 'AppendProductStock')->first())->delete();
    }
}
