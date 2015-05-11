<?php

use app\Usuario;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('animals', function(Blueprint $table)
		{
			$table->increments('id_animal');
			$table->string('slug')->default('');
			$table->string('nombre' , 100)->default('');
			$table->string('tipo' , 100)->default('');
			$table->string('raza' , 100)->default('');
			$table->string('edad' , 100)->default('');
			$table->string('estado' ,100)->default('');
			$table->string('sexo' , 100)->default('');
			$table->string('color' , 100)->default('');
			$table->string('tamaño' , 100)->default('');
			$table->string('entrada' , 100)->default('');
			$table->binary('foto1' );
			$table->binary('foto2' );
			//$table->integer('id_usuario_adop');
			$table->longText('descripcion')->default('');
			$table->timestamps();

			$table->integer('id_usuario_adop')->unsigned()->index();
			$table->foreign ('id_usuario_adop')->references('id_usuario')->on('usuarios')->onUpdate('CASCADE')->onDelete  ('CASCADE');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('animals');
	}

}
