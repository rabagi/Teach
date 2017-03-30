@extends('layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-ms-8 col-md-offset-2">
            <h3>Nueva solicitud</h3>
            @include('partials/errors')
            {!! Form::open(['route' => 'tickets.store', 'method' => 'POST']) !!}
                <div class="form-group">
                    {!! Form::label('title', 'Titulo') !!}
                    {!! Form::textarea('title', null,[
                        
                    'rows' => 2,
                    'class' => 'form-control',
                    'placeholder' => 'Describe de que tema quieres que trate ....',
                    
                    
                    ]) 
                    !!}

                </div>
                
                <p>
                    <button type="submit" class="btn btn-primary">Enviar solicitud</button>
                </p>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection