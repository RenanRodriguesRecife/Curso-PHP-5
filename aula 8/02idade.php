<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  
    <?php
    /*isset - verifica se a variável foi enviada - solução paleativa*/

        $nome = isset($_GET['nome'])?$_GET["nome"]:"[não informado]";
        $sexo = isset($_GET['sexo'])?$_GET["sexo"]:"[sexo não informado]";
        $ano =  isset($_GET['ano'])?$_GET['ano'] : 0;
        $idade = date('Y') - $ano;
        echo "Nome: $nome <br> Sexo: $sexo <br> Idade: $idade";
    ?>
    <a href="01.html">Voltar</a>;
</div>
</body>
</html>
 