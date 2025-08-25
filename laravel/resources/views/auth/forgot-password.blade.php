<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Redefinir Senha - A Bela e a Fera</title>

    <!-- Fonte romântica -->
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

        .form-container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 320px;
        }

        h1 {
            font-size: 2.5em;
            color: #ECD36E;
            margin-bottom: 20px;
            text-align: center;
        }

        input, button {
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1em;
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

        .error {
            color: red;
            font-size: 0.9em;
            margin-top: -5px;
            width: 100%;
            text-align: left;
        }

        .status {
            color: green;
            font-weight: bold;
            margin-bottom: 15px;
            width: 100%;
            text-align: left;
        }

        a {
            display: block;
            margin-top: 15px;
            font-size: 0.9em;
            color: #333;
            text-decoration: underline;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Redefinir Senha</h1>

        @if(session('status'))
            <div class="status">{{ session('status') }}</div>
        @endif

        <form method="POST" action="{{ route('password.update') }}" style="width: 100%;">
            @csrf

            <!-- email -->
            <input type="email" name="email" placeholder="Seu e-mail encantado" value="{{ old('email') }}" required autofocus>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <!-- nova senha -->
            <input type="password" name="password" placeholder="Nova senha mágica" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <!-- confirmação da senha -->
            <input type="password" name="password_confirmation" placeholder="Confirmar nova senha" required>

            <button type="submit">Redefinir Agora</button>
        </form>

        <a href="{{ route('login') }}">Voltar para o portão</a>
    </div>
</body>
</html>
