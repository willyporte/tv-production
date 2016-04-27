<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tv;
use App\Http\Requests;
use App\Http\Requests\CreateTvRequest;
use App\Http\Requests\EditTvRequest;
use Illuminate\Support\Facades\Session;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $tvs = Tv::filterAndPaginate($request->get('search'));
        return view('admin.index', compact('tvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTvRequest $request)
    {
        $data = $request->all();
        $tv = new Tv($data);
        $tv->save();

        Session::flash('message','Tv: '.$data['panel']. ' '. $data['brand'].' correttamente inserito.');
        Session::flash('flash_type','alert-success');

        return redirect()->route('tv.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tv = Tv::findOrFail($id);

        return view('admin.show', compact('tv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tv = Tv::findOrFail($id);

        return view('admin.edit', compact('tv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditTvRequest $request, $id)
    {
        $tv = Tv::findOrFail($id);
        $tv->fill($request->all());
        $tv->save();

        Session::flash('message','Tv:  '.$request->panel.' '.$request->brand.' Aggiornato!');
        Session::flash('flash_type','alert-success');

        return redirect()->route('tv.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        // abort(500); // simular que el envio ajax no funciono
        // No usar Tv::destroy($id); con este metodo no puedo recuperar info del tv!

        $tv = Tv::findOrFail($id);
        $tv->delete();
        $message = 'Il Tv: '.$tv->panel.' '.$tv->brand.' è stato CANCELLATO!';

        if($request->ajax()) {
            // como es ajax solo envio un mensaje a la pagina.
            return $message;
        } else {
            // si no es ajax hago un redirect con un mensaje
            Session::flash('message', $message);
            Session::flash('flash_type','alert-success');

            return redirect()->route('tv.index');
        }
    }

}
