<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.1.1/css/all.css"
      integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ"
      crossorigin="anonymous"
    />
    <?php 
        $t = isset($_GET["t"])?$_GET["t"]:"Texto Bonito";
        $tam = isset($_GET["tam"])?$_GET["tam"]: "12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style>
        span.texto{
            font-size: <?php echo $tam ?>;
            color: <?php echo $cor ?>;
        }
    </style>
    <title>Resultado</title>
</head>
<body>
    <?php 
        echo "<span class='texto'>$t</span>";
    ?>
    <br><a href="index.html" title="Voltar"><i class="fas fa-home"></i></a>
</body>
</html>