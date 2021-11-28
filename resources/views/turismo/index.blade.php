@extends('layouts.app')

@section('title', 'Lista')

@section('content')
    <h1>Listagem de Pessoas</h1>

    <table class="table">
    <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">RG</th>
      <th scope="col">Telefone</th>
      </tr>
    </thead>
    <tbody>
        @foreach($pessoas as $pessoa)
            <tr>
                <th>{{ $pessoa->id }}</th>
                <td>{{ $pessoa->nome }}</td>
                <td>{{ $pessoa->rg }}</td>
                <td>{{ $pessoa->telefone }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>


@endsection

