<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../_css/estilo.css">
    <!--
    <style>
        h2{
            color: #80a2ff;
            text-shadow: 1px 1px 1px black;
        }
    </style>
    -->
</head>
<body>
    <div>
        <h1>testando php</h1>

        <?php
            /*exercício 1
            Permitir que o usuário escolha entre somar
            e multiplicar dois números
            */
            $n1 = $_GET['a'];
            $n2 = $_GET['b'];
            $op = $_GET['op'];
            echo "<br>S para somar e outro valor para multiplicar <br>";
            $res = ($op == 's') ? ($n1 + $n2) : ($n1 * $n2);
            echo "<br> Resposta: ".$res;
        ?>

        
</div>
</body>
</html>