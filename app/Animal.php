<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model {

	public function Usuarios(){
		return $this->hasMany('app\Usuario');
	}

}
