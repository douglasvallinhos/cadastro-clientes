<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <meta charset="UTF-8">
    <title>Área da Nutricionista</title>


    <style>
        body{
            background-image: url("../imagens/fundo_carol.jpg");
            background-size: cover;
        }
        .login{
            margin-top: 50px;
        }
        .login .card{
            background: rgba(0, 0, 0, .6);
        }
        .login label{
            font-size: 16px;
            color:#ccc;
        }
        .login input{
            font-size: 18px !important;
            color: white;
        }
        .login p:hover{
            padding: 0px 40px;
        }
        .login .botao:hover{
            padding: 0px 40px;

        }
        .msg{
            padding-top: 20px;
        }
    </style>



</head>
<body>
    <h5 class="white-text center-align msg">
<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>
</h5>
    <div class="row login">
        <div class="col s12 l4 offset-l4">
            <div class="card">
                <div class="card-action red white-text">
                    <h3 class="center">Área da Nutri</h3>
                </div>
                <form method="POST" action="validarlogin.php">
                <div class="card-content">
                    <div class="form-field">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario">
                    </div><br>

                    <div class="form-field">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha">
                    </div><br>

                    <div class="form-field">
                        <input type="checkbox" id="remember">
                        <label for="remember">Lembrar-me</label>
                    </div><br>

                    <div class="form-field center-align">
                        <input type="submit" name="btnLogin" class="btn-large red botao" value="Entrar">
                        <a href="../index.php"><p class="btn-large blue white-text">Voltar ao Site</p></a>
                    </div><br>
                </div>
                </form>
            </div>
        </div>
    </div>



</body>
</html>
