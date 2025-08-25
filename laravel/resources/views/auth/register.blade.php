<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro - A Bela e a Fera</title>

    {{-- Fonte romântica --}}
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
            text-align: center;
            width: 300px;
        }

        h1 {
            font-size: 2.5em;
            color: #ECD36E;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
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
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Cadastre-se</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" required>
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror

            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror

            <input type="password" name="password" placeholder="Senha" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror

            <input type="password" name="password_confirmation" placeholder="Confirmar Senha" required>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
