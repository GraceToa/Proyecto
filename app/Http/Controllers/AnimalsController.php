<?php namespace App\Http\Controllers;

use App\Animal;
use App\Usuario;
use App\Apadrina;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AnimalsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$animals = Animal::all();
		return view('animals.index', compact('animals'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('animals.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  Animal $animal	 * @return Response
	 */
	public function show(Animal $animal)
	{
		return view('animals.show', compact('animal'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  Animal $animal	 * @return Response
	 */
	public function edit(Animal $animal)
	{
		return view('animals.show', compact('animal'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  Animal $animal	 * @return Response
	 */
	public function update(Animal $animal)
	{
		return view('animals.show', compact('animal'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  Animal $animal	 * @return Response
	 */
	public function destroy(Animal $animal)
	{
		//
	}

}
