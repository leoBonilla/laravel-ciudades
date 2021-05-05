<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateComunasTable extends Migration {

	private $tableName ='comunas';
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table)
		{
			$table->bigInteger('id_comuna', true);
			$table->string('comuna', 45)->nullable();
			$table->bigInteger('id_region')->index('idx_16392_id_region');
			$table->bigInteger('id_provincia')->index('idx_16392_id_provincia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop($this->tableName);
	}

}
