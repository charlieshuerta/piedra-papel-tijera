<html>
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <style>
        .row{margin:0}
    </style>
</head>
<body>
    <section class="row">
        <div class="col-md-6 col-sm-12 izquierda">
            <div class="contenido">
                <p>Piedra</p>
                <p>Papel</p>
                <p>Tijera</p>
                <div class="boton" id="boton">START</div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12 derecha">
            <div class="contenido">
                <img src="img/piedra.png">
                <img src="img/papel.png">
                <img src="img/tijera.png">
            </div>
        </div>
    </section>

    <script>
        $(".boton").click(function(){
            window.location="game.php"
        });
    </script>
</body>
</html>