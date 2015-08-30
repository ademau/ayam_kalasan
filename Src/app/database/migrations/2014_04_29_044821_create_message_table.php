<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_pesan', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nama', 100);
			$table->string('tlp', 15);
			$table->string('email', 100);
			$table->string('alamat', 200);
			$table->string('kota', 50);
			$table->string('postal', 10);
			$table->string('Negara', 100);
			$table->longText('pesan');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
