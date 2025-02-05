<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Item</title>
</head>
<body>
    <h1>Editar Item</h1>
    <form action="{{ route('items.update', $item['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $item['nome'] }}" required><br><br>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" value="{{ $item['descricao'] }}" required><br><br>
        <button type="submit">Atualizar</button>
    </form>
    <a href="{{ route('items.index') }}">Voltar</a>
</body>
</html>
