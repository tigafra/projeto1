<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minha Página Simples</title>

    <style>
        /* Estilização simples */
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: blue;
        }

        h2 {
            color: green;
        }

        p {
            color: black;
            font-size: 18px;
        }

        div {
            background-color: white;
            width: 60%;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
        }

        a {
            color: red;
            text-decoration: none;
        }

        a:hover {
            color: orange;
        }
    </style>
</head>

<body>

    <div>
        <h1>PÁGINA OFICIAL</h1>

        <h2>Projetinho Básico</h2>

        <p>Este parágrafo é pra demonstrar o uso da tag p.</p>

        <a href="https://ifto.edu.br" target="_blank">
            Visitar página do IFTO
        </a>

        <br><br>

        <?php
            // código PHP
            $nome = "John"; // variável
            echo "Meu nome é " . $nome; // mostrar na tela
        ?>

    </div>

</body>
</html>