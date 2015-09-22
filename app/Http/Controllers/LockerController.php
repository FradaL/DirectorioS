<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Session;
use App\ModelsFiles\Locker;

class LockerController extends Controller
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
        return view('Files.locker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();

        $data['user'] = \Auth::User()->id;
      
      
        $rules = array(
            'locker' => 'required'            
        );

        $validar = \Validator::make($data, $rules);

        if ($validar->fails())
        {
            return redirect()->back()
                ->withErrors($validar->errors())
                ->withInput($request->all());
        }

        $locker = Locker::create($data);
        $locker->save();

        Session::flash('status', '¡ Casillero:  ' .  $locker->locker  .' Guardado con éxito!');

        return redirect()->route('new.locker');
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
