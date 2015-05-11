<?php namespace App\Http\Controllers;

use App\Usuario;
use App\Apadrina;
use App\Animal;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApadrinasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$apadrinas = Apadrina::all();
		return view('apadrinas.index', compact('apadrinas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('apadrinas.create');
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
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Apadrina $apadrina)
	{
		return view('apadrinas.show', compact('apadrina'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Apadrina $apadrina)
	{
		return view('apadrinas.show', compact('apadrina'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Apadrina $apadrina)
	{
		return view('apadrinas.show', compact('apadrina'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Apadrina $apadrina)
	{
		//
	}

}
