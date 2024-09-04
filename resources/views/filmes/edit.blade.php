<x-layout>
    <form method="post" action="{{route('filmes.update', ['filme' => $filme])}}">
        @csrf
        @method('put')
        <div>
            <label for="titulo">Titúlo</label>
            <input type="text" name="titulo" value="{{$filme->titulo}}">
        </div>
        <div>
            <label for="diretor">Diretor</label>
            <input type="text" name="diretor" value="{{$filme->diretor}}">
        </div>
        <div>
            <label for="ano">Ano</label>
            <input type="text" name="ano" value="{{$filme->ano}}">
        </div>
        <button type="submit">Enviar</button>
    </form>
</x-layout>