@extends('layouts.app')

@section('title', 'Edição')

@section('content')
    <div class="container mt-5">
        <h1>Editar Registro</h1>
        <hr>
        <form action="{{route('turismo.update', ['id'=>$pessoas->id])}}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">
            <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $pessoas->nome }}" placeholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="rg">RG:</label>
                    <input type="text" class="form-control" name="rg" value="{{ $pessoas->rg }}" placeholder="Digite o RG...">
                </div>
                <br>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="text" class="form-control" name="telefone" value="{{ $pessoas->telefone }}" placeholder="Digite o telefone...">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" name="submit" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
@endsection

