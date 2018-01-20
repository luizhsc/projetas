@extends('layout.template')

@section('content')

<div class="col-md-10 col-md-offset-1 container">
    <h1>Veiculo: {{ $veiculo->modelo}}</h1>

    <hr>	

    <a href="{{ route('veiculo.index') }}" class="btn btn-warning">Back</a>
    <a href="{{ route('veiculo.edit', $veiculo->id) }}" class="btn btn-primary">Edit</a>

    <div class="pull-right">        
        {!! Form::open([
        'method' => 'DELETE',
        'route' => ['veiculo.destroy', $veiculo->id]
        ]) !!}
        {!! Form::submit('Delete this Veiculo?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}        
    </div>    
</div>
@stop