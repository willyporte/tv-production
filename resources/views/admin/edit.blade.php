@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                {{-- Comennto porque muestro los errores campo por campo!

                @include('admin.partials.errors')

                --}}
  

                <div class="panel panel-default">
                    <div class="panel-heading">
                        Modificazione Tv Panel: {{ $tv->panel }} Marca: {{ $tv->brand }}
                    </div>

                    <div class="panel-body">

                        @include('admin.partials.message')

                        @if( $tv->image_name <> '')
                        <div align="center">
                            <img class="img-responsive" src="{{ $tv->image_path.$tv->image_name }}" style="border: solid 1px #ccc">  
                            <span class="pull-right">
                            {!! Form::open(['route' => ['delete-image',$tv->id],'method' => 'delete'])!!}
                                <button title="Cancella Immagine" name="delete-image" type="submit" class="btn btn-danger"
                                onclick="return confirm('Sicuro di voler cancellare l\'immagine?')"
                                ><i class="fa fa-trash" aria-hidden="true"></i> 
                            {!! Form::close()!!}
                            </span>     
                        </div> 
                        <br>
                        @endif     


                        {!! Form::model($tv,['route' => ['tv.update', $tv->id], 'method' => 'PUT',
                        'files' => true]) !!}

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


