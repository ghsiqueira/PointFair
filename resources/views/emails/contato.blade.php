<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nova mensagem de contato</title>
</head>
<body>
    <h2>Nova mensagem de contato</h2>
    <p><strong>Nome:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Mensagem:</strong> {{ $data['message'] }}</p>
</body>
</html>