<!--Página index do site teste-->
<?php
/* TODO: Realizar comunicação com banco de dados postgresql utilizando método POST;
        [x] Criar um formulário na página inicial;
        [x] Conexão com banco de dados;
        [x] input de dados usando POST no DB;
                [x] verificar se o email já existe antes;
        [x] validação dos dados através de leitura no DB.

*/
/*
Estrutura do site 
    - página inicial index.php
    - uma página para mostrar que o cadastro foi realizado com sucesso ou que não foi possível cadastrar por algum motivo => action.php

Sobre a funcionalidade do cadastro, os inputs estão configurados em suas tags html como required, logo necessariamente não há como inserir dados nulos, as colunas email e senha na tabela usuarios no DB também estão configuradas como "não nulas", logo não é possível inserir uma linha nula no DB.

A tag do input do email está configurada como tipo "email", ou seja, ela só aceita strings de estrutura "name@email"
*/

session_start();
?>
<!DOCTYPE html>

<html lang='pt-br'>

    <head>

        <meta charset='utf-8'>

        <title>TESTE BACKEND BFT</title>
    </head>

    <body>

        <div>
            <h1 name='title'>CADASTRO</h1>
        </div>

        <div>
            <?php
                # Será responsável em se comunicar com o usuário sobre a situação do seu cadastro
                # Este if basicamente mostra alguma mensagem ao usuário e depois a exclui para deixar $_SESSION['msg']
                if(isset($_SESSION['msg'])): #ver <https://www.php.net/manual/en/function.isset.php>
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']); #ver <https://www.php.net/manual/en/function.unset>
                endif;
            ?>
        </div>

        <form method='POST', action="action.php"> 

            <div>
                <label>Email</label>
                <input type='email' name='email' required>
            </div>    

            <div>
                <label>Senha</label>
                <input type='password' name='password' required>
            </div>
       
            <div>
                <input type='submit' name='button_submit' value="Cadastrar">
            </div>         
        </form>    
    </body>
</html>