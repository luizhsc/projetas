@extends('layout.template')

@section('content')


<div class="col-md-10 col-md-offset-1 container">
    <h1>Edit Vehicle: {{ $veiculo->model }} </h1>

    <hr>

    {!! Form::model($veiculo, ['method' => 'PUT','route' => ['vehicle.update', $veiculo->id]]) !!}

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="form-group">
        {!! Form::label('brand', 'Brand:', ['class' => 'control-label']) !!}
        {!! Form::text('brand', null, ['class' => 'form-control']) !!}
    </div>    

    <div class="form-group">
        {!! Form::label('model', 'Model:', ['class' => 'control-label']) !!}
        {!! Form::text('model', null, ['class' => 'form-control']) !!}
    </div>
    
    
    <div class="form-group">    
        {!! Form::label('color', 'Color:', ['class' => 'control-label']) !!}
        
        <select name="color" class="form-control">
            <option value="Black">Black</option>
            <option value="Silver">Silver</option>
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
        </select>
    </div>
    
     <div class="form-group">
        {!! Form::label('year', 'Year:', ['class' => 'control-label']) !!}
        {!! Form::text('year', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('price', 'Price:', ['class' => 'control-label']) !!}
        {!! Form::text('price', null, ['class' => 'form-control']) !!}
    </div>
    
    
    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>
    
    
    <div class="form-group">   
        {!! Form::label('type', 'Type:', ['class' => 'control-label']) !!}
        <select name="type" class="form-control">
            <option value="0">New</option>
            <option value="1">Used</option>
        </select>
    </div>
    
    
    
    <div class="form-group">
        <a href="{{ route('vehicle.index') }}" class="btn btn-warning">Back</a>
        {!! Form::submit('Update Vehicle    ', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


</div>
@stop