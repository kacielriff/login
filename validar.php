<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso</title>

    <style>
        /* Fontes */

        @font-face {
            font-family: Poppins-Regular;
            src: url(../fonts/Poppins/Poppins-Regular.ttf);
        }

        html {
            height: 100vh;
            font-family: Poppins-Regular, sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        body {
            display: flex;
            background: rgb(30, 52, 139);
            background: linear-gradient(135deg, rgba(30, 52, 139, 1) 0%, rgba(73, 201, 228, 1) 100%);
            height: 100vh;
            margin: 0;
            font-family: Poppins-Regular, sans-serif;
        }

        .mensagem {
            background-color: transparent;
            color: #EAEAEA;
            padding: 20px;
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $credenciais = [
            [
                'email' => 'usuario1@exemplo.com',
                'password' => 'senha1',
            ],
            [
                'email' => 'usuario2@exemplo.com',
                'password' => 'senha2',
            ],
        ];

        $email = $_POST['email'];
        $password = $_POST['password'];

        foreach ($credenciais as $credential) {
            if ($credential['email'] === $email) {
                if ($credential['password'] === $password) {
                    echo '<div class="mensagem"><h2>Login aprovado! Bem-vindo, ' . $email . '</h2></div>';
                    exit;
                } else {
                    echo '<div class="mensagem"><h2>Senha incorreta</h2></div>';
                    exit;
                }
            }
        }

        echo '<div class="mensagem"><h2>Usuário não encontrado</h2></div>';
    }
    ?>
</body>
</html>