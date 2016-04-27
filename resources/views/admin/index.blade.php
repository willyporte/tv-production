@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" style="padding:0 10px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="pull-left">
                        {!! Form::model(Request::only(['search']),['route' => 'tv.index', 'method' => 'GET', 'class' => 'form-inline', 'role' => 'form']) !!}
                        <div class="form-group">
                            {!! Form::text('search',null,['class' => 'form-control', 'placeholder' => 'Cerca ...']) !!}
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </div>
                        {!! Form::close() !!}

                    </span>
                    <span class="pull-right">
                        <a class="btn btn-primary" href="{{ route('tv.create') }}" role="button" title="Crea nuovo Tv">
                            <i class="fa fa-television"> Nuovo</i>
                        </a>
                        <a class="btn btn-danger" href="{{ route('tv.excel') }}" role="button" title="Esporta Elenco Tv in Excel">
                            <i class="fa fa-file-text-o"> Excel</i>
                        </a>
                    </span>
                    <br><br>
                </div>

                <div class="panel-body">
                    @include('admin.partials.message')
                    <table class="table table-striped table-bordered table-responsive">
                        <thead>
                            <th><span class="badge">{{ $tvs->total() }}</span> Pannello</th>                    
                            <th>Posto Pannello</th>
                            <th>Marca</th>
                            <th>Modello</th>
                            <th>Main</th>
                            <th>Inverter</th>
                            <th>Alim.</th>
                            <th>Alim. Alt.</th>
                            <th>T_Con</th>
                            <th>Azioni</th>
                        </thead>
                        <tbody>

                            @foreach($tvs as $tv)
                                <tr data-id="{{ $tv->id }}">
                                    <td
                                        @if( $tv->available )
                                            class="alert alert-success"
                                        @else
                                            class="alert alert-danger"
                                        @endif
                                        >
                                        @if( $tv->available )
                                            <span class="badge">OK</span>
                                        @endif 
                                            {{ $tv->panel }}
                                    </td>
                                    <td>{{ $tv->panel_place }}</td>
                                    <td>{{ $tv->brand }}</td>
                                    <td>
                                        {{ $tv->mod_tv }}
                                    </td>
                                    <td>
                                        @if($tv->main_nr != 0)
                                            <span class="badge">{{ $tv->main_nr }}</span>
                                        @endif
                                        {{ $tv->main }}
                                    </td>
                                    <td>
                                        @if($tv->inverter_nr != 0)
                                            <span class="badge">{{ $tv->inverter_nr }}</span>
                                        @endif
                                        {{ $tv->inverter }}
                                    </td>
                                    <td>
                                        @if($tv->power_supply_nr != 0)
                                            <span class="badge">{{ $tv->power_supply_nr }}</span>
                                        @endif
                                        {{ $tv->power_supply }}
                                    </td>
                                    <td>
                                        @if($tv->power_supply_alt_nr != 0)
                                            <span class="badge">{{ $tv->power_supply_alt_nr }}</span>
                                        @endif
                                        {{ $tv->power_supply_alt }}

                                    </td>
                                    <td>
                                        @if($tv->t_con_nr != 0)
                                            <span class="badge">{{ $tv->t_con_nr }}</span>
                                        @endif
                                        {{ $tv->t_con }}
                                    </td>
                                    <td>
                                        <a href="{{ route('tv.show', $tv->id) }}" title="Informazione del Tv">
                                            <i class="fa fa-tv"></i>
                                        </a>
                                        <a href="{{ route('tv.edit', $tv->id) }}" title="Modifica Tv">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <a href="#" title="Cancella Tv" class="btn-delete" role="button">
                                            <i class="fa fa-btn fa-trash" style="color:#A00"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {!! $tvs->appends(Request::all())->render() !!} 

                    {!! Form::open(['route' => ['tv.destroy', ':TV_ID'], 'method' => 'DELETE', 'id' => 'form-delete']) !!}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function(){
            $('.btn-delete').click(function(e){
                e.preventDefault();
                // confirmo que quiere borrar el cliente!
                var deleteTv = confirm('Sicuro di voler CANCELLARE la Tv?');
                if (deleteTv === true) {
                    var row = $(this).closest('tr');
                    //var id = row.attr('data-id');
                    // non funka!: var row = $(this).parents('tr');
                    var id = row.data('id');
                    var form = $('#form-delete');
                    var url = form.attr('action').replace(':TV_ID', id);
                    var data = form.serialize();

                    // enfoque optimista (antes de borrar oculto la fila
                    row.fadeOut(function () {
                        $.post(url, data, function (result) {
                            alert(result);
                        }).fail(function () {
                            alert('La Tv non è stata cancellata!');
                            row.show();
                        });
                    });
                }
                else {
                    return false;
                }
            })
        })
    </script>
@endsection
