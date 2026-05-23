<label>Nome</label>
<br>
<input type="text"
name="nome"
value="{{ $linha->nome ?? old('nome') }}">

<br><br>

<label>Celular</label>
<br>
<input type="text"
name="celular"
value="{{ $linha->celular ?? old('celular') }}">

<br><br>

<label>Imagem</label>
<br>
<input type="file" name="arquivo">

<br><br>

<label>Curso</label>
<br>
<select name="id_curso">

@foreach($cursos as $curso)

<option value="{{ $curso->id }}"

@if(isset($linha) && $linha->id_curso == $curso->id)
selected
@endif

>
    {{ $curso->titulo }}
</option>

@endforeach

</select>

<br><br>

