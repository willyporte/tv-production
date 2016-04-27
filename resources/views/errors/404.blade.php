@extends('layouts.app')
@section('title')
    Pagina sbagliata!
@endsection

@section('redirect')
    <meta http-equiv="refresh" content="5;url=/" />
@endsection

@section('content')
	<div class="text-center">
		<h1>La pagina richiesta non esiste!</h1>
		<img src="{{ asset('imgs/homer-computer-doh.png') }}">
	</div>
@endsection