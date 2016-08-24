@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="text-center">
                <h2>Modulo di Richiesta Ricambio</h2>
                <p><strong>Hai bisogno di informazione riguardo ad un ricambio che stai cercando?</strong></p>
                <p>Compila questo modulo di Richiesta Ricambio <strong>SENZA IMPEGNI</strong></p>
                <p>Sarai ricontattato quanto prima per conoscere il prezzo
                e la disponibilità del ricambio che ti interessa.</p>
                <br>
             </div>

            @include('admin.partials.errors')
            @include('admin.partials.message')

            <form action="/contatto" method="POST">

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">

                <div class="row control-group">
                    <div class="form-group col-xs-12">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12 controls">
                        <label for="phone">Telefono</label>
                        <input type="tel" class="form-control" id="email" name="phone" value="{{ old('phone') }}">
                    </div>
                </div>

                <div class="row control-group">
                    <div class="form-group col-xs-12 controls">
                        <label for="message">Messaggio</label>
                        <textarea name="message" id="message" rows="5" class="form-control">{{ old('message') }}</textarea>
                    </div>
                </div>
                

                <div class="row control-group">
                    <div class="form-group col-xs-12">
                        <button class="btn btn-primary"><i class="fa fa-envelope-o" aria-hidden="true"></i> Invia Modulo</button>
                    </div>
                </div>

            </form>
            

           
        </div>
    </div>
</div>

@endsection

