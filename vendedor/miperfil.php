<?php
$servername = "fdb29.awardspace.net";
$username = "3519580_goijob";
$password = "GOIJOB2020";
$dbname = "3519580_goijob";
$conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
mysqli_set_charset($conn,"utf8");
session_start();
if(strlen($_SESSION['token']) > 0 OR $_SESSION['token'] != ""){
  #hay session, a continuación serás enviando al sitio de destino:
    //header('location: miperfil.php?ID='. $session);
  }
  else{
  #Si no hay session imprime toda la estructura:
  header('location: ../index.php');
  }
  $session = $_SESSION['token'];
// Create connection
$consulta=ConsultarPerfil($session); 
function ConsultarPerfil($session)
{
    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
    mysqli_set_charset($conn,"utf8");
	$sentencia="SELECT * FROM `datospersonales` WHERE tokenAccess='".$session."'";
    $result = mysqli_query($conn, $sentencia); 
    $filas = mysqli_fetch_assoc($result);
    return [
        $filas['id'],
        $filas['foto'],
        $filas['tel'],   
        $filas['correoel'],
        $filas['ciudad'],
        $filas['ocupacion'],    
        $filas['nombre'],
        $filas['app'],
        $filas['apm'],
        $filas['fechanac'],
        $filas['rfc'],
        $filas['numid'],
        $filas['identificacion'],
        $filas['comprobante'],
        $filas['estado'],
        $filas['tokenAccess']
        ];
}
$consulta2=ConsultarPerfil2($session); 
function ConsultarPerfil2($session)
{
    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
    mysqli_set_charset($conn,"utf8");
	$sentencia2="SELECT * FROM `datosacademicos` WHERE tokenAccess='".$session."'";
    $result = mysqli_query($conn, $sentencia2); 
	$filas = mysqli_fetch_assoc($result);
	return [
    $filas['id'],
    $filas['niveluno'],
    $filas['instprimaria'],   
    $filas['niveldos'],
    $filas['instsecundaria'],
  	$filas['niveltres'],    
    $filas['instbachiller'],
    $filas['nivelcuatro'],
    $filas['instuni'],
    $filas['nivelcinco'],
    $filas['instposgrado'],
    $filas['tokenAccess']
	];
}
$consulta3=ConsultarPerfil3($session); 
function ConsultarPerfil3($session)
{
    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
    mysqli_set_charset($conn,"utf8");
	$sentencia3="SELECT * FROM `idioma` WHERE tokenAccess='".$session."' ";
    $result = mysqli_query($conn, $sentencia3); 
	$filas = mysqli_fetch_assoc($result);
	return [
    $filas['id'],
    $filas['idiomauno'],
    $filas['idiomados'],   
    $filas['idiomatres'],
    $filas['idiomacuatro'],
  	$filas['idiomacinco'],    
    $filas['idiomaseis'],
    $filas['idiomasiete'],
    $filas['tokenAccess']
	];
}
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
    <link rel="stylesheet" href="css/miperfil.css">
    <link rel="stylesheet" href="css/miperfilpart2.css">
    <link rel="icon" type="image/png" href="icon.png" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<!--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet"><--->

    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  

</head>
<body>

        <!--Navbar -->
        <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                    <div id="fondot">
                        <a href="index.php"><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
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

                if ($result = mysqli_query($link, "SELECT calificacion FROM calificaciones where fktrabajador= '".$session."'")) {

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
    <form action="saveperfil.php" method="post">
        

        <div id="bntguardar">
            <button class="btn btn-primary" type="submit" id="btnguardar" name="guardarperfil">Guardar</button>
        </div>
        <div class="parent" id="flexuno">

                <?php $sql = "SELECT CONCAT(datospersonales.nombre, \" \", datospersonales.app) AS fullname, datosacademicos.tokenAccess, datospersonales.apm,datosacademicos.niveluno, datosacademicos.instprimaria, datosacademicos.niveldos, datosacademicos.instsecundaria, datosacademicos.niveltres, datosacademicos.instbachiller, datosacademicos.nivelcuatro, datosacademicos.instuni, datosacademicos.nivelcinco, datosacademicos.instposgrado, datospersonales.tokenAccess,datospersonales.foto, datospersonales.tel, datospersonales.correoel, datospersonales.ciudad, datospersonales.ocupacion, datospersonales.fechanac, datospersonales.rfc, datospersonales.numid, datospersonales.identificacion, datospersonales.comprobante, datospersonales.estado FROM datospersonales inner join credenciales ON credenciales.token = datospersonales.tokenAccess inner join datosacademicos ON credenciales.token = datosacademicos.tokenAccess where credenciales.token = '".$session."'";
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
                                <input type="hidden" name="idt" id="idt" value="<?php echo $consulta[0]; ?>">
                                <input name="tel" id="Tell" type="text" placeholder="Tel" value="<?php echo $consulta[2]; ?>" class="form-control">
                                <div><p></p></div>
                                <input name="correo" id="correo" type="text" placeholder="Correo" value="<?php echo $consulta[3]?>" class="form-control" >
                                <div><p></p></div>
                                <input name="ciudad" id="ciudad" type="text" placeholder="Ciudad" value="<?php echo $consulta[4]?>" class="form-control" >
                                <div><p></p></div>
                                <input name="ocupacion" id="ocupacion" type="text" value="<?php echo $consulta[5]?>" class="form-control" >
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
                    
                                <h6><?php echo $consulta[6]. " " . $consulta[7]?></h6>
                                <input type="hidden" name="nombre" value="<?php echo $consulta[6] ?>">
                                <input type="hidden" name="app" value="<?php echo $consulta[7] ?>">
                                <input type="hidden" name="apm" value="<?php echo $consulta[8] ?>">
                                <p><?php echo $consulta[3];?></p>
                                <input type="hidden" name="fechanac" value="<?php echo $consulta[9] ?>">
                                <input type="hidden" name="rfc" value="<?php echo $consulta[10] ?>">
                                <input type="hidden" name="numid" value="<?php echo $consulta[11] ?>">
                            </div>
     
                                        
                            <div style="flex-flow: column wrap;">
                                <div id="stado">
                                    <p><i class="fa fa-check" aria-hidden="true" style="font-size:20px"></i></p>
                                </div>


                                <div id="check">
                                    <p>KYC</p>
                                </div>


                            </div>
                            
                            <input type="hidden" name="fkuser" id="" value="<?php echo $consulta[15]; ?>">

       


                        </div>


                        <div id="muestranivel" class="col-sm-22">
                            
                            <div id="stat">
                                    <?php 
                                    

                                    if($consulta[14] == 1){
                                        echo '';
                                    }
                                    if($consulta[14] == 2){
                                        echo 'Tu cuenta no ha sido validada por el administrador.';
                                    }
                                    if($consulta[14]== 3){
                                        echo 'Tu cuenta está en revisión por posibles errores.';
                                    }
                                    
                            
                                    ?>
                            
                            
                            </div>
                            <br><br>

                            <div id="datosaca">
                                <h3>Datos académicos</h3>
                            </div><br><br>

                            <div id="box">

 
                                    <div id="nuno">
                                        <p><?php echo $consulta2[1] ?></p>
                                        <input type="hidden" name="instprimaria" value="<?php echo $consulta2[2]?>">
                                    </div>
                                


                                    <div id="ndos">
                                        <p><?php echo $consulta2[3] ?></p>
                                        <input type="hidden" name="instsecu" value="<?php echo $consulta2[4]?>">
                                    </div>


                  
                                    <div id="n3">
                                        <p><?php echo $consulta2[5] ?></p>
                                        <input type="hidden" name="instbach" value="<?php echo $consulta2[6]?>">
                                    </div>



                                <?php 
                                        if($consulta2[7] != ""){ ?>

                          
                                                <div id="n4">
                                        
                                                    <p><?php  echo $consulta2[7]; ?></p>
                                                    <input type="hidden" name="instuni" value="<?php echo $consulta2[8] ?>">
                                                </div>
                              
                                        <?php }
                                        else{ echo ""; } ?>
                                            
                                        
                                    

                            
                                            <?php 
                                        if($consulta2[9] != ""){ ?>

                     
                                                <div id="n4">
                                        
                                                    <p><?php  echo $consulta2[9]; ?></p>
                                                    <input type="hidden" name="instuni" value="<?php echo $consulta2[10] ?>">
                                                </div>
                        
                                        <?php }
                                        else{ echo ""; } ?>
                                            
                                
                                        <br><br>

                        
                    

                            </div><br>
                                
                                                        
                            <?php }} ?>   
                        
                        </div>
                    </div>
                

        </div>  <!-- end parent1 -->
    <div>
        <br><br><br>
    </div>


        <div id="titletres">
            <h3>Idiomas</h3>
        </div><br><br><br>




            <div class="parent2">

                <input id="idi" type="hidden" name="idi" value="<?php echo $consulta3[0];?>">

                        <div id="fondoidioma">
                                <?php if($consulta3[1] != ""){
                                ?>
                                <div id="espanol">
                                    <input id="spanishh" style="background-color:#0066b2" type="text" class="btn" name="spanish" placeholder="Español" value="<?php echo $consulta3[1];?>" onclick="idioma(id)">
                                </div>
                                    <?php } 

                                else{ ?>
                                <div id="espanol">
                                    <input id="spanishh" type="text" class="btn" style="color:white;" name="spanish" placeholder="Español" value="<?php echo $consulta3[1];?>" onclick="idioma(id)">
                                </div>
                                <?php
                                }
        
        
                                                if($consulta3[2] != ""){ ?>
                                                    <div id="ingles">
                                                        <input id="englishh" type="text" style="background-color:#0066b2;" class="btn" name="english" placeholder="Inglés" value="<?php echo $consulta3[2];?>" onclick="idioma(id)">
                                                    </div> <?php
                                                }
                                                
                                                else{ ?>
                                                <div id="ingles">

                                                    <input id="englishh" type="text" style="color: white;" class="btn" name="english" placeholder="Inglés" value="<?php echo $consulta3[2];?>" onclick="idioma(id)">
                                                </div>
                                                <?php
                                                }
                                                
                                                if($consulta3[3] != ""){ ?>
                                                    <div id="chino">
                                                        <input id="chinesee" type="text" class="btn" style="background-color:#0066b2;" name="chinese" placeholder="Chino" value="<?php echo $consulta3[3];?>" onclick="idioma(id)">
                                                    </div> <?php }
                                                else{ ?>
                                                    <div id="chino">
                                                        <input id="chinesee" type="text" class="btn" name="chinese" placeholder="Chino" value="<?php echo $consulta3[3];?>" onclick="idioma(id)">
                                                    </div>
                                                    <?php } 
                                                
                                                if($consulta3[4] != ""){ ?>  

                                                    <div id="aleman">
                                                        <input id="germann" type="text" style="background-color:#0066b2;" class="btn" name="german" placeholder="Alemán" value="<?php echo $consulta3[4];?>" onclick="idioma(id)">
                                                    </div>  <?php  }  
                                                else{ ?>
                                                    <div id="aleman">
                                                        <input id="germann" type="text" class="btn" name="german" placeholder="Alemán" value="<?php echo $consulta3[4];?>" onclick="idioma(id)">
                                                    </div>    
                                                    <?php  } 
                                                    
                                                
                                                if($consulta3[5] != ""){ ?>
                                                    <div id="frances">
                                                        <input id="frenchh" type="text" class="btn" style="background-color:#0066b2;" name="french" placeholder="Francés" value="<?php echo $consulta3[5];?>" onclick="idioma(id)">
                                                    </div> <?php }
                                                else{ ?>
                                                    <div id="frances">
                                                        <input id="frenchh" type="text" class="btn" name="french" placeholder="Francés" value="<?php echo $consulta3[5];?>" onclick="idioma(id)">
                                                    </div>
                                                    <?php } ?>

                                                    <?php
                                                    if($consulta3[6] != ""){ ?> 
                                                    <div id="italiano"> 
                                                        <input id="italyy" type="text" class="btn" style="background-color:#0066b2;" name="italy" placeholder="Italiano" value="<?php echo $consulta3[6];?>" onclick="idioma(id)">
                                                    </div> <?php }

                                                else{ ?>
                                                    <div id="italiano"> 
                                                        <input id="italyy" type="text" class="btn" name="italy" placeholder="Italiano" value="<?php echo $consulta3[6];?>" onclick="idioma(id)">
                                                    </div> <?php
                                                } ?>

                                                <?php
                                                if($consulta3[7] != ""){ ?>  
                                                    <div id="otro">
                                                        <input id="otherr" type="text" class="btn" name="other" style="background-color:#0066b2;" placeholder="Otro" value="<?php echo $consulta3[7];?>" onclick="idioma(id)">
                                                    </div> <?php }
                                                else{ ?>
                                                    <div id="otro">
                                                        <input id="otherr" type="text" class="btn" name="other" placeholder="Otro" value="<?php echo $consulta3[7];?>" onclick="idioma(id)">
                                                    </div> <?php
                                                } ?>
                                    
                        </div>

            </div><br><br>

    </form>



                    <div id="titlecuatro">
                        <h3>Experiencia laboral</h3>
                    </div><br><br>

                    <?php $sql = "SELECT e.empresa, e.id, e.inicio, e.fin, e.puesto, e.duracion, e.descripcion, e.tokenAccess, c.token FROM empleos e INNER JOIN credenciales c ON c.token = e.tokenAccess WHERE e.tokenAccess = '".$session."'";
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
                               
                            
                        <div class="md-form">
                            <label for="">Descripción</label>
                            <textarea name="desc" class="md-textarea form-control" rows="5"> <?php echo $row["descripcion"]?></textarea>
                        </div>

                    </form>   
                    <br>
                    
                        

                        
                </div>
                            <?php }} ?>



                            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#addempresa">Agregar experiencia</button>

                    <form action="addempresa.php" method="post">

                        <!-- Modal -->
                        <div class="modal fade" id="addempresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Agregar experiencia laboral</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!--<label for="">Empresa</label>-->
                                        <input type="hidden" name="tokenAccess" value="<?php echo $session; ?>">
                                        <input type="text" name="empresa" id="empresa" class="form-control" placeholder="Empresa">
                                        <br>
                                        <!--<label for="">Puesto</label>-->
                                        <input type="text" name="puesto" id="puesto" class="form-control" placeholder="Puesto">
                                        <br>
                                        <!--<label for="">Duración</label>-->
                                        <input type="text" name="duracion" id="duracion" class="form-control" placeholder="Duración">
                                        <br>
                                        <input type="date" name="inicio" id="inicio" class="form-control">
                                        <br>
                                        <input type="date" name="fin" id="fin" class="form-control">
                                        <br>
                                        <textarea name="desc" placeholder="Descripción del puesto" class="md-textarea form-control" id="desc" rows="5"></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary" name="save" id="save">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>





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
<script src="js/active.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>