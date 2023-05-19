<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nova mensagem de contato</title>
</head>
<body>
    <h2>Nova mensagem de contato</h2>

    <p><strong>Nome:</strong> {{ $emailData['name'] }}</p>
    <p><strong>Email:</strong> {{ $emailData['email'] }}</p>
    <p><strong>Mensagem:</strong> {{ $emailData['message'] }}</p>
</body>
</html>