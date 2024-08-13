<x-layout>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" value="{{$produto->nome}}" disabled>
    </div>
    <div>
        <label for="custo">Custo</label>
        <input type="text" name="custo" value="{{$produto->custo}}" disabled>
    </div>
    <div>
        <label for="preco">Preço</label>
        <input type="text" name="preco" value="{{$produto->preco}}" disabled>
    </div>
    <div>
        <label for="quantidade">Quantidade</label>
        <input type="text" name="quantidade" value="{{$produto->quantidade}}"disabled>
    </div>
</x-layout>