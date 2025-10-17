<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dados Recebidos</title>

    <style>
        body {
            background-color: black;
            color: white;
            font-family: 'Perpetua';
            margin: 20px;
        }
        fieldset {
            margin-bottom: 15px;
            padding: 10px;
        }
        legend {
            font-weight: bold;
        }
        .valor {
            color: #00ff99;
        }
    </style>
</head>

<body>
    <h1>📋 Dados Recebidos do Formulário</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<fieldset><legend>Dados Gerais</legend>";
        echo "<p><b>Nome:</b> <span class='valor'>" . htmlspecialchars($_POST['nome']) . "</span></p>";
        echo "<p><b>Data de Nascimento:</b> <span class='valor'>" . htmlspecialchars($_POST['data_de_nascimento']) . "</span></p>";
        echo "<p><b>CPF:</b> <span class='valor'>" . htmlspecialchars($_POST['cpf']) . "</span></p>";
        echo "<p><b>Telefone/Celular:</b> <span class='valor'>" . htmlspecialchars($_POST['tel']) . "</span></p>";
        echo "</fieldset>";

        echo "<fieldset><legend>Endereço</legend>";
        echo "<p><b>Tipo:</b> <span class='valor'>" . htmlspecialchars($_POST['tipo_endereco']) . "</span></p>";
        echo "<p><b>Logradouro:</b> <span class='valor'>" . htmlspecialchars($_POST['endereco']) . "</span></p>";
        echo "<p><b>Número:</b> <span class='valor'>" . htmlspecialchars($_POST['num_end']) . "</span></p>";
        echo "<p><b>Complemento:</b> <span class='valor'>" . htmlspecialchars($_POST['complemento']) . "</span></p>";
        echo "</fieldset>";

        echo "<fieldset><legend>Fale Conosco</legend>";
        echo "<p><b>Mensagem:</b><br><span class='valor'>" . nl2br(htmlspecialchars($_POST['msg'])) . "</span></p>";
        echo "</fieldset>";

        echo "<fieldset><legend>Forma de Resposta</legend>";
        echo "<p><b>Preferência:</b> <span class='valor'>" . htmlspecialchars($_POST['forma_resposta']) . "</span></p>";
        echo "</fieldset>";

    } else {
        echo "<p>Nenhum dado foi enviado.</p>";
    }
    ?>

    <a href="index.html" style="color:#00ff99;">⬅ Voltar ao formulário</a>
</body>
</html>
