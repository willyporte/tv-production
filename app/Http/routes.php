<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('test', function(){
    $brand = App\Tv::groupBy('brand')->OrderBy('brand')->get();
    $mod_tv = App\Tv::groupBy('mod_tv')->OrderBy('mod_tv')->get();
    $panel = App\Tv::groupBy('panel')->OrderBy('panel')->get();
    $main = App\Tv::groupBy('main')->OrderBy('main')->get();
    $inverter = App\Tv::groupBy('inverter')->OrderBy('inverter')->get();
    $power_supply = App\Tv::groupBy('power_supply')->OrderBy('power_supply')->get();
    $t_con = App\Tv::groupBy('t_con')->OrderBy('t_con')->get();
    $y_sus = App\Tv::groupBy('y_sus')->OrderBy('y_sus')->get();
    $z_sus = App\Tv::groupBy('z_sus')->OrderBy('z_sus')->get();
    $buffer_board = App\Tv::groupBy('buffer_board')->OrderBy('buffer_board')->get();
    $sgnl = App\Tv::groupBy('sgnl')->OrderBy('sgnl')->get();

    return view('all-parts',compact('brand','mod_tv','panel','main','inverter','power_supply','t_con','y_sus','z_sus','buffer_board','sgnl'));
});


Route::group(['middleware' => 'web'], function () {

    Route::group(['middleware' => ['auth','is_admin']], function () {

        Route::get('tv/excel', [
            'as' => 'tv.excel',
            'uses' => 'TvExcelController@index'
        ]);

        Route::get('tv/modulo/{id}', [
            'as' => 'tv.modulo',
            'uses' => 'TvPdfController@modulo',
        ]);

        Route::delete('delete-image/{id}',[
            'as' => 'delete-image',
            'uses' => 'TvController@deleteImage'
        ]);

        Route::resource('tv', 'TvController');

    });

    Route::auth();

    Route::get('/riservato', 'HomeController@index');

    Route::get('/', function () {
        
        $brand = App\Tv::groupBy('brand')->OrderBy('brand')->get();
        $mod_tv = App\Tv::groupBy('mod_tv')->OrderBy('mod_tv')->get();
        $panel = App\Tv::groupBy('panel')->OrderBy('panel')->get();
        $main = App\Tv::groupBy('main')->OrderBy('main')->get();
        $inverter = App\Tv::groupBy('inverter')->OrderBy('inverter')->get();
        $power_supply = App\Tv::groupBy('power_supply')->OrderBy('power_supply')->get();
        $t_con = App\Tv::groupBy('t_con')->OrderBy('t_con')->get();
        $y_sus = App\Tv::groupBy('y_sus')->OrderBy('y_sus')->get();
        $z_sus = App\Tv::groupBy('z_sus')->OrderBy('z_sus')->get();
        $buffer_board = App\Tv::groupBy('buffer_board')->OrderBy('buffer_board')->get();
        $sgnl = App\Tv::groupBy('sgnl')->OrderBy('sgnl')->get();

    return view('all-parts',compact('brand','mod_tv','panel','main','inverter','power_supply','t_con','y_sus','z_sus','buffer_board','sgnl'));
    });

    Route::get('contatto','ContactController@showForm');
    Route::post('contatto','ContactController@sendContactInfo');
    Route::get('informativa',function(){
        return view('informativa');
    });
    Route::get('cerca','ClientController@search');

});
