<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>login</title>
    <link href="css/bootstrap.min.css" rel ="stylesheet"/>
    <link href="estilos.css" rel="stylesheet"/>
    <script src="js/bootstrap.js"></script>
   
</head>
<body><center>
    <div id="div1" class="container">
        <br>
        <div id="div2">
            <img src="medu.jpg">
            <div id="div3">
                <form id="formulario" method="post" action="menu.php">
                    <br>
                    <strong class="lgris">Iniciar sesión </strong>
                    <br>
                    <br>
                    <label class="lgris">Nombre de usuario:</label>
                    <br>
                    <input style="text-transform: uppercase;" type="text"
                    name="usuario" value="" required/>
                    <br>
                    <label class="lgris">Contraseña:</label>
                    <br>
                    <input type="password" name="clave" value="" required/>
                    <br><br>
                    <input class="btn btn-primary" type="submit" value="Iniciar">
                    <br><br>
                </form>
            </div>
        </div>
    </div>
    <br><br>
</body></center>
</html>
