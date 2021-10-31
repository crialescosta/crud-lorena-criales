<!DOCTYPE html >
<html  lang = " en " >
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <títle> Registro de aprendiz </títle >
</head>
<body><center>
    <div  id="div1" class ="container" >
    <Br>
     <div id="div2">
            <?php  session_start(); if (! empty ($_SESSION [ 'Tipo_usuario' ])) { ?> 
            <img id="im_registro" src = "img/imag_1.png">  <?php } ?>
                <div  id="div3">
                    <?php 
                    if ($_SESSION ['Tipo_usuario']=='ADMINISTRADOR')
                    { 
                    ?>
                    <form  id="formulario " role ="form" method ="post" action="Guardado_Aprendiz.php" >
                        <div  class = " col-md-12 " >
                            <strong  class = " lgris " > Ingrese los datos del aprendiz </strong >
                            <Br >
                            <label  class = " lgris " > Identificación: </label >
                            
                            <div  class = " form-row " >
                            
                                <div  class = " form-group col-xs-2 " > 
                                 <select  class = " form-control " name = "tipoid" >
                                    <option  value = " CC " seleccionado > CC </option >
                                    <option  value = " TI " > TI </option >
                                    <option  value = " RC " > RC</option >
                                    <option  value = " PEP ">REP</option >
                                 </select >
                                </div >
                            </div >
                            <br>
                            <div  class = " del-grupo col-md-6 " >
                                <input class = " form-control " style = " text-transform: uppercase; "  type = "number" name ="numid" min = " 9999 " max = " 9999999" value = "" placeholder ="identificacion" required />
                            </div >

                            <label  class = " lgris "> </label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="nombres" value = "" placeholder ="Nombres" required />
                                
                            <label  class = " lgris " > </label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="apellidos" value = "" placeholder = " Apellidos " required/>
                                
                            <label  class = " lgris " ></label>
                            <input  class = " form-control " style = " text-transform: uppercase; " type = " text " name="direccion" value = "" placeholder = " Dirección " required/>

                            <label  class = "lgris"></label>
                            <input  class = " form-control " type = " number " name="telefono" min = " 9999 " max = " 99999999999 " value = "" placeholder = "TELEFONO" required/>

                            <label  class ="lgris"> </label>
                            <input  class ="form-control" type = " number " name="ficha" min = " 9999 " max = " 99999999999 " value = "" placeholder = " FICHA" required/>
                            <Br >

                            <input  class = " btn btn-primary " type ="submit" value ="Guardar">
                        </div >
                        
                    </form >
                <?php
                    }
                    else
                    {
                        echo  "No tiene permisos para realizar esta acción" ;
                    }
                ?>
                <Br >
                </div >
        </div >
    </div >
    
</body ></center>
</html >