<?php
$msg = 0;
@$msg = $_REQUEST['msg'];
?>

<!doctype html>
<html>
<head>
        <meta charset="utf-8">
        <title>Formulário</title>
    </head>

    <body>
        <?php if($msg==enviado): ?>
            <h1>Mensagem enviada, agradecemos o seu contato!</h1>
        <fieldset>
            <legend><h3>Formulário de Contato</h3></legend>
            <form action="processaForm.php" method="post">
                <label for="nome"> Nome: </label><br>
                <input id="nome" name="nome" type="text" required><br>
                <label for="telefone"> Telefone: </label><br>
                <input id="telefone" name="telefone" type="tel" required><br>
                <label for="email"> Email: </label><br>
                <input id="email" name="email" type="email" required><br>
                <label for="assunto"> Mensagem: </label><br>
                <textarea name="assunto" id="assunto"> </textarea><br>
                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>
