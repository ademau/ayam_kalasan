<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKarirTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tbl_karir', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('judul', 100);
			$table->longText('dekripsi');
			$table->string('gambar', 100);
			$table->string('pelaku', 30);
			$table->timestamp('awal_promo');
			$table->timestamp('akhir_promo');

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
		Schema::drop('tbl_karir');
	}

}
