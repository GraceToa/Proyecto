<?php

use app\Usuario;
use app\Animal;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApadrinasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('apadrinas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('slug')->default('');
			//$table->integer('id_animal');
			//$table->integer('id_usuario');
			$table->timestamps();

			$table->integer('id_animal')->unsigned()->index();
			$table->foreign ('id_animal')->references ('id_animal')->on('animals')->onUpdate ('CASCADE')->onDelete('CASCADE');

			$table->integer('id_usuario')->unsigned()->index();
			$table->foreign ('id_usuario')->references ('id_usuario')->on('usuarios')->onUpdate ('CASCADE')->onDelete  ('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('apadrinas');
	}

}
