<?php

# var
# Sobre POST <https://www.php.net/manual/en/reserved.variables.post.php>
$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password); # Criptografia de senhas, ver <https://www.php.net/manual/en/function.md5.php>




?>

<!DOCTYPE html>

<html lang='pt-br'>

    <head>

        <meta charset='utf-8'>

        <title>TESTE BACKEND BFT</title>
    </head>

    <body>

        <div>
            <h1 name='title'>Validação</h1>
        </div>

        <div>
            <?php
                echo "Email: $email, Senha: $password"; #OK!
            ?>
        </div>

    </body>
</html>