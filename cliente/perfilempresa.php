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
if(strlen($_SESSION['usuario']) > 0 OR $_SESSION['usuario'] != ""){
  #hay session, a continuación serás enviando al sitio de destino:
  
}
else{
  #Si no hay session imprime toda la estructura:
  header('location: ../index.php');
}
$idvp = $_GET['ID'];
// Create connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="css/miperfil.css">
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
    
                            <!--Navbar -->
            <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                    <div id="fondo">
                        <a href="index.php"><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Inicio
                            
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cerrarsesion.php">Salir
                            </a>
                        </li>
                    </ul>

                </div>
            </nav>
        <!--/.Navbar -->
        <div id="barra"></div>
        <?php


$link=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
/* verificar la conexión */
if (mysqli_connect_errno()) {
    printf("Conexión fallida: %s\n", mysqli_connect_error());
    exit();
}

if ($result4 = mysqli_query($link, "SELECT calificacion FROM calificaciones where fktrabajador = '".$idvp."'")) {

    /* determinar el número de filas del resultado */
    $row_cnt = mysqli_num_rows($result4);
    /* cerrar el resulset */
    mysqli_free_result($result4);
       /* cerrar la conexión */
}
mysqli_close($link);




$sql_qry2="SELECT SUM(calificacion) AS count FROM calificaciones WHERE fktrabajador= '".$idvp."'";
$duration = $conn->query($sql_qry2);
while($record = $duration->fetch_array()){
    $total = $record['count'];                                    
}
if($row_cnt != 0){
    $total= $total / $row_cnt;

}else
{
    echo"";
}

                            $conn = new mysqli($servername, $username, $password, $dbname);
                            mysqli_set_charset($conn,"utf8");
                                $sql = "SELECT e.token, e.tamano, e.nombre, e.tel, e.giro, e.cp, e.ciudad, e.foto, e.identificacion, e.comprobante, e.descripcion, e.estado, c.email from empresa e inner join credenciales c on c.token = e.token where e.token ='".$idvp."'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                     // output data of each row
                                     while($row = $result->fetch_assoc()) {
                                         //$link2 = '<a href="editar.php?ID='. $row["Id_Vendedor"].'" >' .'Editar Perfil'.'</a>';
                                         ?>
                            
<div class="container"><br><br>
                             
        <div class="alert alert-danger alert-dismissable">
            <?php 
                                if($row['estado'] == 1){
                                    echo 'Esta cuenta ha sido validada por el administrador';
                                }
                                if($row['estado'] == 2){
                                    echo 'Tu cuenta no ha sido validada por el administrador, esto puede tardar hasta 24 hrs.';
                                }
                                if($row['estado']== 3){
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
            </ul>
            <div class="tab-content py-4">
                <div class="tab-pane active" id="profile">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Nombre de la empresa:</h6>
                            <p>
                                <?php echo $row['nombre']; ?>
                            </p>
                            <h6>Giro de la empresa:</h6>
                            <p><?php echo $row['giro']; ?></p>

                            <h6>Ciudad:</h6>
                            <p>
                                <?php echo $row['ciudad'] ?>
                            </p>
                            <h6>Código Postal:</h6>
                            <p><?php echo $row['cp'] ?></p>
                            <h6>Teléfono:</h6>
                            <p><?php echo $row['tel'] ?></p>
                            <h6>Correo electrónico:</h6>
                            <p><?php echo $row['email'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <h6>Descripción</h6>
                            <p><?php echo $row['descripcion'] ?></p>
                        </div>
                        
                    </div>
                    <!--/row-->
                    
                            <!-- Header section end  SLICEBOX -->
                </div>
                <div class="tab-pane" id="messages">
                
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



                        <!-- AQUI BVA CODIGO DE PROMEDIO -->   
                        
                        <br>   <label for="">Calificar:</label>
                            <div class="d-flex justify-content-center my-4">
                                <span class="font-weight-bold purple-text mr-2 mt-1">0</span>
                                <form class="range-field w-75" method="POST" action="calificarempresa.php">
                                    <input class="border-0" type="range" class="form-control" min="0" max="10" id="range" name="range"><br>
                                    <input type="hidden" name="fkuser" id="fkuser" value="<?php echo $idvp ?>">
                                    <br>
                                    <div class="col-sm-6">
                                        <button class="btn btn-primary" id="calificar" type="submit" name="calificar">Enviar calificación</button>
                                    </div>
                                </form>
                                <span class="font-weight-bold purple-text ml-2 mt-1">10</span>
                            </div>
                </div>
                <script type="text/javascript" src="https://form.jotform.co/jsform/93174355870867"></script>
                
            </div>
        </div>

        <div class="col-lg-4 order-lg-1 text-center">

            <?php echo '<img src="'.$row['foto'].'" width="200px;" height="195px;">'; ?>

        </div>

    </div>
</div>
<br><br>
<?php

} }?>
<!-- JS, Popper.js, and jQuery -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>