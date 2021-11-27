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
            
        ?>

        
</div>
</body>
</html>