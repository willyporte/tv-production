@extends('layouts.app')

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
                    <span v-for="ricambio in ricambi | filterBy search 'brand'">
                        <span v-if="ricambio.brand != ''">
                            @{{ ricambio.brand }} &nbsp;
                        </span>
                    </span> 
                    
                    <hr>   

                    <h2>Modelli</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'mod_tv'">
                        <span v-if="ricambio.mod_tv != ''">
                            @{{ ricambio.mod_tv }} &nbsp;
                        </span>
                    </span> 
                    
                    <hr>  

                    <h2>Pannelli</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'panel'">
                        <span v-if="ricambio.panel != ''">
                            @{{ ricambio.panel }} &nbsp;
                        </span>
                    </span> 
                    
                    <hr> 

                    <h2>MainBoard</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'main'">
                        <span v-if="ricambio.main != ''">
                            @{{ ricambio.main }} &nbsp;
                        </span>    
                    </span> 
                   
                    <hr>  

                    <h2>Inverters</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'inverter'">
                        <span v-if="ricambio.inverter != ''">
                            @{{ ricambio.inverter }} &nbsp; 
                        </span>    
                    </span> 
                  
                    <hr> 

                    <h2>Alimentatori</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'power_supply'">
                        <span v-if="ricambio.power_supply != ''">
                            @{{ ricambio.power_supply }} &nbsp;
                        </span>
                    </span> 
                   
                    <hr> 

                    <h2>Alimentatori Alt.</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 'power_supply_alt'">
                        <span v-if="ricambio.power_supply_alt != ''">
                        @{{ ricambio.power_supply_alt.trim() }} &nbsp;
                        </span>
                    </span> 
                  
                    <hr> 

                    <h2>T_Con</h2>
                    <span v-for="ricambio in ricambi | filterBy search.trim() 't_con'">
                        <span v-if="ricambio.t_con != ''">
                            @{{ ricambio.t_con }} &nbsp;
                        </span>
                    </span> 
                   
                    <br>

                  
                </div>
            </div>           
        </div>
        <br>
    </div>
@endsection

@section('scripts')

<script>
    new Vue({
      el: 'body',
      data: {
        ricambi: {!! $tvs !!}
      },
      search: '',
    })
</script>

@endsection
