@extends('layouts.app')

@section('head')
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    
@endsection

@section('content')

    <div class="container">

        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>Ricambi TV</h1>
                </div>              

                <div style="margin:10px">  

                    <i class="fa fa-search" aria-hidden="true"></i>
                    <input type="text" placeholder="Cerca..." v-model="search">
                    &nbsp;
                    <a href="#" @click="search = ''" title="Reset Ricerca">
                        <i class="fa fa-refresh" aria-hidden="true"></i>
                    </a>
                </div> 


                <div style="font-size:18px;padding:0 10px;">
                    <h2>Marche</h2>
                    <span v-for="ricambio in marche | filterBy search 'brand'">
                        <span v-if="ricambio.brand != ''">
                            @{{ ricambio.brand }} &nbsp;
                        </span>
                    </span> 
                    
                    <hr>   

                    <h2>Modelli</h2>
                    <span v-for="ricambio in modelli | filterBy search.trim() 'mod_tv'">
                        <span v-if="ricambio.mod_tv != ''">
                            @{{ ricambio.mod_tv }} &nbsp;
                        </span>
                    </span> 
                    
                    <hr>  

                    <h2>Pannelli</h2>
                    <span v-for="ricambio in panelli | filterBy search.trim() 'panel'">
                        <span v-if="ricambio.panel != ''">
                            @{{ ricambio.panel }} &nbsp;
                        </span>
                    </span> 
                    
                    <hr> 

                    <h2>MainBoard</h2>
                    <span v-for="ricambio in mainboard | filterBy search.trim() 'main'">
                        <span v-if="ricambio.main != ''">
                            @{{ ricambio.main }} &nbsp;
                        </span>    
                    </span> 
                   
                    <hr>  

                    <h2>Inverters</h2>
                    <span v-for="ricambio in inverters | filterBy search.trim() 'inverter'">
                        <span v-if="ricambio.inverter != ''">
                            @{{ ricambio.inverter }} &nbsp; 
                        </span>    
                    </span> 
                  
                    <hr> 

                    <h2>Alimentatori</h2>
                    <span v-for="ricambio in alimentatori | filterBy search.trim() 'power_supply'">
                        <span v-if="ricambio.power_supply != ''">
                            @{{ ricambio.power_supply }} &nbsp;
                        </span>
                    </span> 
                   
                    <hr> 
                    {{-- 
                    <h2>Alimentatori Alt.</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'power_supply_alt'">
                        <span v-if="ricambio.power_supply_alt != ''">
                        @{{ ricambio.power_supply_alt.trim() }} &nbsp;
                        </span>
                    </span> 
                  
                    <hr> 
                    --}}                 
                    <hr> 

                    <h2>T_Con</h2>
                    <span v-for="ricambio in tcons | filterBy search.trim() 't_con'">
                        <span v-if="ricambio.t_con != ''">
                            @{{ ricambio.t_con }} &nbsp;
                        </span>
                    </span> 
                    <hr>

                    <h2>Y-Sus</h2>
                    <span v-for="ricambio in ysus | filterBy search.trim() 'y_sus'">
                        <span v-if="ricambio.y_sus != ''">
                        @{{ ricambio.y_sus }} &nbsp;
                        </span>
                    </span> 
                  
                    <hr> 
                    <h2>Z-Sus</h2>
                    <span v-for="ricambio in zsus | filterBy search.trim() 'z_sus'">
                        <span v-if="ricambio.z_sus != ''">
                        @{{ ricambio.z_sus }} &nbsp;
                        </span>
                    </span> 
                  
                    <hr> 
                    <h2>Buffer Board</h2>
                    <span v-for="ricambio in bufferboard | filterBy search.trim() 'buffer_board'">
                        <span v-if="ricambio.buffer_board != ''">
                        @{{ ricambio.buffer_board }} &nbsp;
                        </span>
                    </span> 
                  
                    <hr> 
                    <h2>Signal</h2>
                    <span v-for="ricambio in signal | filterBy search.trim() 'sgnl'">
                        <span v-if="ricambio.sgnl != ''">
                        @{{ ricambio.sgnl }} &nbsp;
                        </span>
                    </span> 
                    <br>
                </div>
                    <div>
                    <br>
                        <div align="center">
                        <div id="slider" class="nivoSlider">
                            <a href="http://shop.commerciandosas.it" target="_blank">
                                <img src="slider/banner2-commerciando.jpg" alt="Commerciando SAS" />
                            </a>
                            <a href="http://shop.commerciandosas.it" target="_blank">
                                <img src="slider/banner1-commerciando.jpg" alt="Commerciando SAS" />
                            </a>  
                            <a href="http://www.hotspotmarche.it" target="_blank">  
                                <img src="slider/banner1-hotspotmarche.jpg" alt="HotSpot Marche" />
                            </a>
                            <a href="http://www.elettronicalowcost.it" target="_blank">
                                <img src="slider/banner1-lowcost.jpg" alt="Elettronica Low Cost" />
                            </a>
                            <a href="http://www.vendostock.net" target="_blank">
                                <img src="slider/bannerVendoStock.jpg" alt="Vendo Stock" />
                            </a>
                        </div>
                        </div>
                    
                     </div>

            </div>  
        </div>
    </div>
    
@endsection

@section('scripts')

<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>

<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>

<script>
    new Vue({
      el: 'body',
      data: {
        marche: {!! $brand !!},
        modelli: {!! $mod_tv !!},
        panelli: {!! $panel !!},
        mainboard: {!! $main !!},
        inverters: {!! $inverter !!},
        alimentatori: {!! $power_supply !!},
        tcons: {!! $t_con !!},
        ysus: {!! $y_sus !!},
        zsus: {!! $z_sus !!},
        bufferboard: {!! $buffer_board !!},
        signal: {!! $sgnl !!}
      },
      search: '',
    })
</script>



@endsection
