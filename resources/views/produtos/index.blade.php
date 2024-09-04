<x-layout>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Custo</th>
                <th>Preco</th>
                <th>Quantidade</th>
                <th>Ver</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($produtos as $produto)
                <tr>
                    <td>{{$produto->id}}</td>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->custo}}</td>
                    <td>{{$produto->preco}}</td>
                    <td>{{$produto->quantidade}}</td>
                    <td><a href="{{route('produtos.show', ['produto' => $produto])}}">Ver</a></td>
                    <td><a href="{{route('produtos.edit', ['produto' => $produto])}}">Editar</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('produtos.create')}}">Novo produto</a>
</x-layout>