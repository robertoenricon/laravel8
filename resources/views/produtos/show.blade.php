@extends('layouts.template')

@section('title', 'Exibição dos Produtos')

@section('content')
<h1>Página de Exibição dos Produtos</h1>

<h2>Produto selecionado foi o {{$id}} e seu valor é {{$valor}}</h2>


<h2>Vamos buscar por esse produto: <?php echo $produto->nome ?></h2>

<!-- <p><a href="{{route('produtos')}}" class="btn btn-outline-primary btn-sm">Voltar</a></p> -->
<p><a href="<?php echo route('produtos'); ?>" class="btn btn-outline-primary btn-sm">Voltar</a></p>
@endsection