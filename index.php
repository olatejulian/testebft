<!--Página index do site teste-->
<?php
/* TODO: Realizar comunicação com banco de dados postgresql utilizando método POST 
        [ ] Criar um formulário na página inicial;
        [ ] Conexão com banco de dados;
        [ ] input de dados usando POST no DB
        [ ] validação dos dados através de leitura no DB

*/
/* Estrutura do site 
    - página inicial index.php
    - uma página para mostrar que o cadastro foi realizado com sucesso ou que não foi possível cadastrar por algum motivo

*/

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

        <form method='POST', action=""> 

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