<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			
			$table->increments('id_usuario');
			$table->string('slug')->default('');
			$table->string('password', 60);
			$table->string('nombre' , 100)->default('');
			$table->string('apellidos', 100)->default('');
			$table->string('direccion', 100)->default('');
			$table->string('telefono', 100)->default('');
			$table->string('email', 100)->unique();
			$table->boolean('admin')->default(false);
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
		Schema::drop('usuarios');
	}

}
