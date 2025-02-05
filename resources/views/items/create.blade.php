<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criar Novo Item</title>
</head>
<body>
    <h1>Criar Novo Item</h1>
    <form action="{{ route('items.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br><br>
        <label for="descricao">Descrição:</label>
        <input type="text" name="descricao" id="descricao" required><br><br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('items.index') }}">Voltar</a>
</body>
</html>
