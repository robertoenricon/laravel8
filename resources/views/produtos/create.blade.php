@extends('layouts.template')
@section('title', 'Criação de Produtos')
@section('content')
<h1>Página Criação de Produtos</h1>
<div class="container">
  <form method="POST" action="{{route('produtos.insert')}}">
    @csrf
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="nome">Nome
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="valor">Valor
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="estoque">Estoque
    </div>
    <div class="mb-3">
      <input type="text" class="form-control" id="" name="descricao">Descricao
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection