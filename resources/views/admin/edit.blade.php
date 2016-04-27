@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">

                {{-- Comennto porque muestro los errores campo por campo!

                @include('admin.partials.errors')

                --}}

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Modificazione Tv Panel: {{ $tv->panel }} Marca: {{ $tv->brand }}
                    </div>

                    <div class="panel-body">
                        {!! Form::model($tv,['route' => ['tv.update', $tv->id], 'method' => 'PUT','class' => 'form-inline']) !!}

                        @include('admin.partials.fields')

                        <div class="form-group col-md-12">
                            <button class="btn btn-danger" type="submit">
                                <i class="fa fa-floppy-o"></i> Modifica
                            </button>
                            <a href="{{ route('tv.index') }}" class="btn btn-primary" role="button">Torna</a>
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    
@endsection

@section('scripts')

<script>
/*
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();   
    });
*/

    $(document).ready(function(){
        $('input').tooltip();
    });

</script>
@endsection


