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
            echo "<br>Os valores passados $n1 e $n2 operação $op<br>";
            echo "<br>S para somar e outro valor para multiplicar <br>";
            $res = ($op == 's') ? ($n1 + $n2) : ($n1 * $n2);
            echo "<br> Resposta: ".$res;


            /*exercício 2
            Verificar ser duas variáveis são iguais ou idéticas
            */
            $v1 = $_GET['c'];
            $v2 = $_GET['d'];
            $res1 = ($v1 == $v2) ? 'iguais': 'não iguais';
            echo "<br> As variáveis $v1 e $v2 são ".$res1;
            $res2 = ($v1 === $v2) ? 'idênticas' : 'não idênticas';
            echo "<br> As variáveis $v1 e $v2 são ".$res2;

            /*Exercício 3
            Mostrar a situação de um aluno, de acordo com a
            sua méida obtida*/
            $nota1 = $_GET['n1'];
            $nota2 = $_GET['n2'];
            $media = ($nota1 + $nota2)/2;
            $situacao = ($media > 7) ? 'aprovado' : 'recuperacao';
            echo "<br> $media situação do aluno: ".$situacao;

          
        ?>

        
</div>
</body>
</html>