<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/rosa.avif');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            font-family: 'Great Vibes', cursive;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            backdrop-filter: brightness(0.8);
            color: #fff;
        }

        h1 {
            font-size: 3em;
            color: #ECD36E;
            text-shadow: 2px 2px 5px #000;
        }

        p {
            font-size: 1.5em;
            margin-top: 20px;
        }

        a {
            background-color: #93b7caff;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        a:hover {
            background-color: #011526;
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <h1>Bem-vindo ao castelo encantado</h1>
    <p>Você está logado com sucesso!</p>
    <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Sair
    </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</body>
</html>
