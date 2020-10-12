<?php
$servername = "fdb29.awardspace.net";
$username = "3519580_goijob";
$password = "GOIJOB2020";
$dbname = "3519580_goijob";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();
if(strlen($_SESSION['empresa']) > 0 OR $_SESSION['empresa'] != ""){
    #hay session, a continuación serás enviando al sitio de destino:
      //header('location: miperfil.php?ID='. $session);
    }
    else{
    #Si no hay session imprime toda la estructura:
    header('location: ../index.php');
    }
$session = $_SESSION["empresa"];
// Create connection
$consulta=ConsultarPerfil($session); 
function ConsultarPerfil($session)
{
    $servername = "fdb29.awardspace.net";
    $username = "3519580_goijob";
    $password = "GOIJOB2020";
    $dbname = "3519580_goijob";
    $conn=mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
	$sentencia="SELECT * FROM `empresa` WHERE token='".$session."'";
    $result = mysqli_query($conn, $sentencia);
    $filas = mysqli_fetch_assoc($result);
    return [
        $filas['token'],
        $filas['tamano'],
        $filas['nombre'],
        $filas['tel'],
        $filas['cp'],
        $filas['ciudad'],
        $filas['giro'],
        $filas['foto'],
        $filas['identificacion'],
        $filas['comprobante'],
        $filas['descripcion'],
        $filas['estado']
        ];
}
$consulta2=ConsultarPerfil2($session); 
function ConsultarPerfil2($session)
{
    $servername = "fdb29.awardspace.net";
    $username = "3519580_goijob";
    $password = "GOIJOB2020";
    $dbname = "3519580_goijob";
    $conn=mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
	$sentencia="SELECT * FROM `credenciales` WHERE token='".$session."'";
    $result = mysqli_query($conn, $sentencia);
    $filas = mysqli_fetch_assoc($result);
    return [
        $filas['token'],
        $filas['email'],
        $filas['passwd'],
        $filas['rol']
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GOIJOB | Mi perfil</title>
    <link rel="stylesheet" href="css/miperfil.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    
                            <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                    <div id="fondo">
                        <a href=""><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                    <ul class="navbar-nav ml-auto nav-flex-icons">

                        <li class="nav-item">
                            <a class="nav-link" href="cerrarsesion.php">Salir
                            </a>
                        </li>
                    </ul>


                </div>
            </nav>
        <!--/.Navbar -->
        <div id="barra"></div>
<div class="container"><br><br>
    <div class="alert alert-danger alert-dismissable">
    <?php 
                                if($consulta[11] == 1){
                                    echo 'Esta cuenta ha sido validada por el administrador';
                                }
                                if($consulta[11] == 2){
                                    echo 'Tu cuenta no ha sido validada por el administrador, esto puede tardar hasta 24 hrs.';
                                }
                                if($consulta[11]== 3){
                                    echo 'Tu cuenta está en revisión por posibles errores.';
                                }
                                
                        
                                ?>
                        
        <a class="panel-close close" data-dismiss="alert">x</a>
        
    </div>
    <div class="row my-2">
        <div class="col-lg-8 order-lg-2">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a href="" data-target="#profile" data-toggle="tab" class="nav-link active">Perfil</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#messages" data-toggle="tab" class="nav-link">Nivel</a>
                </li>
                <li class="nav-item">
                    <a href="" data-target="#edit" data-toggle="tab" class="nav-link">Editar</a>
                </li>
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Nombre de la empresa:</h6>
                            <p>
                                <?php echo $consulta[2] ?>
                            </p>
                            <h6>Giro de la empresa:</h6>
                            <p><?php echo $consulta[6] ?></p>

                            <h6>Ciudad:</h6>
                            <p>
                                <?php echo $consulta[5] ?>
                            </p>


                            <h6>Teléfono:</h6>
                            <p><?php echo $consulta[3] ?></p>

                            <h6>Código Postal:</h6>

                            <p><?php echo $consulta[4] ?></p>

                            <h6>Correo electrónico:</h6>
                            <p><?php echo $consulta2[1] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h6>Descripción</h6>
                            <a><?php echo $consulta[10] ?></a>
                        </div>
                        
                    </div>
                    <!--/row-->
                </div>
                <div class="tab-pane" id="messages">
                    
                                                <?php


                        $link=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                        /* verificar la conexión */
                        if (mysqli_connect_errno()) {
                            printf("Conexión fallida: %s\n", mysqli_connect_error());
                            exit();
                        }

                        if ($result = mysqli_query($link, "SELECT calificacion FROM calificaciones where fktrabajador = '".$session."'")) {

                            /* determinar el número de filas del resultado */
                            $row_cnt = mysqli_num_rows($result);


                            /* cerrar el resulset */
                            mysqli_free_result($result);
                        }

                        /* cerrar la conexión */
                        mysqli_close($link);

                                




                        $sql_qry="SELECT SUM(calificacion) AS count FROM calificaciones WHERE fktrabajador= '".$session."'";

                        $duration = $conn->query($sql_qry);
                        while($record = $duration->fetch_array()){
                            $total = $record['count'];                                    
                        }
                        if($row_cnt>0){


                            $total= $total / $row_cnt; ?>
                            <div id="imglevel">
                                <?php
                                if($total >= 9.1){
                                    ?> <img src="img/NIVELES/DIAMANTE.png" alt="" width="100px">
                                <?php } ?>


                                <?php

                                if($total >= 8 && $total <=9){
                                        ?> <img src="img/NIVELES/ORO.png" alt="" width="100px">
                                <?php } ?>

                                <?php

                                if($total >=6 && $total <=7.9){
                                    ?> <img src="img/NIVELES/PLATA.png" alt="" width="100px">
                                <?php } ?>
                                    
                                <?php
                                if($total >=0 && $total <=5.9){
                                    ?> <img src="img/NIVELES/BRONCE.png" alt="" width="100px">
                                <?php } ?>


                            
                            </div>  


                        <?php }
                        else{
                            echo "";
                        } ?>

                        
                        <!-- AQUI BVA CODIGO DE PROMEDIO -->
                </div>
                <div class="tab-pane" id="edit">
                    <form role="form" method="post" action="guardarcambios.php">
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Nombre</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="nempresa" type="text" value="<?php echo $consulta[2] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Correo</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="correo" type="email" value="<?php echo $consulta2[1] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Teléfono</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="telefono" type="text" value="<?php echo $consulta[3] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Código Postal</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="cp" type="text" value="<?php echo $consulta[4] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Ciudad</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="ciudad" type="text" value="<?php echo $consulta[5] ?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Contraseña</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="pwd" type="password" value="<?php echo $consulta2[2] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Confirmar contraseña</label>
                            <div class="col-lg-9">
                                <input class="form-control" name="pwd2" type="password" value="<?php echo $consulta2[2]?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <input type="hidden" name="session" value="<?php echo $session; ?>">
                            <div class="col-lg-9">
                                <input type="reset" class="btn btn-secondary" value="Cancelar">
                                <input type="submit" name="guardar" class="btn btn-primary" value="Guardar cambios">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4 order-lg-1 text-center">
            <?php echo '<img src="'.$consulta[7].'" width="200px;" height="195px;">'; ?>

        </div>
    </div>
</div>
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>






