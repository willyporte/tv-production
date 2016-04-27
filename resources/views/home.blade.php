@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Benvenuto {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    <div align="center">
                        <p><stront>Sessione iniziata</strong></p>
                        <img src="{{ asset('imgs/tv.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
