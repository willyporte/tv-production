{!! Form::model(Request::only(['search']),['route' => 'tv.index', 'method' => 'GET', 'class' => 'navbar-form navbar-left', 'role' => 'form']) !!}
    <div class="form-group">
        {!! Form::text('search',null,['class' => 'form-control', 'placeholder' => 'Cerca ...']) !!}
    </div>
    <button type="submit" class="btn btn-default">
        <span class="glyphicon glyphicon-search"></span>
    </button>
{!! Form::close() !!}