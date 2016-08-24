<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tv;
use App\Http\Requests;

class ClientController extends Controller
{
    public function search(Request $request)
    {
        $tvs = Tv::filterAndPaginate($request->get('search'));
        return view('search', compact('tvs'));
    }
}
