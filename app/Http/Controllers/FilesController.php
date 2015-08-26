<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

#Models
use App\ModelsFiles\Municipalitie;
use App\ModelsFiles\Year;
use App\ModelsFiles\Bag;
use App\ModelsFiles\Locker;
use App\ModelsFiles\File;


class FilesController extends Controller
{

    public function __construct(){

         $this->middleware('auth');

    }
    public function index(Request $request)
    {
       $lists = File::searchsnip($request->get('snip'))->orderBy('id', 'DESC')->paginate();
       
       if($lists->isEmpty()) 
       {
          Session::flash('status', '¡No se ha encontrado resultado!');
          return redirect()->route('listado.file');
       }

       return view('Files/listado', compact('lists'));
    }


    public function create()
    {
        $town = Municipalitie::get()->pluck('town', 'id');
        $year = Year::get()->pluck('year', 'id');
        $bag = Bag::get()->pluck('bag', 'id');
        $locker = Locker::get()->pluck('locker', 'id');
        return view('Files/create', compact('town', 'year', 'bag', 'locker'));
    }


    public function store(Request $request)
    {
        
        

        $data = $request->all();

        $data['user'] = \Auth::User()->id;
      
      
        $rules = array(
            'snip' => 'required',
            'town' => 'required',
            'year' => 'required',
            'numberbag' => 'required',
            'locker' => 'required',
            'user' => 'required'
        );

        $validar = \Validator::make($data, $rules);

        if ($validar->fails())
        {
            return redirect()->back()
                ->withErrors($validar->errors())
                ->withInput($request->all());
        }

        $file = File::create($data);
        $file->save();

        Session::flash('status', '¡ Snip:  ' .  $file->snip  .' Guardado con éxito!');

        return redirect()->route('new.file');
    
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        //
        $town = Municipalitie::get()->pluck('town', 'id');
        $year = Year::get()->pluck('year', 'id');
        $bag = Bag::get()->pluck('bag', 'id');
        $locker = Locker::get()->pluck('locker', 'id');
        $file = File::findOrFail($id);

        return view('Files/edit', compact('town', 'year', 'bag', 'locker', 'file'));
    }

    public function update(Request $request, $id)
    {
         $file = File::findOrFail($id);
         $request->user = 1;
         $file->fill($request->all());
         $file->save();

         Session::flash('status', '¡Actualizado con éxito!');

         return redirect()->route('listado.file');
    }

    public function destroy($id)
    {
            $file = File::findOrFail($id);
            $file->delete();
            Session::flash('status', '¡El Registro Fue eliminado!');
            return redirect()->route('listado.file');
    }


}