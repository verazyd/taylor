<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddIsPublishedToVictoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('victories', function(Blueprint $table)
		{
			$table->boolean('is_published');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('victories', function(Blueprint $table)
		{
			$table->dropColumn('is_published');
		});
	}

}
