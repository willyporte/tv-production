<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('brand','Marca TV',['class' => 'control-label']) !!}
            {!! Form::text('brand',null,['class' => 'form-control','placeholder' => 'Marca',
            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Marca TV']) !!}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::label('mod_tv','Modello',['class' => 'control-label']) !!}
            {!! Form::text('mod_tv',null,['class' => 'form-control','placeholder' => 'Modello',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Modello TV']) !!}     
        </div>
    </div>    
    <div class=" col-md-3">
        <div class="form-group{{ $errors->has('panel') ? ' has-error' : '' }}">
            {!! Form::label('panel','Pannello',['class' => 'control-label']) !!}
            {!! Form::text('panel',null,['class' => 'form-control','placeholder' => 'Pannello',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Pannello']) !!}
            @if ($errors->has('panel'))
                <span class="help-block">
                        <strong><i class="fa fa-exclamation-triangle"></i>
                            {{ $errors->first('panel') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class=" col-md-3">
        <div class="form-group">
            {!! Form::label('panel_place','Posto',['class' => 'control-label']) !!}
            {!! Form::text('panel_place',null,['class' => 'form-control','placeholder' => 'Posto',
                'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Posto Pannello']) !!}
        </div>
    </div>    
</div>
   
<div class="row">
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('type') ? 'has-error' : '' }}">    
            {!! Form::label('available','Disponibilità del Pannello:',['class' => 'control-label']) !!} <br>
            {!! Form::radio('available','1') !!} Si &nbsp; &nbsp;
            {!! Form::radio('available','0') !!} No <br>
            @if ($errors->has('available'))
                <span class="help-block" style="color:#A94442">
                        <strong><i class="fa fa-exclamation-triangle"></i>
                            {{ $errors->first('available') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('status') ? 'has-error' : '' }} ">
            {!! Form::label('status','Stato della TV:',['class' => 'control-label']) !!} <br>
            {!! Form::radio('status','monted') !!} <i class="fa fa-wrench"></i> Da Smontare &nbsp; &nbsp;
            {!! Form::radio('status','unmonted', true) !!} Smontato <br>
            @if ($errors->has('status'))
                <span class="help-block" style="color:#A94442">
                        <strong><i class="fa fa-exclamation-triangle"></i>
                            {{ $errors->first('status') }}</strong>
                </span>
            @endif  
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group{{ $errors->has('image_file') ? 'has-error' : '' }}">
            {!! Form::label('image_file','Seleziona Immagine',['class' => 'control-label']) !!} <br>
            <span class="btn btn-default btn-file">
                {!! Form::file('image_file', null) !!} 
                @if ($errors->has('image_file'))
                <span class="help-block" style="color:#A94442">
                        <strong><i class="fa fa-exclamation-triangle"></i>
                            {{ $errors->first('image_file') }}</strong>
                </span>
                @endif 
            </span> 
        </div> 
    </div>
</div>

<div class="row bg-warning">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('main','Mainboard',['class' => 'control-label']) !!}
                    {!! Form::text('main',null,['class' => 'form-control', 'placeholder' => 'MainBoard',
                        'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Main']) !!}
                </div>
            </div>    
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">  
                        {!! Form::label('main_nr','Box',['class' => 'control-label']) !!}
                        {!! Form::text('main_nr',null,['class' => 'form-control', 'size' => '2','placeholder' => '',
                            'data-toggle' => 'tooltip', 'title' => 'Numero']) !!} 
                </div>            
            </div>  
        </div>
    </div>     
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('inverter','Inverter / Y-Buffer',['class' => 'control-label']) !!}
                    {!! Form::text('inverter',null,['class' => 'form-control','placeholder' => 'Inverter / Y-Buffer',
                            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Inverter']) !!}
                </div>
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('inverter_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('inverter_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                            'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>                
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('power_supply','Alimentatore',['class' => 'control-label']) !!}
                    {!! Form::text('power_supply',null,['class' => 'form-control','placeholder' => 'Alimentatore',
                    'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Alimentatore']) !!}
                </div>
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('power_supply_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('power_supply_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>        
        </div>
    </div> 
</div>

<div class="row bg-info">
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('power_supply_alt','Alim. Alt.',['class' => 'control-label']) !!}
                    {!! Form::text('power_supply_alt',null,['class' => 'form-control','placeholder' => 'Alimentatore Alt.',
                        'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Alimentatore Alt.']) !!}
                </div>
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('power_supply_alt_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('power_supply_alt_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!} 
                </div>        
            </div> 
        </div>       
    </div> 
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('t_con','T_Con',['class' => 'control-label']) !!}
                    {!! Form::text('t_con',null,['class' => 'form-control','placeholder' => 'T_Con',
                            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'T_Con']) !!}
                </div>            
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('t_con_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('t_con_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>   
        </div> 
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('y_sus','Y-Sus',['class' => 'control-label']) !!}
                    {!! Form::text('y_sus',null,['class' => 'form-control','placeholder' => 'Y-Sus',
                            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Y-Sus']) !!}
                </div>            
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('y_sus_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('y_sus_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>   
        </div> 
    </div>
</div>    
<div class="row bg-danger">    
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('z_sus','Z-Sus',['class' => 'control-label']) !!}
                    {!! Form::text('z_sus',null,['class' => 'form-control','placeholder' => 'Z-Sus',
                            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Z-Sus']) !!}
                </div>            
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('z_sus_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('z_sus_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>   
        </div> 
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('buffer_board','Buffer Board',['class' => 'control-label']) !!}
                    {!! Form::text('buffer_board',null,['class' => 'form-control','placeholder' => 'Buffer Board',
                            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'T_Con']) !!}
                </div>            
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('buffer_board_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('buffer_board_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>   
        </div> 
    </div>
    <div class="col-md-4">
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                    {!! Form::label('sgnl','Signal',['class' => 'control-label']) !!}
                    {!! Form::text('sgnl',null,['class' => 'form-control','placeholder' => 'Signal',
                            'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'T_Con']) !!}
                </div>            
            </div>
            <div class="col-md-4" style="margin-left: -25px">
                <div class="form-group">
                    {!! Form::label('sgnl_nr','Box',['class' => 'control-label']) !!}
                    {!! Form::text('sgnl_nr',null,['class' => 'form-control', 'size' => '2', 'placeholder' => '',
                        'data-toggle' => 'tooltip', 'title' => 'Numero']) !!}
                </div>        
            </div>   
        </div> 
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        Nota: 
        <div class="form-group">
            {!! Form::textarea('note',null,['size' => '100x1', 'class' => 'form-control']) !!}
        </div>    
    </div>
</div>

