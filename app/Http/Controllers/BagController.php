<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\ModelsFiles\Bag;

class BagController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return view('Files.bag.create');
	}

	public function store(Request $request)
	{
		//

		$data = $request->all();

		$data['user'] = \Auth::User()->id;
	  
	  
		$rules = array(
			'bag' => 'required'            
		);

		$validar = \Validator::make($data, $rules);

		if ($validar->fails())
		{
			return redirect()->back()
				->withErrors($validar->errors())
				->withInput($request->all());
		}

		$bag = Bag::create($data);
		$bag->save();

		Session::flash('status', '¡ Bolsa:  ' .  $bag->bag  .' Guardado con éxito!');

		return redirect()->route('new.bag');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Request  $request
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}
