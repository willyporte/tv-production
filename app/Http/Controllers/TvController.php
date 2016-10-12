<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tv;
use App\Http\Requests;
use App\Http\Requests\CreateTvRequest;
use App\Http\Requests\EditTvRequest;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

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
        if(trim($request->file('image_file')) <> '') {
            // imgs
            $image_extension = $request->file('image_file')->getClientOriginalExtension();
            $image_name = time() . '.' . $image_extension;
            $image_thumbnail = 'thumb-'.$image_name;
            // paths
            $image_path = '/tv-images/';
            $image_thumbnail_path = '/tv-images/thumbnails/';
        }
        else {
            $image_name = '';
            $image_path = '';
            $image_thumbnail = '';
            $image_thumbnail_path = '';
        }

        $tv = new Tv([
            'brand' => $request->get('brand'),
            'panel' => $request->get('panel'),
            'available' => $request->get('available'),
            'panel_place' => $request->get('panel_place'),
            'main' => $request->get('main'),
            'main_nr' => $request->get('main_nr'),
            'inverter' => $request->get('inverter'),
            'inverter_nr' => $request->get('inverter_nr'),
            'power_supply' => $request->get('power_supply'),
            'power_supply_nr' => $request->get('power_supply_nr'),
            'power_supply_alt' => $request->get('power_supply_alt'),
            'power_supply_alt_nr' => $request->get('power_supply_alt_nr'),
            't_con' => $request->get('t_con'),
            't_con_nr' => $request->get('t_con_nr'),
            'mod_tv' => $request->get('mod_tv'),
            'note' => $request->get('note'),
            'status' => $request->get('status'),
            'image_name' => $image_name,
            'image_path' => $image_path,
            'image_thumbnail' => $image_thumbnail,
            'image_thumbnail_path' => $image_thumbnail_path,
            'y_sus' => $request->get('y_sus'),
            'y_sus_nr' => $request->get('y_sus_nr'),
            'z_sus' => $request->get('z_sus'),
            'z_sus_nr' => $request->get('z_sus_nr'),
            'buffer_board' => $request->get('buffer_board'),
            'buffer_board_nr' => $request->get('buffer_board_nr'),
            'sgnl' => $request->get('sgnl'),
            'sgnl_nr' => $request->get('sgnl_nr')
        ]);
        
        $tv->save();

        if(trim($request->file('image_file')) <> '') {
            $file = $request->file('image_file');
            $imageFile = Image::make($file->getRealPath());
            // cambio orientacion segun Exif propiedad "Orientation"
            $data = $imageFile->exif();
            if(isset($data['Orientation'])) {
                $orientation = $data['Orientation'];
                switch ($orientation) {
                    case 3:
                        $imageFile = $imageFile->rotate(180);
                        break;
                    case 6:
                        $imageFile = $imageFile->rotate(-90);
                        break;
                    case 8:
                        $imageFile = $imageFile->rotate(90);
                        break;
                }
            }
            $w = $imageFile->width();
            $h = $imageFile->height();
            // constraint to with 800px max or height 800px max
            if( $w > $h ) {
                $imageFile->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
            else {
                $imageFile->resize(null, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
            $imageFile->save(public_path().$image_path.$image_name)
                    ->orientate()
                    ->resize(150,150)
                    ->save(public_path().$image_thumbnail_path.$image_thumbnail);
        }

        Session::flash('message','Tv: '.$tv->panel. ' '. $tv->brand.' correttamente inserito.');
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

        // imgs
        if(trim($request->file('image_file')) <> '') {
   
            $image_extension = $request->file('image_file')->getClientOriginalExtension();
            $image_name = time() . '.' . $image_extension;
            $image_thumbnail = 'thumb-'.$image_name;
            // paths
            $image_path = '/tv-images/';
            $image_thumbnail_path = '/tv-images/thumbnails/';

            ///

            $file = $request->file('image_file');
            $imageFile = Image::make($file->getRealPath());
            // cambio orientacion segun Exif propiedad "Orientation"
            $data = $imageFile->exif();
            if(isset($data['Orientation'])) {
                $orientation = $data['Orientation'];
                switch ($orientation) {
                    case 3:
                        $imageFile = $imageFile->rotate(180);
                        break;
                    case 6:
                        $imageFile = $imageFile->rotate(-90);
                        break;
                    case 8:
                        $imageFile = $imageFile->rotate(90);
                        break;
                }
            }
            $w = $imageFile->width();
            $h = $imageFile->height();
            // constraint to with 800px max or height 800px max
            if( $w > $h ) {
                $imageFile->resize(800, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
            else {
                $imageFile->resize(null, 800, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
            }
            $imageFile->save(public_path().$image_path.$image_name)
                    ->orientate()
                    ->resize(150,150)
                    ->save(public_path().$image_thumbnail_path.$image_thumbnail);

            // borrar imagen vieja
            //unlink(public_path().$tv->$image_path.$tv->$image_name);
            //unlink(public_path().$tv->$image_thumbnail_path.$tv->$image_thumbnail);

            $tv->fill([
                'brand' => $request->get('brand'),
                'panel' => $request->get('panel'),
                'available' => $request->get('available'),
                'panel_place' => $request->get('panel_place'),
                'main' => $request->get('main'),
                'main_nr' => $request->get('main_nr'),
                'inverter' => $request->get('inverter'),
                'inverter_nr' => $request->get('inverter_nr'),
                'power_supply' => $request->get('power_supply'),
                'power_supply_nr' => $request->get('power_supply_nr'),
                'power_supply_alt' => $request->get('power_supply_alt'),
                'power_supply_alt_nr' => $request->get('power_supply_alt_nr'),
                't_con' => $request->get('t_con'),
                't_con_nr' => $request->get('t_con_nr'),
                'mod_tv' => $request->get('mod_tv'),
                'note' => $request->get('note'),
                'status' => $request->get('status'),
                'image_name' => $image_name,
                'image_path' => $image_path,
                'image_thumbnail' => $image_thumbnail,
                'image_thumbnail_path' => $image_thumbnail_path,
                'y_sus' => $request->get('y_sus'),
                'y_sus_nr' => $request->get('y_sus_nr'),
                'z_sus' => $request->get('z_sus'),
                'z_sus_nr' => $request->get('z_sus_nr'),
                'buffer_board' => $request->get('buffer_board'),
                'buffer_board_nr' => $request->get('buffer_board_nr'),
                'sgnl' => $request->get('sgnl'),
                'sgnl_nr' => $request->get('sgnl_nr') 
            ]);        


        }    
        else {
            $tv->fill([
                'brand' => $request->get('brand'),
                'panel' => $request->get('panel'),
                'available' => $request->get('available'),
                'panel_place' => $request->get('panel_place'),
                'main' => $request->get('main'),
                'main_nr' => $request->get('main_nr'),
                'inverter' => $request->get('inverter'),
                'inverter_nr' => $request->get('inverter_nr'),
                'power_supply' => $request->get('power_supply'),
                'power_supply_nr' => $request->get('power_supply_nr'),
                'power_supply_alt' => $request->get('power_supply_alt'),
                'power_supply_alt_nr' => $request->get('power_supply_alt_nr'),
                't_con' => $request->get('t_con'),
                't_con_nr' => $request->get('t_con_nr'),
                'mod_tv' => $request->get('mod_tv'),
                'note' => $request->get('note'),
                'status' => $request->get('status'),
                'y_sus' => $request->get('y_sus'),
                'y_sus_nr' => $request->get('y_sus_nr'),
                'z_sus' => $request->get('z_sus'),
                'z_sus_nr' => $request->get('z_sus_nr'),
                'buffer_board' => $request->get('buffer_board'),
                'buffer_board_nr' => $request->get('buffer_board_nr'),
                'sgnl' => $request->get('sgnl'),
                'sgnl_nr' => $request->get('sgnl_nr')
            ]);  
        }

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

    public function deleteImage($id) {
        $tv = Tv::findOrFail($id);
        $tv->image_name = null;
        $tv->image_path = null;
        $tv->image_thumbnail = null;
        $tv->image_thumbnail_path = null;
        $tv->save();

        Session::flash('message','Come richiesto ho cancellato l\'immagine!');
        Session::flash('flash_type','alert-success');

        return redirect()->route('tv.edit', $tv->id);
    }

}
