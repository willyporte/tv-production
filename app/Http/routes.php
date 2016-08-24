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
    $tvs = App\Tv::groupBy('mod_tv')->get();

    return view('all-parts',compact('tvs'));
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

        Route::resource('tv', 'TvController');

    });

    Route::auth();

    Route::get('/riservato', 'HomeController@index');

    Route::get('/', function () {
        $tvs = App\Tv::all();
        return view('all-parts',compact('tvs'));
    });

    Route::get('contatto','ContactController@showForm');
    Route::post('contatto','ContactController@sendContactInfo');
    Route::get('informativa',function(){
        return view('informativa');
    });
    Route::get('cerca','ClientController@search');

});
