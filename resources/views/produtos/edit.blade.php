@extends('layouts.template')
@section('title', 'Edição de Produtos')
@section('content')
<h1>Página de Edição de produto</h1>

<div class="container">
  <form method="POST" action="{{route('produtos.editar', $produto)}}">
    @csrf
    @method('put')
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="nome" value="{{$produto->nome}}">Nome
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="valor" value="{{$produto->valor}}">Valor
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="estoque" value="{{$produto->estoque}}">Estoque
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="descricao" value="{{$produto->descricao}}">Descricao
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection