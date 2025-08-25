<!DOCTYPE html>
<html>
<head>
    <title>Esqueceu a senha</title>
</head>
<body>
    <h1>Esqueceu a senha? Informe seu e-mail</h1>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <input type="email" name="email" placeholder="E-mail">
        <button type="submit">Enviar e-mail de recuperação</button>
    </form>
</body>
</html>