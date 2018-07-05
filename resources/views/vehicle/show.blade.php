@extends('layout.template')

@section('content')

<div class="col-md-10 col-md-offset-1 container">
    <h1>Vehicle: {{ $vehicle->model }}</h1>
    
    <label> Create at: {{ $vehicle->created_at }}</label> <br>
    <label> Update at: {{ $vehicle->updated_at }}</label>

    <hr>	
    
    

    <a href="{{ route('vehicle.index') }}" class="btn btn-warning">Back</a>
    <a href="{{ route('vehicle.edit', $vehicle->id) }}" class="btn btn-primary">Edit</a>

    <div class="pull-right">        
        {!! Form::open([
        'method' => 'DELETE',
        'route' => ['vehicle.destroy', $vehicle->id]
        ]) !!}
        {!! Form::submit('Delete this Vehicle?', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}        
    </div>    
</div>
@stop