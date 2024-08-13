<x-layout>
    <form method="post" action="{{route('produtos.update', ['produto' => $produto])}}">
        @csrf
        @method('put')
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{$produto->nome}}">
        </div>
        <div>
            <label for="custo">Custo</label>
            <input type="text" name="custo" value="{{$produto->custo}}">
        </div>
        <div>
            <label for="preco">Preço</label>
            <input type="text" name="preco" value="{{$produto->preco}}">
        </div>
        <div>
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade" value="{{$produto->quantidade}}">
        </div>
        <button type="submit">Enviar</button>
    </form>
</x-layout>