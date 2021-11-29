<!DOCTYPE html>
<html>
<head>
    <?php
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
  <link rel="stylesheet" href="../_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
  <style>
      span.texto {
        color: <?php echo $cor;?>;
        font-size: <?php echo $tam;?>;
      }
  </style>
</head>
<body>
<div>
  
    <?php
    /*isset - verifica se a variável foi enviada - solução paleativa*/
        
        echo "<span class='texto'>$txt</span>";
    ?>
    <a href="01.html">Voltar</a>;
</div>
</body>
</html>
 