@extends('layout.template')

@section('content')
<div class="col-md-10 col-md-offset-1 container">

    <h1 class="text-primary">Create new Vehicle</h1>
    <hr>
    
    {!! Form::open(array('route' => 'vehicle.store', 'class' => 'form')) !!}
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    
    <div class="form-group">			
        {!! Form::text('brand', null,
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Brand')) !!}
    </div>
    
    <div class="form-group">			
        {!! Form::text('model', null,
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Model')) !!}
    </div>
    
    
    <div class="form-group">                
        <select name="color" class="form-control">
            <option value="Black">Black</option>
            <option value="Silver">Silver</option>
            <option value="Red">Red</option>
            <option value="Blue">Blue</option>
        </select>
    </div>
    
    
    <div class="form-group">			
        {!! Form::text('year', null,
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Year')) !!}
    </div>
    
    
    <div class="form-group">			
        {!! Form::text('price', null,
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Price')) !!}
    </div>
    
    <div class="form-group">			
        {!! Form::text('descicao', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Description')) !!}
    </div>
    
     <div class="form-group">                
        <select name="type" class="form-control">
            <option value="0">New</option>
            <option value="1">Used</option>
        </select>
    </div>
    
    
    <hr>

    <div class="form-group">
        <a href="{{ route('vehicle.index') }}" class="btn btn-warning">Back</a>
        {!! Form::submit('Save', 
        array('class'=>'btn btn-primary')) !!}

    </div>


    {!! Form::close() !!}






</div>


@stop