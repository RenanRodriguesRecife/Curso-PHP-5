<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
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
        echo "<h2>olá,<br/> mundo!<h2/>";
        
        $idade = 3;
        $sal = 1825.54;
        $nome = (int )"Leonardo";
        $casado = false;
        //(coesão) O php modifica o tipo de variável deacordo com usa atribuição
        //O PHP vai fazer de tudo para não mostrar erros

    /*
    você pode força um tipo de variavel atribuind um typecast
    Inteiro   (int), (integer)
    REAL      (real),(float),(double)
    Caractere (string)
    Lógico    (???) - você não tem como forçar um tipo lógico 
                    Em PHP um tipo lógico é um tipo inteiro
                    true = 1
                    false = vazio
    */
            $n = 4;
            $no = "gustavo";
            echo $no;
            echo $nome."<br>";

        //concatenação
        echo $no." tem ".$n." anos  ou ";
        echo "$no tem $n anos";

        //aspas simples
        echo '$no tem $n anos';
        echo "<br>";

        $n1 = 3;
        $n2 = 4;
        $n3 = $n1 + $n2;
        $media = ($n1 + $n2)/2;
        echo "O soma vale é $n3";
        echo "<br/>A subtração vale".($n1 - $n2);
        echo "<br/>A multiplicacao vale ".($n1*$n2);
        echo "<br/>A divisao vale ".($n1/$n2);
        echo "<br/>O modulo vale ".($n1%$n2);
        echo "<br/>A média vale: ".$media;

        //você pode passar valores personalizados pela URL
        //Ex: localhost/site/index.php?a=3&b=2

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $n3 = $n1 + $n2;
        $media = ($n1 + $n2)/2;
        echo "<br/><br/>Valores recebidos a = $n1 e b = $n2";
        echo "<br/>O soma vale é $n3";
        echo "<br/>A subtração vale".($n1 - $n2);
        echo "<br/>A multiplicacao vale ".($n1*$n2);
        echo "<br/>A divisao vale ".($n1/$n2);
        echo "<br/>O modulo vale ".($n1%$n2);
        echo "<br/>A média vale: ".$media;

        /*operações especiais
        abs() - valor absoluto
        pow() - potenciação
        sqrt() - raiz quadrada
        round() - Arredondamento
        intval() - valor inteiro da variável
        number_format() - formata o valor (numero de casas decimais)
        */
        echo "<br/>Valor absoluto de $n1 é ".abs($v2);
        echo "<br/>O valor de $n1<sub>$n2</sub> e ".pow($n1,$n2);
        echo "<br/>A raiz de $n1 e ".sqrt($n1);
        echo "<br/>O valor de $n1 arredondado e ".round($n1);//ceil e floor
        echo "<br/>A parte inteira de $n1 é ".intval($n1)
        echo "<br/>O formato de $n1 em moeda é RS".number_format($n1,2,",",".");
        ?>

        
</div>
</body>
</html>