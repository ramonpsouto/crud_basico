<x-layout>
    <form method="post" action="{{route('produtos.store')}}">
        @csrf
        @method('post')
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
        <div>
            <label for="custo">Custo</label>
            <input type="text" name="custo">
        </div>
        <div>
            <label for="preco">Preço</label>
            <input type="text" name="preco">
        </div>
        <div>
            <label for="quantidade">Quantidade</label>
            <input type="text" name="quantidade">
        </div>
        <button type="submit">Enviar</button>
    </form>
</x-layout>