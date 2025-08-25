<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login - Castelo Encantado</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/danca.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Great Vibes', cursive;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            backdrop-filter: brightness(0.8);
        
        }
        .container {
            background-color: rgba(255,255,255,0.9);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
        h1 {
            font-size: 2.5em;
            color: #ECD36E;
        }
        input {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 15px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
         button {
          background-color: #93b7caff;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        button:hover {
            background-color: #011526;
            transform: scale(1.05);
        }
        a {
            display: block;
            margin-top: 15px;
            font-size: 0.9em;
            color: #333;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Entrar no castelo</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
            <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
        </form>
    </div>
</body>
</html>
