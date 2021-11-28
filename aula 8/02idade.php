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

        $nome = $_GET['nome'];
        $sexo = $_GET['sexo'];
        $ano = $_GET['ano'];
        $idade = date('Y') - $ano;
        echo "Nome: $nome <br> Sexo: $sexo <br> Idade: $idade";
    ?>
    <a href="01.html">Voltar</a>;
</div>
</body>
</html>
 