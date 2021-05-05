<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionesTable extends Migration {

	private $tableName = 'direcciones';

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create($this->tableName, function(Blueprint $table)
		{
			$table->bigInteger('id', true);
			$table->string('calle', 100)->nullable();
			$table->string('numero', 6)->nullable();
			$table->string('depto', 20)->nullable();
			$table->bigInteger('id_comuna');
			$table->string('referencia',100)->nullable();
			$table->string('codigo_postal',10)->nullable();
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
