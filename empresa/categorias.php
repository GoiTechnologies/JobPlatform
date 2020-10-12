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
$tokenempresa = $_SESSION["empresa"];
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
     <link rel="icon" type="image/png" href="icon.png" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/categorias.css" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>



                <!--Navbar -->
                <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                    <div id="fondo">
                        <a href="index.php"><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                    </div>
                </nav>
                <!--/.Navbar -->



    <div id="barra">      
    </div>
    <div><br><br></div>


    <div id="title">
        <h3>Completar perfil</h3>
    </div> 
    <div><br><br></div>	
    <div class="container">
        <div class="main">
            <br><br>
            <form action="guardarempresa.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="tokenempresa" value="<?php echo $tokenempresa; ?>">

                <b>Sube un imagen de tu empresa</b>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="fotoempresa" lang="es" name="fotoempresa">
                    <label class="custom-file-label">Seleccionar Archivo</label>
                </div><br><br>

                <div class="alert alert-warning" role="alert">
                    Para que tu perfil pueda ser validado, favor de adjuntar la siguiente documentación.
                </div>
                <b>Sube una identificación oficial</b>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="idoficial" lang="es" name="idoficial">
                    <label class="custom-file-label">Seleccionar Archivo</label>
                </div><br><br>

                <b>Sube un comprobante domiciliario</b>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="comprobante" lang="es" name="comprobante">
                    <label class="custom-file-label">Seleccionar Archivo</label>
                </div><br><br>


                    <div class="title" style="text-align: center;"><h1>Elije una categoria:
                    </h1><br></div>

            <div id="fondocat2">
                <p>Elije la(s) categoria(s) donde podrán encontrarte</p>
                <div id="cir">                                    
                    <div id="ofipopular">
                        <input id="oficiopopular" type="text" class="btn" placeholder="Oficios populares" name="ofipopular" value="" onclick="cat(id);">
                    </div>

                    <div id="servprofesional">
                        <input id="servprof" type="text" class="btn" name="servprof" placeholder="Servicios profesionales" value="" onclick="cat(id);">
                    </div>

                    <div id="empleodiverso">
                        <input id="empleodiv" type="text" class="btn" name="empleodiv" placeholder='Empleos diversos' value="" onclick="cat(id);">
                    </div>

                    <div id="empleocorp">
                        <input id="empleocor" type="text" class="btn" name="empleocor" placeholder="Empleos corporativos" value="" onclick="cat(id);">
                    </div>
                </div><br>


                <div id="selofpr" style="display: none;">
                    <select name="selectoficios" class="browser-default custom-select">
                    <?php   
                    $conection=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                    $sql = 'SELECT id, nombre from giros where fkcat = 1';

                    $result = mysqli_query($conection, $sql);
                    mysqli_set_charset($conn,"utf8");

                    $option = '';
                    while($mostrar = mysqli_fetch_array($result))
                    {
                        ?>	
                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre']; ?></option>
                        <?php
                    }
                        mysqli_free_result($result); 
                        ?>       
                    </select> 
                </div><br>

                <div id="selservpr" style="display: none;">
                    <select name="selectservprof" class="browser-default custom-select"> 
                    <?php
                    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                    $sql = 'SELECT id, nombre from giros where fkcat=2'; 
                    $result = mysqli_query($conn, $sql);
                    mysqli_set_charset($conn,"utf8");

                    $option = '';
                    while($mostrar = mysqli_fetch_array($result))
                    {
                        ?>	
                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre']; ?></option>
                        <?php
                    }
                        mysqli_free_result($result); 
                        ?>       
                    </select> 
                </div>    <br>



                <div id="selempleodiv" style="display: none;">
                    <select name="selectempleodiv" class="browser-default custom-select"> 
                    <?php
                    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                    $sql = 'SELECT id, nombre from giros where fkcat=3'; 
                    $result = mysqli_query($conn, $sql);
                    mysqli_set_charset($conn,"utf8");

                    $option = '';
                    while($mostrar = mysqli_fetch_array($result))
                    {
                        ?>	
                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre']; ?></option>
                        <?php
                    }
                        mysqli_free_result($result); 
                        ?>       
                    </select> 
                </div>    <br>


                <div id="selempleocor" style="display: none;">
                    <select name="selectempleocorp" class="browser-default custom-select"> 
                    <?php
                    $conn=mysqli_connect("fdb29.awardspace.net", "3519580_goijob", "GOIJOB2020", "3519580_goijob");
                    $sql = 'SELECT id, nombre from giros where fkcat=3'; 
                    $result = mysqli_query($conn, $sql);
                    mysqli_set_charset($conn,"utf8");

                    $option = '';
                    while($mostrar = mysqli_fetch_array($result))
                    {
                        ?>	
                        <option value="<?php echo $mostrar['id']; ?>"><?php echo $mostrar['nombre']; ?></option>
                        <?php
                    }
                        mysqli_free_result($result); 
                        ?>       
                    </select> 
                </div> <br>


            </div>






                    <div class="title" style="text-align: center;">
                        <h1>Preséntate a tus potenciales clientes</h1>
                    </div>
                    
                    <br>
                    <div class="form-group row" style="text-align: center; align-items:center; justify-content:center">
                        <div col-md-12 style="text-align: center;">
                            <textarea name="descripcion" class="md-textarea form-control" id="" cols="35" rows="7" placeholder="Ej: Somos una empresa de tecnología de CDMX y somos expertos en.. (Mínimo 30 caracteres)"></textarea>
                        </div>
                        <input type="hidden" name="estado" value="2">

                    </div><br><br>

                    <div style="display: flex; flex-direction:column; text-align:center; align-items:center; justify-content:center">
                        <div id="continuar" class="col-sm-3">
                            <button type="submit" class="btn btn-primary" name="finalizar">Finalizar</button>
                        </div><br><br>
                        <div class="card" style="width: 24rem; text-align:center">
                                    <br>
                                            <h5 class="card-title">Sabías que...</h5>
                                            <img src="img/145.jpg" alt="" width="40%" height="130px" style="margin-left:31%">
                                            <p class="card-text">
                                                Hablar sobre tu actividad profesional y trayectoria te diferencía de la competencia.
                                                Destaca los puntos fuertes de tu negocio y convence a tus 
                                                potenciales clientes.
                                            </p>
                                        <br>
                        </div>
                    </div>


                <div class="footer">
                </div><br><br>
            </form>
        </div>


    </div>
 
    
<script src="js/active.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>