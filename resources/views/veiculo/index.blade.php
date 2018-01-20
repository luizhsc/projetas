@extends('layout.template')

@section('content')

<div class="container">

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Marca</th>                                         
                <th class="text-center">Cor</th>                                         
                <th class="text-center">Ano</th>
                <th class="text-center">Preço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($veiculo as $veiculo)
            <tr>			
                <td class="text-center">{{ $veiculo->id }}</td>
                <td class="text-center">{{ $veiculo->marca }}</td>
                <td class="text-center">{{ $veiculo->cor }}</td>
                <td class="text-center">{{ $veiculo->ano }}</td>
                <td class="text-center">{{ $veiculo->preco }}</td>
                <td class="text-center">														
                    <a href="{{ route('veiculo.show', $veiculo->id) }}" class="btn btn-info">View Detail</a>
                </td>							
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop