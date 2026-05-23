@include('admin.cursos._cabecalho')

<h1>Editar Aluno</h1>

<form action="{{ route('admin.alunos.atualizar', $linha->id) }}"
method="POST"
enctype="multipart/form-data">

    @csrf
    @method('PUT')

    @include('admin.alunos._form')

    <button type="submit">
        Atualizar
    </button>

</form>

@include('admin.cursos._rodape')

