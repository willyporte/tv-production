@extends('layouts.modulo')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">

                    <div class="jumbotron">
                        Panel: {{ $tv->panel }}
                        Marca: {{ $tv->brand }}
                        Main: {{ $tv->main }} <br>
                        Inverter: {{ $tv->inverter }} <br>
                        Alim.: {{ $tv->power_supply }} <br>
                        Alim. Alt.: {{ $tv->power_suppy_alt }} <br>
                        T_Com: {{ $tv->t_con }} <br>
                        Mod_Tv: {{ $tv->mod_tv }} <br>
                        Note: {{ nlbr($tv->note) }} <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
