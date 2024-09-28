@extends('layout')
@section('content')

   
         
    <div class="container mt-5">
        <h2>Cadastro de Material Escolar</h2>
        <form method="post" action="{{route('cadastra-Material')}}">
            @csrf
            <div class="form-group">
                <label for="nomeMaterial">Nome do Material</label>
                <input type="text" class="form-control" id="nomeMaterial" name="nomeMaterial" placeholder="Digite o nome do material" required>
            </div>
            <div class="form-group">
                <label for="categoriaMaterial">Categoria do Material</label>
                <input type="text" class="form-control" id="categoriaMaterial" name="categoriaMaterial" placeholder="Digite a categoria" required>
            </div>
            <div class="form-group">
                <label for="dataCompraMaterial">Data da Compra</label>
                <input type="date" class="form-control" id="dataCompraMaterial" name="dataCompraMaterial" required>
            </div>
            <div class="form-group">
                <label for="preco">Preço (R$)</label>
                <input type="number" class="form-control" id="precoMaterial" name="precoMaterial" placeholder="Digite o preço" step="0.01" required>
            </div>
            <div class="text-center">
            <button type="submit" class="btn btn-primary">Cadastrar Material</button>
            </div>
        </form>
    </div>


@endsection