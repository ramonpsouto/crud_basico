<x-layout>
    <form method="post" action="{{route('filmes.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulo">
        </div>
        <div>
            <label for="diretor">Diretor</label>
            <input type="text" name="diretor">
        </div>
        <div>
            <label for="ano">Ano</label>
            <input type="text" name="ano">
        </div>
        <button type="submit">Enviar</button>
    </form>
</x-layout>