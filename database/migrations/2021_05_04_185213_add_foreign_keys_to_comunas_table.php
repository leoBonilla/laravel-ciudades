<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToComunasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('comunas', function(Blueprint $table)
		{
			$table->foreign('id_provincia', 'provincias_restrict')->references('id_provincia')->on('provincias')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('id_region', 'region_restrict')->references('id_region')->on('regiones')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('comunas', function(Blueprint $table)
		{
			$table->dropForeign('provincias_restrict');
			$table->dropForeign('region_restrict');
		});
	}

}
