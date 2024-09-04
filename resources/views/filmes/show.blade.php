<x-layout>
    <div>
        <label for="titulo">Titúlo</label>
        <input type="text" name="titulo" value="{{$filme->titulo}}" disabled>
    </div>
    <div>
        <label for="diretor">Diretor</label>
        <input type="text" name="diretor" value="{{$filme->diretor}}" disabled>
    </div>
    <div>
        <label for="ano">Ano</label>
        <input type="text" name="ano" value="{{$filme->ano}}" disabled>
    </div>
</x-layout>