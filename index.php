<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 id="titulo">Projeto Controle Remoto</h1>
    <br>
    <h3>TV 1</h3>
    <div id="controle">
        <?php
            require_once "ControleRemoto.php";
            $c = new ControleRemoto();
            $c->ligar();
            $c->maisVolume();
            $c->play();
            $c->abrirMenu();
            echo "<br>";
        ?>
    </div>
    <h3>TV 2</h3>
    <div id="controle02">
        <?php
            $c2 = new ControleRemoto();
            $c2->desligar();
            $c2->abrirMenu();
            $c2->maisVolume();  
        ?>
    </div>

    <script src="index.js"></script>
</body>
</html>