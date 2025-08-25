<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>A Bela e a Fera - Bem-vindo</title>

    {{-- Fonte romântica --}}
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-image: url('img/rosa.jpg'); /* coloque sua imagem em public/img/rosa.jpg */
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
        }

        h1 {
            color: #ECD36E;
            font-size: 4em;
            text-shadow: 2px 2px 5px #000;
            margin-bottom: 40px;
        }

        .btn-container {
            display: flex;
            gap: 20px;
        }

        .btn {
            background-color: #93b7caff;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 1.2em;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .btn:hover {
            background-color: #011526;
            transform: scale(1.05);
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Seja bem-vindo ao reino encantado</h1>

    <div class="btn-container">
        <a href="{{ route('login') }}"><button class="btn">Entrar</button></a>
        <a href="{{ route('register') }}"><button class="btn">Cadastrar</button></a>
    </div>
</body>
</html>
