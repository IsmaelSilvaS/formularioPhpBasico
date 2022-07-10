<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        form{
            width: 400px;
        }

        .email ,.senha{
            margin-bottom: 10px;
        }

        .email input ,.senha input{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['email']) && empty($_POST['email']) == false){

            if(isset($_POST['senha']) && empty($_POST['senha']) == false){
                $email = $_POST['email'];
                echo "Login aprovado. Bem vindo ".$email;
            }else{
                echo "Senha invalida.";
            }
        }
    ?>

    <form action="" method="POST">
        <fieldset>
            <legend>Fazer login</legend>
                <div class="email">
                    <label for="">E-mail</label>
                    <input type="email" name="email" id="">
                </div>
                <div class="senha">
                    <label for="">Senha</label>
                    <input type="password" name="senha" id="">
                </div>
                <input type="submit" value="Acessar">
                <input type="reset" value="Limpar">
        </fieldset>
    </form>
    
</body>
</html>