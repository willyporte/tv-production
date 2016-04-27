<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Http\Requests;
use App\Tv;

class TvPdfController extends Controller
{
    public function modulo($id) {

        $tv = Tv::findOrFail($id);
        return \PDF::loadView('admin.modulo', compact('tv'))->download('modulo.pdf');

    }
}
