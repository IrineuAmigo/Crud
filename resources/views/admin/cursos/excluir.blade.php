@extends('layout.site')
@section('titulo','Adicionar Cursos')
@section('conteudo')   

<div class='container'>
    <h3 class='center'>Excluir Curso</h3>
    <div class='row'>
        <form action="{{ route('admin.cursos.excluir',$linha->id) }}" method="post" enctype="multipart/form-data">
            {{@csrf_field}} 
            <p>Deseja realmente excluir o curso <b>{{ $linha->titulo }}</b>?</p>
            <button class='btn red'>Excluir</button>
            <a href="{{ route('admin.cursos') }}" class='btn blue'>Cancelar</a>
        </form> 
    </div>  
</div>
@endsection
