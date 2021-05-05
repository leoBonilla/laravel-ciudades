<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProvinciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('provincias', function(Blueprint $table)
		{
			$table->foreign('id_region', 'regiones_prov_restrict')->references('id_region')->on('regiones')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('provincias', function(Blueprint $table)
		{
			$table->dropForeign('regiones_prov_restrict');
		});
	}

}
