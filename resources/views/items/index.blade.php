<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Itens</title>
</head>
<body>
    <h1>Itens</h1>
    <a href="{{ route('items.create') }}">Criar Novo Item</a>
    <ul>
        @foreach($itens as $item)
            <li>
                {{ $item['nome'] }} - {{ $item['descricao'] }}
                <a href="{{ route('items.show', $item['id']) }}">Ver</a>
                <a href="{{ route('items.edit', $item['id']) }}">Editar</a>
                <form action="{{ route('items.destroy', $item['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
