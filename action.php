<?php
    /*
    - Não consegui implementar uma função de erro do tipo $pg_result_erro() ou similar, ver <https://www.php.net/manual/en/function.pg-result-error>
    
    - Sobre a unicidade do email, eu decidi utilizar uma constraint UNIQUE na coluna email na tabela usuarios no DB, assim o DB aceita somente um email cadastrado, mas no php eu estabeleci uma verificação de email já cadastrado e uma validação se o email realmente foi cadastrado.    
    */ 

    session_start(); # ver <https://www.php.net/manual/en/function.session-start.php>
    unset($_SESSION['msg']); #limpa a variável

    # var
    # Sobre POST <https://www.php.net/manual/en/reserved.variables.post.php>
    $button_submit = $_POST['button_submit']; #variável do "clique do botão"
    if(isset($button_submit)):
        
        $email = $_POST['email']; #Email do usuário
        $password = $_POST['password']; #Senha do usuário
        $password = md5($password); # criptografia de senhas, ver <https://www.php.net/manual/en/function.md5.php>

        #Conexão com o banco de dados postgresql
        $conn_string = "host=localhost port=5432 dbname=dbbft user=postgres password=1234";
        $connection = pg_connect($conn_string); # se a conexão falhar me retorna false, interessante para msg de erro, ver <https://www.php.net/manual/en/function.pg-connect>
        if($connection == false):
            $_SESSION['msg'] = "Falha ao se conectar ao servidor."; # ver sobre $_SESSION <https://www.php.net/manual/en/reserved.variables.session.php>

        endif;

        #Verificando se o email já existe no DB
        $user_select = "SELECT email FROM usuarios WHERE email='$email';";
        $query_select = pg_query($connection, $user_select);
        $user_validation = pg_fetch_row($query_select);
        if($user_validation[0] === $email): # XXX: apareceu um erro no log do apache "Trying to access array offset on value of type bool in /home/olatejulian/testebft/action.php on line 31, referer: http://localhost/index.php" quando utilizei ==, para === nenhuma msg apareceu.
            $_SESSION['msg'] = "Email já cadastrado!";
        else:

            #Input de dados no DB
            $user_insert = "INSERT INTO usuarios (email, senha) VALUES ('$email', '$password');";
            $query_insert = pg_query($connection, $user_insert);
            if(!$query_insert):

                $_SESSION['msg'] = "Erro ao cadastrar!";
            else:

                #Validação do cadastro 
                $cadastro_select = "SELECT email FROM usuarios WHERE email='$email';";
                $cadastro_query_select = pg_query($connection, $cadastro_select);
                $cadastro_validation = pg_fetch_row($cadastro_query_select); #ver <https://www.php.net/manual/en/function.pg-fetch-row>
                if(isset($cadastro_validation)):
                    pg_close($connection); # fecha conexão com o banco de dados, ver <https://www.php.net/manual/en/function.pg-close.php>
                else:
                    $_SESSION['msg'] = "Houve um problema com o seu cadastro! Caso seu problema persista procure atendimento em: (00)0000-0000";
                    pg_close($connection);
            endif;
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
                    #echo "Email: $email, Senha: $password"; #OK
                    echo "Seu Email $cadastro_validation[0] foi cadastrado com sucesso!";
                endif;
            ?>
        </div>

    </body>
</html>