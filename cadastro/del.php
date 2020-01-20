<?php include_once 'incs/header.inc.php' ?>
<?php include_once 'incs/menu.inc.php' ?>
<br>
<br>
<br>


<div class="row container white" style="top: 15px; position: relative; border-radius: 20px;">
    <div class="col s12">

        <h3 class="light center">
            <?php
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $nome2 = $_GET["nome"];

            echo 'Quer mesmo excluir o cadastro de: ';
            echo "<b>$nome2</b> ? ";

            echo "<a class='btn-large red' href='banco/delete.php?id=$id'>Sim</a> | ";
            echo "<a class='btn-large blue' href='consultas.php'>Não</a>";
            ?>
        </h3>

    </div>
</div>
