

<header>
    <a href="#" class="logo flow-text">Sistema de Cadastro</a>
    <div class="menu-toggle"></div>
    <nav2>
        <ul>
            <li><a href="cadastro.php" class="active">Cadastro</a></li>
            <li><a href="consultas.php">Consultas</a></li>
            <li><a href="../sair.php">Deslogar</a></li>
        </ul>
    </nav2>
    <div class="clearfix"></div>
</header>


<style>
    body{
        margin: 0;
        padding: 0;
        background: url("../../imagens/background_cadastro.jpg");
        background-attachment: fixed;
    }
    header{
        position: relative;
        max-width: 1200px;
        margin: 20px auto;
        padding: 10px;
        background: #fff;
        box-sizing: border-box;
        border-radius: 4px;
        box-shadow: 0 2px 5px rgba(0,0,0,.2);
    }
    .logo{
        color: #069370;
        height: 60px;
        line-height: 60px;
        padding: 0 20px;
        text-align: center;
        box-sizing: border-box;
        float: left;
        font-weight: 700;
        text-decoration: none;
    }
    nav2{
        float: right;
    }
    .clearfix{
        clear: both;
    }
    nav2 ul{
        margin: 0;
        padding: 0;
        display: flex;
    }
    nav2 ul li{
        list-style: none;
    }
    nav2 ul li a{
        display: block;
        margin: 10px 0;
        padding: 10px 20px;
        text-decoration: none;
        color: #069370;
    }
    nav2 ul li a:hover{
        background: #069370;
        color: #fff;
        transition: 0.5s;
    }
    @media (max-width: 1200px){
        header{
            margin: 20px;
        }
    }
    @media (max-width: 768px){
        .menu-toggle{
            display: block;
            width: 40px;
            height: 40px;
            margin: 10px;
            float: right;
            cursor: pointer;
            text-align: center;
            font-size: 30px;
            color: #069370;
        }
        .menu-toggle:before{
            content: '\f0c9';
            font-family: fontAwesome;
            line-height: 40px;
        }
        .menu-toggle.active:before{
            content: '\f00d';

        }
        nav2{
            display: none;
        }
        nav2.active{
            display: block;
            width: 100%;
        }
        nav2.active ul{
            display: block;

        }
        nav2.active ul li a{
            margin: 0;

        }
    }

</style>
