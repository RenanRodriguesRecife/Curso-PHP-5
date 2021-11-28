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
        $valor = $_GET['v'];
        echo "O valor enviado foi $valor <br>";
        echo "A raiz de valor é ".number_format(sqrt($valor),2);
        
    ?>
    <a href="01.html">Voltar</a>;
</div>
</body>
</html>
 