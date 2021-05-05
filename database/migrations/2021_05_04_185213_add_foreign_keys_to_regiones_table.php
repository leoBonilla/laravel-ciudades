<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRegionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('regiones', function(Blueprint $table)
		{
			$table->foreign('id_zona', 'zonas_restric')->references('id_zona')->on('zonas')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('regiones', function(Blueprint $table)
		{
			$table->dropForeign('zonas_restric');
		});
	}

}
