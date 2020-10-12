<?php
$servername = "fdb29.awardspace.net";
$username = "3519580_goijob";
$password = "GOIJOB2020";
$dbname = "3519580_goijob";
$conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
$idvp = $_GET["ID"];
// Create connection

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

    <!--<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'><-->
    

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GOIJOB | Sitio Oficial</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/registro.css" type="text/css">
    <link rel="stylesheet" href="css/perfil.css" type="text/css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" type="image/png" href="icon.png">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Google Font -->
	<!--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet"><--->

    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    
<style>

</style>
</head>
<body>
<?php
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}?>


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

    <div id="barra">    
    </div>
    <div><br></div>







    <?php

                $link=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");

                /* verificar la conexión */
                if (mysqli_connect_errno()) {
                    printf("Conexión fallida: %s\n", mysqli_connect_error());
                    exit();
                }

                if ($result = mysqli_query($link, "SELECT calificacion FROM calificaciones where fktrabajador= '".$idvp."'")) {

                    /* determinar el número de filas del resultado */
                    $row_cnt = mysqli_num_rows($result);


                    /* cerrar el resulset */
                    mysqli_free_result($result);
                }

                /* cerrar la conexión */
                mysqli_close($link);






                            $sql_qry="SELECT SUM(calificacion) AS count FROM calificaciones WHERE fktrabajador= '".$idvp."'";
                            $duration = $conn->query($sql_qry);
                            while($record = $duration->fetch_array()){
                                $total = $record['count'];                                    
                            }
                            if($row_cnt != 0){
                                $total= $total / $row_cnt;

                            }else
                            {
                                echo"";
                            }?>
                
    <div id="title">
        <h3>Perfil</h3>
    </div> 
    <div><br><br><br><br></div>





<div class="container">
        <div class="parent" id="flexuno">
            

                <?php $sql = "SELECT CONCAT(datospersonales.nombre, \" \", datospersonales.app) AS fullname, datosacademicos.tokenAccess, datospersonales.apm,datosacademicos.niveluno, datosacademicos.instprimaria, datosacademicos.niveldos, datosacademicos.instsecundaria, datosacademicos.niveltres, datosacademicos.instbachiller, datosacademicos.nivelcuatro, datosacademicos.instuni, datosacademicos.nivelcinco, datosacademicos.instposgrado, datospersonales.tokenAccess,datospersonales.foto, datospersonales.tel, datospersonales.correoel, datospersonales.ciudad, datospersonales.ocupacion, datospersonales.fechanac, datospersonales.rfc, datospersonales.numid, datospersonales.identificacion, datospersonales.comprobante, datospersonales.estado FROM datospersonales inner join credenciales ON credenciales.token = datospersonales.tokenAccess inner join datosacademicos ON credenciales.token = datosacademicos.tokenAccess where credenciales.token = '".$idvp."'";
                   $result = $conn->query($sql);
                   if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $foto = '<img class="center" src="data:image/jpg;base64,' .base64_encode($row['foto']).'" width="144px" height="145px" style="border-radius:50%">' ;
                            //$link2 = '<a href="editar.php?ID='. $row["Id_Vendedor"].'" >' .'Editar Perfil'.'</a>';
                            ?>
                

                <div id="parte1" class="col-sm-3">
                            <br>
                            <div id="fotoperfil" class="pic">
                                <div id="borderimage">
                                    <!-- AQUI VA IMAGEN EN PHP <-->
                                    <?php echo '<img src="'.$row['foto'].'" width="146px;" height="145px;" style="border-radius:50%;">';?>
 
                                </div>
                            </div>
                            <div id="tel">
                                <input name="tel" id="Tell" type="text" placeholder="Tel" value="<?php echo $row['tel']?>" class="form-control">
                                <div><p></p></div>
                                <input name="correo" id="correo" type="text" placeholder="Correo" value="<?php echo $row['correoel']?>" class="form-control" >
                                <div><p></p></div>
                                <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad" value="<?php echo $row['ciudad']?>" class="form-control" >
                                <div><p></p></div>
                                <input name="ocupacion" id="ocupacion" type="text" value="<?php echo $row['ocupacion']?>" class="form-control" >
                            </div>

                        
                </div>

            

                    <div class="col-sm-8" id="parte2">
                    <div id="imglevel">

                        <?php 
                        if($row_cnt>0){
                            if($total >= 9.1){
                            ?> <img src="/img/NIVELES/DIAMANTE.png" alt="" width="90px">
                        <?php } ?>


                        <?php

                        if($total >= 8 && $total <=9){
                                ?> <img src="/img/NIVELES/ORO.png" alt="" width="90px">
                        <?php } ?>

                        <?php

                        if($total >=6 && $total <=7.9){
                            ?> <img src="/img/NIVELES/PLATA.png" alt="" width="90px">
                        <?php } ?>
                            
                        <?php
                        if($total >=0 && $total <=5.9){
                            ?> <img src="/img/NIVELES/BRONCE.png" alt="" width="90px">
                        <?php } 
                        }
                        else {
                        echo "";
                        }?>


                    </div> 


                        <div id="pdos" class="col-sm-22">
                            <div id="consultas">
                        
                                <h6><?php echo $row['fullname']?></h6>
                                <p><?php echo $row['correoel'];?></p>  

                            </div>
                            
                            <div style="flex-flow: column wrap;">
                                <div id="stado">
                                    <p><i class="fa fa-check" aria-hidden="true" style="font-size:20px"></i></p>
                                </div>


                                <div id="check">
                                    <p>KYC</p>
                                </div>


                            </div>
                            
                            <input type="hidden" name="fkuser" id="" value="<?php echo $_GET["ID"] ?>">

       


                        </div>


                        <div id="muestranivel" class="col-sm-22">
                            

                            <div id="datosaca">
                                <h3>Datos académicos</h3>
                            </div><br><br>

                            <div id="box">

                                    <div id="nuno">
                                        <p><?php echo $row["niveluno"] ?></p>
                                    </div>


                                    <div id="ndos">
                                    <p><?php echo $row["niveldos"] ?></p>
                                    </div>
                            


         
                                    <div id="n3">
                                        <p><?php echo $row["niveltres"] ?></p>
                                    </div><br>


                                    <?php 
                                    if($row["nivelcuatro"] != ""){ ?>
                                            <div id="n4">
                                                <p><?php  echo $row["nivelcuatro"]; ?></p>
                                            </div><br>
                                    <?php }
                                    else{ echo ""; } ?>
                                        
                                    
                        
                                    <?php 
                                    if($row["nivelcinco"] != ""){ ?>

    
                                            <div id="n4">
                                                <p><?php  echo $row["nivelcinco"]; ?></p>
                                            </div>

                                    <?php }
                                    else{ echo ""; } ?>

                            </div><br>
                                

                                
                                
                            <br><br>
                            
                            <div class="d-flex justify-content-center my-4">
                            <div style="margin-left: -17px;"><label>Calificar</label></div>
                                <span class="font-weight-bold purple-text mr-2 mt-1">0</span>
                                <form class="range-field w-75" method="POST" action="calificar.php">
                                    <input class="border-0" type="range" class="form-control" min="0" max="10" id="range" name="range" /><br>
                                    <input type="hidden" name="fkuser" id="fkuser" value="<?php echo $_GET["ID"] ?>">
                                    <div class="col-sm-6">
                                        <button class="btn btn-primary" id="calificar" type="submit" name="calificar">Enviar calificación</button>
                                    </div>
                                </form>
                                <span class="font-weight-bold purple-text ml-2 mt-1">10</span>
                            </div>
                            </div>  
                                                        
                            <?php }} ?>   
                        
                        </div>

                


        </div> 
    <div>
        <br><br><br>
    </div>


        <div id="titletres">
            <h3>Idiomas</h3>
        </div><br><br><br>




            <div class="parent2">
                <?php $sql = "SELECT i.idiomauno, i.idiomados, i.idiomatres, i.idiomacuatro, i.idiomacinco, i.idiomaseis, i.idiomasiete, c.token FROM idioma i INNER JOIN credenciales c ON c.token = i.tokenAccess where i.tokenAccess= '".$idvp."'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                //$foto = '<img class="center" src="data:image/jpg;base64,' .base64_encode($row['foto']).'" width="144px" height="145px" style="border-radius:50%">' ;
                                //$link2 = '<a href="editar.php?ID='. $row["Id_Vendedor"].'" >' .'Editar Perfil'.'</a>';
                                ?>

            

                                <div id="fondoidioma">
                                    <?php if($row["idiomauno"] != ""){
                                        ?>
                                        <div id="espanol">
                                            <input id="spanishh" style="background-color:#0066b2;" type="text" class="btn" name="spanish" placeholder="Español" value="<?php echo $row["idiomauno"];?>" onclick="idioma(id)">
                                        </div>
                                    <?php } 

                                    else{ echo "";
                                    }
                                    
                                    
                                    if($row["idiomados"] != ""){ ?>
                                        <div id="ingles">
                                            <input id="englishh" type="text" style="background-color:#0066b2;" class="btn" name="english" placeholder="Inglés" value="<?php echo $row["idiomados"];?>" onclick="idioma(id)">
                                        </div> <?php
                                    }
                                    
                                    else{ echo "";
                                    }
                                    
                                    if($row["idiomatres"] != ""){ ?>
                                        <div id="chino">
                                            <input id="chinesee" type="text" class="btn" style="background-color:#0066b2;" name="chinese" placeholder="Chino" value="<?php echo $row["idiomatres"];?>" onclick="idioma(id)">
                                        </div> <?php }
                                    else{ echo ""; } 
                                    
                                    if($row["idiomacuatro"] != ""){ ?>  

                                        <div id="aleman">
                                            <input id="germann" type="text" style="background-color:#0066b2;" class="btn" name="german" placeholder="Alemán" value="<?php echo $row["idiomacuatro"];?>" onclick="idioma(id)">
                                        </div>  <?php  }  
                                    else{ echo "";  } 
                                        
                                    
                                    if($row["idiomacinco"] != ""){ ?>
                                        <div id="frances">
                                            <input id="frenchh" type="text" class="btn" style="background-color:#0066b2;" name="french" placeholder="Francés" value="<?php echo $row["idiomacinco"];?>" onclick="idioma(id)">
                                        </div> <?php }
                                    else{ echo ""; } ?>

                                        <?php
                                        if($row["idiomaseis"] != ""){ ?> 
                                        <div id="italiano"> 
                                            <input id="italyy" type="text" class="btn" style="background-color:#0066b2;" name="italy" placeholder="Italiano" value="<?php echo $row["idiomaseis"];?>" onclick="idioma(id)">
                                        </div> <?php }

                                    else{ echo "";
                                    } ?>

                                    <?php
                                    if($row["idiomasiete"] != ""){ ?>  
                                        <div id="otro">
                                            <input id="otherr" type="text" class="btn" name="other" style="background-color:#0066b2;" placeholder="Otro" value="<?php echo $row["idiomasiete"];?>" onclick="idioma(id)">
                                        </div> <?php }
                                    else{ echo ""; } ?>
                                    
                                </div>

                <?php }} ?>

            </div><br><br>





                    <div id="titlecuatro">
                        <h3>Experiencia laboral</h3>
                    </div><br><br>

                    <?php $sql = "SELECT e.empresa, e.id, e.inicio, e.fin, e.puesto, e.duracion, e.descripcion, e.tokenAccess, c.token FROM empleos e INNER JOIN credenciales c ON c.token = e.tokenAccess WHERE e.tokenAccess = '".$idvp."'";
                        $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                        // output data of each row
                            while($row = $result->fetch_assoc()) {
                            //$foto = '<img class="center" src="data:image/jpg;base64,' .base64_encode($row['foto']).'" width="144px" height="145px" style="border-radius:50%">' ;
                            //$link2 = '<a href="editar.php?ID='. $row["Id_Vendedor"].'" >' .'Editar Perfil'.'</a>';
                        ?>

                    <div><br><br><br></div>

                <div>

                    <form action="" id="empleos" name="empleos">
                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Empresa</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" value="<?php echo $row["empresa"];?>">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Puesto</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="colFormLabel" value="<?php echo $row["puesto"];?>">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Duración</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="colFormLabel" value="<?php echo $row["duracion"];?>">
                            </div>
                        </div>

                            <div class="form-group row" style="flex-direction:row;">
                                <label for="" class="col-sm-2 col-form-label">DE:</label>
                                <div class="col-sm-10">
                                    <input name="inicio" type="date" class="form-control" value="<?php echo $row["inicio"]?>">
                                </div>
                                
                                <label for="" class="col-sm-2 col-form-label">A:</label>
                                <div class="col-sm-10">
                                    <input name="fin" type="date" class="form-control" value="<?php echo $row["fin"];?>">
                                </div>
                                

                            </div>
                               
                            
                        <div id="md-form">
                            <label for="">Descripción</label>
                            <textarea name="desc" class="md-textarea form-control" rows="5"> <?php echo $row["descripcion"]?></textarea>
                        </div>

                    </form>                        

                        

                        
                </div>
                            <?php }} ?>




<br><br><br>

<footer>

<div>

</div>
</footer>
        


</div>  <!-- end container -->  
















    <?php        
   
   $conn->close();
   ?> 
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>