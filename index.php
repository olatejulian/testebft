<!--Página index do site teste-->
<?php
/* TODO: Realizar comunicação com banco de dados postgresql utilizando método POST 
        [x] Criar um formulário na página inicial;
        [ ] Conexão com banco de dados;
        [ ] input de dados usando POST no DB
        [ ] validação dos dados através de leitura no DB

*/
/* Estrutura do site 
    - página inicial index.php
    - uma página para mostrar que o cadastro foi realizado com sucesso ou que não foi possível cadastrar por algum motivo

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
                <input type='email' name='email'>
            </div>    

            <div>
                <label>Senha</label>
                <input type='password' name='password'>
            </div>
       
            <div>
                <input type='submit' name='button_submit' value="Cadastrar">
            </div>         
        </form>    
    </body>
</html>