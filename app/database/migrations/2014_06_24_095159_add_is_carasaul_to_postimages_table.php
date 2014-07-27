<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddIsCarasaulToPostimagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('postimages', function(Blueprint $table)
		{
			$table->boolean('is_carasaul');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('postimages', function(Blueprint $table)
		{
			$table->dropColumn('is_carasaul');
		});
	}

}
