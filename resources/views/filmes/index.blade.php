<x-layout>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titúlo</th>
                <th>Diretor</th>
                <th>Ano</th>
                <th>Ver</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($filmes as $filme)
                <tr>
                    <td>{{$filme->id}}</td>
                    <td>{{$filme->titulo}}</td>
                    <td>{{$filme->diretor}}</td>
                    <td>{{$filme->ano}}</td>
                    <td><a href="{{route('filmes.show', ['filme' => $filme])}}">Ver</a></td>
                    <td><a href="{{route('filmes.edit', ['filme' => $filme])}}">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('filmes.create')}}">Novo filme</a>
</x-layout>