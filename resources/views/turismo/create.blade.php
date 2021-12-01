@extends('layouts.app')

@section('title', 'Criação')

@section('content')
    <div class="container mt-5">
        <h1>Crie um Novo Registro</h1>
        <hr>
        <form action="{{route('turismo.store')}}" method="POST">
        @csrf
            <div class="form-group">
            <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" name="rg" placeholder="Digite o RG...">
                </div>
                <br>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" placeholder="Digite o telefone...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="submit">
                </div>
            </div>
        </form>
    </div>
@endsection

