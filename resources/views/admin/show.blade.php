@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Tv Panel: {{ $tv->panel }}</h2></div>
                    <div>
                        <div class="col-md-offset-1" style="font-size:22px">
                            <br>
                        <strong>Panel</strong>: {{ $tv->panel }} <br>
                        <strong>Disponibile</strong>:
                        @if($tv->available)
                            Si
                        @else
                            No
                        @endif
                            <br>
                        <strong>Marca</strong>: {{ $tv->brand }} <br>
                        <strong>MOD_TV</strong>: {{ $tv->mod_tv }} <br>
                        <strong>Stato</strong>:
                        @if($tv->status == 'monted')
                             <i class="fa fa-wrench"></i> Da Smontare
                        @else
                            Smontato
                        @endif
                        <br>        

                        <strong>Main</strong>: {{ $tv->main }}
                                @if($tv->main_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->main_nr }} </strong>
                                @endif        
                                <br>
                        <strong>Inverter</strong>: {{ $tv->inverter }} 
                                @if($tv->inverter_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->inverter_nr }} </strong>
                                @endif        
                                <br>
                        <strong>Alimentatore</strong>: {{ $tv->power_supply }} 
                                @if($tv->power_supply_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->power_supply_nr }} </strong>
                                @endif        
                                <br>
                        <strong>Alim. Alt.</strong>: {{ $tv->power_supply_alt }}
                                @if($tv->power_supply_alt_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->power_supply_alt_nr }} </strong>
                                @endif        
                                <br>
                        <strong>T_Con</strong>: {{ $tv->t_con }}                         
                                @if($tv->t_con_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->t_con_nr }} </strong>
                                @endif        
                                <br>
                        
                        <strong>Y-Sus</strong>: {{ $tv->y_sus }}                         
                                @if($tv->y_sus_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->y_sus_nr }} </strong>
                                @endif        
                                <br>
                        <strong>Z-Sus</strong>: {{ $tv->z_sus }}                         
                                @if($tv->z_sus_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->z_sus_nr }} </strong>
                                @endif        
                                <br>
                        <strong>Buffer Board</strong>: {{ $tv->buffer_board }}                         
                                @if($tv->buffer_board_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->buffer_board_nr }} </strong>
                                @endif        
                                <br>
                        <strong>Signal</strong>: {{ $tv->sgnl }}                         
                                @if($tv->sgnl_nr <> 0)
                                    <strong> <i class="fa fa-inbox" aria-hidden="true"></i> {{ $tv->sgnl_nr }} </strong>
                                @endif        
                                <br>                

                        <strong>Nota</strong>: {!! nl2br($tv->note) !!} <br>
                        <br>

                        @if( $tv->image_name <> '')
                        <div>
                            <img class="img-responsive" src="{{ $tv->image_path.$tv->image_name }}" style="border: solid 1px #ccc">        
                        </div> 
                        <br>
                        @endif

                        <a href="{{ route('tv.index') }}" class="btn btn-primary" role="button">Torna</a>
                        <br><br>
                        </div>
                        
                        
                    </div>

                </div>
                
            </div>

        </div>
    </div>
@endsection
