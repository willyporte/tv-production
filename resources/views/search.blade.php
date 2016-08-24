@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" style="padding:0 10px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2>Compatibilità <small> Schede, Modelli, ecc.</small></h2>
                </div>
                
                <div class="panel-body">
                    @include('admin.partials.message')
                    <div>
                        {!! Form::model(Request::only(['search']),['url' => '/cerca', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::text('search',null,['class' => 'form-control', 'placeholder' => 'Cerca ...']) !!}
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                    <p></p>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <th>Pannello</th>                    
                                {{-- <th>Posto Pannello</th> --}}
                                <th>Marca</th>
                                <th>Modello</th>
                                <th>Main</th>
                                <th>Inverter</th>
                                <th>Alim.</th>
                                <th>Alim. Alt.</th>
                                <th>T_Con</th>
                            </thead>
                            <tbody>

                                @foreach($tvs as $tv)
                                    <tr>
                                        <td>{{ $tv->panel }}</td>
                                        
                                        <td>  
                                            @if( $tv->image_name <> '')
                                                <a href="{{ $tv->image_path.$tv->image_name }}" title="Informazione del Tv" target=_blank>
                                                        <i class="fa fa-picture-o" aria-hidden="true"></i>
                                                </a>
                                             @endif     

                                            {{ $tv->brand }}</td>
                                        <td>
                                            {{ $tv->mod_tv }}
                                        </td>
                                        <td>
                                            {{ $tv->main }}
                                        </td>
                                        <td>
                                            {{ $tv->inverter }}
                                        </td>
                                        <td>
                                            {{ $tv->power_supply }}
                                        </td>
                                        <td>
                                            {{ $tv->power_supply_alt }}
                                        </td>
                                        <td>
                                            {{ $tv->t_con }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! $tvs->appends(Request::all())->render() !!} 
                </div>
            </div>
        </div>
    </div>
@endsection

