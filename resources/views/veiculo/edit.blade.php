@extends('layout.template')

@section('content')


<div class="col-md-10 col-md-offset-1 container">
    <h1>Edit Veiculo: {{ $veiculo->modelo }} </h1>

    <hr>

    {!! Form::model($veiculo, ['method' => 'PUT','route' => ['veiculo.update', $veiculo->id]]) !!}

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="form-group">
        {!! Form::label('marca', 'Marca:', ['class' => 'control-label']) !!}
        {!! Form::text('marca', null, ['class' => 'form-control']) !!}
    </div>    

    <div class="form-group">
        {!! Form::label('modelo', 'Modelo:', ['class' => 'control-label']) !!}
        {!! Form::textarea('modelo', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        <a href="{{ route('veiculo.index') }}" class="btn btn-warning">Back</a>
        {!! Form::submit('Update Veiculo    ', ['class' => 'btn btn-primary']) !!}    
    </div>
    {!! Form::close() !!}


</div>
@stop