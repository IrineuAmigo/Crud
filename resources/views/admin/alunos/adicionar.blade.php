

@extends('layout.site')
@section('titulo','Adicionar Aluno')
@section('conteudo')    


@include('admin.alunos._cabecalho')

<h1>Adicionar Aluno</h1>

<form action="{{ route('admin.alunos.salvar') }}"
method="POST"
enctype="multipart/form-data">

    @csrf

    @include('admin.alunos._form')

    <button type="submit">
        Salvar
    </button>

</form>


@include('admin.alunos._rodape')