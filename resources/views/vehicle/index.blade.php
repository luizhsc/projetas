@extends('layout.template')

@section('content')

<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Brand</th>                                         
                <th class="text-center">Color</th>                                         
                <th class="text-center">Year</th>
                <th class="text-center">Price</th>
                <th class="text-center">Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculo as $veiculo)
            <tr>			
                <td class="text-center">{{ $veiculo->id }}</td>
                <td class="text-center">{{ $veiculo->brand }}</td>
                <td class="text-center">{{ $veiculo->color }}</td>
                <td class="text-center">{{ $veiculo->year }}</td>
                <td class="text-center">{{ $veiculo->price }}</td>
                <td class="text-center">{{ $veiculo->type }}</td>
                <td class="text-center">														
                    <a href="{{ route('vehicle.show', $veiculo->id) }}" class="btn btn-info">View Detail</a>
                </td>							
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop