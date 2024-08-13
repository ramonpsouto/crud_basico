<x-layout>
    <form method="post" action="{{route('produtos.destroy', ['produto' => $produto])}}">
        @csrf
        @method('delete')
        <p>Tem certeza que deseja deletar esse produto?</p>
        <span>Nome: {{$produto->nome}}</span>
        <div>
            <button type="submit">Sim</button>
        </div>
    </form>
</x-layout>