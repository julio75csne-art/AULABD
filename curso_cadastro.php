<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de curso</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <?php include "menu.php" ?>

    <div class="conteudo">

        <h3>Cadastro do curso </h3>
        <form action='curso_disciplina.php' method="post">
            <p>
                Digite o nome do curso <br>
                <input type="text" name="nome">
            </p>

            <p>
                Digite o nome do coordenador <br>
                <input type="text" name="coordenador">
            </p>

            <p>
                <input type="submit" name="enviar" value="Cadastrar">
            </p>  
        </form>

    </div>

    
</body>
</html>