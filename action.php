<?php
    /*
    - Não consegui implementar uma função de erro do tipo $pg_result_erro() ou similar, ver <https://www.php.net/manual/en/function.pg-result-error>
    - FIXME: EU ESCREVI UNIQUE NA SENHA!!!! ('-.-) (vou arrumar no python) FIXED!
    
    */ 

    session_start(); # ver <https://www.php.net/manual/en/function.session-start.php>
    unset($_SESSION['msg']); #limpa a variável

    # var
    # Sobre POST <https://www.php.net/manual/en/reserved.variables.post.php>
    $button_submit = $_POST['button_submit'];
    if(isset($button_submit)):
        
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password); # criptografia de senhas, ver <https://www.php.net/manual/en/function.md5.php>

        #Conexão com o banco de dados postgresql
        $conn_string = "host=localhost port=5432 dbname=dbbft user=postgres password=1234";
        $connection = pg_connect($conn_string); # se a conexão falhar me retorna false, interessante para msg de erro, ver <https://www.php.net/manual/en/function.pg-connect>
        if($connection == false):
        $_SESSION['msg'] = "Falha ao se conectar ao servidor."; # ver sobre $_SESSION <https://www.php.net/manual/en/reserved.variables.session.php>
        endif;
    
        $user_insert = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$password');";
        $query_insert = pg_query($connection, $user_insert);
        if(!$query_insert):
            $_SESSION['msg'] = "Erro em cadastrar";
        endif;

        

    endif;

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
                if(isset($_SESSION['msg'])):
                    header("Location: index.php"); # envia-me para um página determinada, ver <https://www.php.net/manual/en/function.header>
                else:
                    echo "Email: $email, Senha: $password"; #OK
                endif;
            ?>
        </div>

    </body>
</html>