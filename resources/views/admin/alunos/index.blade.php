@include('admin.alunos._cabecalho')

<h1>Lista de Alunos</h1>

<a href="{{ route('admin.alunos.adicionar') }}">
    Adicionar
</a>

<hr>

<table border="1" width="100%">

<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Celular</th>
    <th>Imagem</th>
    <th>Curso</th>
    <th>Ações</th>
</tr>

@foreach($rows as $row)
<tr>
    <td>{{ $row->id }}</td>
    <td>{{ $row->nome }}</td>
    <td>{{ $row->celular }}</td>

    <td>
        <img src="{{ asset($row->imagem) }}" width="80">
    </td>

    <td>
        {{ $row->curso->titulo ?? '' }}
    </td>

    <td>
        <a href="{{ route('admin.alunos.editar', $row->id) }}">
            Editar
        </a>

        |

        <a href="{{ route('admin.alunos.excluir', $row->id) }}">
            Excluir
        </a>
    </td>
</tr>
@endforeach

</table>

@include('admin.alunos._rodape')


