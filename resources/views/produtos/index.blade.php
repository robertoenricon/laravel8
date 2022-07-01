@extends('layouts.template')

@section('title', 'Produtos')

@section('content')
<div class="container">
  <h1>Página de Produtos <a href="produtos/inserir" class="btn btn-outline-primary btn-sm">Inserir Produto</a></h1>

  <!-- DataTales Example -->
  <div class="row">
    <div class="card shadow mb-4">

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-hover table-sm" id="dataTable" width="100%">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Valor</th>
                <th>Estoque</th>
                <th>Ações</th>
              </tr>
            </thead>

            <tbody>
              @foreach($produtos as $produto)
              <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->valor}}</td>
                <td>{{$produto->estoque}}</td>
                <td class="d-flex">
                  <a href="produtos/{{$produto->id}}">Visualizar</a>
                  <a href="{{route('produtos.edit', $produto)}}">Editar</a>
                  <form method="POST" action="{{route('produtos.delete', $produto)}}">
                    @csrf
                    @method('delete')
                    <button type="submit">Excluir</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection