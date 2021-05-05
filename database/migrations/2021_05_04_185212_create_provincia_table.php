<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProvinciaTable extends Migration {

	private $tableName = 'provincias';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table)
		{
			$table->bigInteger('id_provincia', true);
			$table->string('provincia', 256);
			$table->bigInteger('id_region')->index('idx_16404_id_region');
			$table->string('codigo', 12);
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
