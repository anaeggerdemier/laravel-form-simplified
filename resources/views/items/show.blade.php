<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Ver Item</title>
</head>
<body>
    <h1>Detalhes do Item</h1>
    <p>Nome: {{ $item['nome'] }}</p>
    <p>Descrição: {{ $item['descricao'] }}</p>
    <a href="{{ route('items.index') }}">Voltar</a>
</body>
</html>
