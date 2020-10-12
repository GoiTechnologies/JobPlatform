<?php
$servername = "fdb29.awardspace.net";
$username = "3519580_goijob";
$password = "GOIJOB2020";
$dbname = "3519580_goijob";
$idcat = $_GET["ID"];
$idcat = base64_decode($idcat);
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
    <link rel="stylesheet" href="css/cte.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/categoria.css" type="text/css">


    
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href = "css/jquery-ui.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado --> 
    <link rel="stylesheet" href="main.css">  
      
      
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->  
    <link rel="stylesheet"  type="text/css" href="datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    #globshow{
    width:90%;
    margin-left:0px;    
    margin-top:20px;    
    height:80%;
    padding-left:0px;
    padding-right:30px;
    padding-bottom:20px;
    }
</style>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
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
    <div><br><br></div>
    <!-- Header section end  SLICEBOX -->

<div id="title">


    <?php
            $sql = "SELECT id, nombre FROM categoria WHERE id= '".$idcat."' ORDER BY id";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    //$foto = '<img  "class="centrado" src= "data:image/jpg;base64'.$row["Foto"].'" width="200" height="200"/>';  
                    //$link = '<a href="oficio.php?ID='. $row["id"].'" >' .$row['nombre'].'</a>';
    ?>       
    <h3><?php echo $row['nombre']; }}?></h3>
   
</div>
 
<br><br><br>

<br>
<div class="container">
<div class="row">


            <?php

            if($idcat==3 || $idcat==4){


                $sql = "SELECT CONCAT(datospersonales.nombre, \" \", datospersonales.app, \" \") AS fullname, credenciales.token, categorias.fkgiro, datospersonales.tokenAccess, datospersonales.ocupacion, datospersonales.foto, datospersonales.tel, datospersonales.correoel, datospersonales.estado, datospersonales.ciudad FROM datospersonales inner join credenciales ON credenciales.token = datospersonales.tokenAccess inner join categorias ON categorias.tokenAccess = credenciales.token where categorias.categoria ='".$idcat."' and datospersonales.estado = 1";
            $result = $conn->query($sql);
            //$link = '<a href="mangaka.php" > "'.$row["Mangaka"].'"/a>';
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    //$foto = '<img  "class="centrado" src= "data:image/jpg;base64'.$row["Foto"].'" width="200" height="200"/>';  
                    $link = '<a href="perfil.php?ID='. $row["token"].'" >' .$row['fullname'].'</a>';
                    $link2 = '<a href="perfil.php?ID='. $row["token"].'" >' .'Ver perfil'.'</a>';  
 
                    $link3='<a href="contacto.php">Contactar</a>'; 

        ?>       <br>
                    <div class="col-lg-4 portfolio-item">
                        <br>
                        <!--<div class="card h-80"><-->
                        <div id="perfil">
                            <div id="foto">
                                
                                <div id="cuerpo">

                                    <div id="t">
                                    <a href=""><?php echo '<img src="'.$row['foto'].'" width="146px;" height="145px;" style="border-radius:50%">'?></a>
                                    </div>
                                    <div>
                                        <br><br>
                                        <br><br><br>
                                    </div>
                                        <p align="center" style="font-family:Montserrat Negra; font-size:23px; color:white;" ><?php echo" $link " ?></p><br>
                                        <p align="left"><a style="font-family:Montserrat Negra; font-size:17px; color:white;"> <i class="fa fa-wrench"></i><?php echo "  Oficio: ",($row['ocupacion']);?></p>
                                        <p align="left"><i class="fa fa-phone"></i><?php echo "  Teléfono: ", ($row["tel"]);?></p>
                                        <p align="left"><i class="fa fa-envelope"></i><?php echo "  Email: ", ($row["correoel"]);?></p>
                                        <p align="left"><i class="fa fa-map-marker"></i><?php echo "  Ciudad: ",($row['ciudad']); ?></a></p>                  
                                        <p></p><br>
                                        <a align="center" class="btn"<?php echo "$link3" ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a align="center" class="btn"<?php echo "$link2" ?></a>
                                </div>                                       
                            </div>                                         
                        </div>
                    </div>
            <?php        
                                                     }
                                        }
               





                $conn = new mysqli($servername, $username, $password, $dbname);
                mysqli_set_charset($conn,"utf8");   

                $sql = "SELECT e.token, e.tamano, e.nombre, e.giro, c.email, e.tel, e.cp, e.ciudad, e.foto, cat.categoria, e.descripcion, e.estado from empresa e inner join credenciales c on e.token = c.token inner join categorias cat on cat.tokenAccess = c.token where e.estado=1 and cat.categoria = '".$idcat."'";
                $result = mysqli_query($conn, $sql);

                ?> 

                <!--Ejemplo tabla con DataTables-->

                <div class="col-lg-12">
                    <div class="table-responsive">        
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Teléfono</th>
                                <th>Ciudad</th>
                                <th>Giro empresarial</th>
                                <th>Foto</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($mostrar=mysqli_fetch_row($result)){
                                $token = $mostrar[0];
                                $linkperfil = '<a style="color:black;" href="perfilempresa.php?ID='. $mostrar[0].'" >' .'Ver perfil'.'</a>';
                            
                             ?>
                            <tr>
                                <td><?php echo $mostrar[2] ?></td>
                                <td><?php echo $mostrar[4] ?></td>
                                <td><?php echo $mostrar[5] ?></td>
                                <td><?php echo $mostrar[7] ?></td>
                                <td><?php echo $mostrar[3] ?></td>
                                <td><?php echo '<img src="'.$mostrar[8].'" width="100px;" height="100px;">';?></td>
                                <td><?php echo $linkperfil ?></td>
                            </tr>
                            <?php
                            }
                             ?>
                        </tbody>        
                       </table>                  
                    </div>
                </div>



                    <?php        
                                                     
                                        }

            else{
                    $sql = "SELECT id, nombre, foto, fkcat FROM giros WHERE fkcat= '".$idcat."' ORDER BY id";
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $tsr = $row['id'];
                            $b64 = base64_encode($tsr);
                            //$foto = '<img  "class="centrado" src= "data:image/jpg;base64'.$row["Foto"].'" width="200" height="200"/>';  
                            $link = '<a href="oficio.php?ID='. $b64.'" >' .$row['nombre'].'</a>';
                        ?>       


                <br>
                    <br><br><br><br>
                    <div class="col-sm-4">
                        <div id="fond">
                            <div id="pic">
                                <a><img class="card-img-top" class="center" src="data:image/jpg;base64,<?php echo base64_encode($row['foto']); ?>" width="310px" height="130px" ></a>
                            </div>           
                        
                            <div id="titleo">
                                <h3><?php echo "$link" ?></h3>
                            </div>                      
                        </div>  
                    </div>
                    <?php        
                                                  }
                                         }
            }
                // $conn->close();
                    ?> 
           

        <br><br><br>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
<script src="/vendor/jquery/jquery.min.js" type="text/javascript"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="jquery/jquery-3.3.1.min.js"></script>
    <script src="popper/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
      
    <!-- datatables JS -->
    <script type="text/javascript" src="datatables/datatables.min.js"></script>    
     
    <script type="text/javascript" src="main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>