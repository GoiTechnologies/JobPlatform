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
                        <a href="index.php"><img src="/img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                    </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-555"
                    aria-controls="navbarSupportedContent-555" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent-555">
                    <ul class="navbar-nav ml-auto nav-flex-icons">
                    <li class="nav-item avatar">

                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="">Inicio</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="cerrarsesion.php">Salir
                                </a>
                            </li>
                        </ul>

                    </li>
                    </ul>
                </div>
                </nav>
                <!--/.Navbar -->



    <div id="barra">      
    </div>
    <div><br><br></div>
    <!-- Header section end  SLICEBOX -->
    <section id="banner">       

  <img class="mySlides" src="img/BANNER GOIJOB 1.jpg" style="width:100%; height:370px;">
  <img class="mySlides" src="img/BANNER GOIJOB 2.jpg" style="width:100%; height:370px;">
  <img class="mySlides" src="img/BANNER GOIJOB 3.jpg" style="width:100%; height:370px;">  
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</section>		
    <!--SLICEBOB END<-->
    <div>
        <br><br></div>
    <div id="title">
        <h3>BUSCAR</h3>
    </div> 
    <div><br><br><br><br></div>	
    <div class="container">
        <div class="row", align="center">

    
            <?php   
            if(isset($_POST['query'])) {
                $searchhq = $_POST['query'];
                //$searchhq = preg_replace("#[^0-9a-z]#i","",$searchhq);
                $sql="SELECT v.Id_Vendedor, v.Telefono,CONCAT(v.Nombre, \" \", v.Ap_P, \" \") AS NombreVen, v.Descripcion, v.Email, v.Municipio, o.Nombre As OficioO, v.Foto FROM (vendedor v join oficios o on v.Oficio = o.Id_Oficio) where (o.Nombre like '%{$searchhq}%' or v.Municipio like '%{$searchhq}%')";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                // output data of each row
                    while($row = $result->fetch_assoc()) {
                    $foto = '<img  "class="centrado" src= "'.$row["Foto"].'" width="200" height="200"/>';  
                    $link = '<a href="perfil.php?ID='. $row["Id_Vendedor"].'" >' .$row['NombreVen']. '</a>';
                    $link2 = '<a href="perfil.php?ID='. $row["Id_Vendedor"].'" >' .'Ver perfil'.'</a>'; 

                    //$link2 = '<a href="tomoscte.php?ID='. $row["Man"].'" >' .$row["Nom"]. '</a>';
                    $link3='<a href="#">Contactar</a>'; 
            ?>      


            <?php        
                                                        }
                                                }  
                else { 
            ?>
            <h1 class="my-4" style="color:black"><?php echo "No exite el registro!!"; ?></h1>
            <?php
                }
            }
            else{
            $sql = "SELECT id, nombre FROM categoria ORDER BY id";
            $result = $conn->query($sql);
            //$link = '<a href="mangaka.php" > "'.$row["Mangaka"].'"/a>';
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    $token64=$row['id'];
                    $tokenb64 = base64_encode($token64);
                    //$foto = '<img  "class="centrado" src= "data:image/jpg;base64'.$row["Foto"].'" width="200" height="200"/>';  
                    $link = '<a href="categoria.php?ID='. $tokenb64.'" >' .$row['nombre'].'</a>';
            ?>       <br><br>    
        
         
                         
                    <div class="col-lg-3 portfolio-item">    
                        <div id="tst">                            
                            <div id="tst2">
                                <h2><?php echo "$link"; ?></h2>
                            </div>
                        </div>                  
                    </div> 
                 
                    <?php        
                                                     }
                                        }
               }
                // $conn->close();
            ?>
        </div>   
    </div><br><br>
	<div>
        <br>
            </div>    

 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}



function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>

</body>
</html>