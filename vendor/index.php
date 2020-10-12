<?php
$servername = "fdb22.awardspace.net";
$username = "3480533_instajob";
$password = "April2020";
$dbname = "3480533_instajob";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name='viewport' content='width=device-width, initial-scale=1'>
    <!--<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'><-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>InstaJob | Sitio Oficial</title>

     <link rel="icon" type="image/png" href="icon.png" />
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<!--<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet"><--->

	<!-- Stylesheets -->
	<!--<link rel="stylesheet" href="css/bootstrap.min.css"/><-->
	<!--<link rel="stylesheet" href="css/font-awesome.min.css"/><-->
	<!--<link rel="stylesheet" href="css/flaticon.css"/><-->
	<!--<link rel="stylesheet" href="css/slicknav.min.css"/><-->
	<!--<link rel="stylesheet" href="css/jquery-ui.min.css"/><-->
    <!--<link rel="stylesheet" href="css/animate.css"/><-->
    <link rel="stylesheet" href="cliente/css/menucl.css" type="text/css" />
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
input[type=submit]{
    background-color:#0066b2;
    color:white;    
    border-radius:50%;
    width:15px;
    height:10px;

}
.mySlides {display:none;}
</style>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>	
    
     </head>
<body>
	<!-- Header section -->
	<header class="header-section">
    <!-- Top Navigation Menu 
    <div class="topnav">
  <a href="#home" class="active">Logo</a>
  <div id="myLinks">
    <a href="#news">News</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div><-->
        
            <div class="nav-fostrap">
                <div id="lo">
						<a href="./index.php" class="site-logo">
                        </a>
							<img src="/img/LOGO GOI JOB.png" alt="" width="190px" height="100px">
                </div>                        
               <div id="bus">
					<form class="header-search-form" action="index.php" method="POST">
							<input type="text" placeholder="Buscar Por Oficio o Ciudad" name="query">
							<button><i class="fa fa-search"></i></button>
                    </form>                    
                </div>
                <div id="men">      
				<ul>
                    <input type="submit" onclick="window.location.href = '/cliente/eventos.php';" value="Crear evento" id="evento"/> 

                    <li><a href="index.php"><i class="fa fa-home"></i>  Inicio</a></li>					
                    <li><a href="faq.php"><i class="fa fa-question-circle"></i> FAQ</a></li>
                    <li><a href="javascript:void(0)"><i class="fa fa-sign-in"></i> Inicia Sesión o Registrate<span class="arrow-down"></span></a>
                        <ul class="dropdown">  
                            <li><a href="logincl.php"><i class="fa fa-address-card"></i> Cliente</a></li>
                            <li><a href="loginve.php"><i class="fa fa-user-circle"></i> Vendedor</a></li>                            
                        </ul>
                    </li>      
                </ul>
                </div>                        
            </div> 
             
		
	</header>
    <!-- Header section end  SLICEBOX -->
    <section id="banner">       

  <img class="mySlides" src="img/BANNER GOIJOB 1.jpg" style="width:100%; height:370px;">
  <img class="mySlides" src="img/BANNER GOIJOB 2.jpg" style="width:100%; height:370px;">
  <img class="mySlides" src="img/BANNER GOIJOB 3.jpg" style="width:100%; height:370px;">  
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</section>		
    <!--SLICEBOB END<-->
		
    <div class="container"><br><br>
    <h1 style="text-align:center">Oficios Populares</h1>
        <br>
        <!--<h1 class="my-3" style="color:#0000FF";><MARQUEE>Disfruta de nuestro catalogo</MARQUEE></h1>-->
        <div align="center", class="row">
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
                    <div class="col-lg-4 portfolio-item"><br>
                        <div class="card h-100">
                            <a><img class="card-img-top" class="center" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']); ?>" width="200" height="300" ></a>                      
                            <div class="card-body">
                                <h4 class="card-title">
                                    <a><?php echo" $link " ?></a><br><p align="justify" ><br>
                                    <a style="font-size:87%;"><?php echo ($row['Descripcion']); ?></a></p>

                                    <p align="center"><a style="font-size:79%; color:blue;"> <i class="fa fa-wrench"></i><?php echo "  Oficio: ",($row['OficioO']);?>
                                    <br><i class="fa fa-phone"></i><?php echo "  Teléfono: ", ($row["Telefono"]);?>
                                    <br><i class="fa fa-envelope"></i><?php echo "  Email: ", ($row["Email"]);?>
                                    <br><i class="fa fa-map-marker"></i><?php echo "  Municipio: ",($row['Municipio']); ?></a></p>                  
                          
                                </h4><br>
                                <a align="center" class="btn btn-primary"<?php echo "$link3" ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a align="center" class="btn btn-primary"<?php echo "$link2" ?></a>

                            </div> 
                        </div>
                    </div>
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
            $sql = "SELECT Id_Oficio, Nombre, Foto FROM oficios ORDER BY Id_Oficio";
            $result = $conn->query($sql);
            //$link = '<a href="mangaka.php" > "'.$row["Mangaka"].'"/a>';
            if ($result->num_rows > 0) {
            // output data of each row
                while($row = $result->fetch_assoc()) {
                    //$foto = '<img  "class="centrado" src= "data:image/jpg;base64'.$row["Foto"].'" width="200" height="200"/>';  
                    $link = '<a href="oficio.php?ID='. $row["Id_Oficio"].'" >' .$row['Nombre'].'</a>';
 
                    $link3='<a href="contacto.php">Contactar</a>'; 

        ?>       <br><br>    
                    <div class="col-lg-3 portfolio-item">
                    <br><br><br>
                        <div class="card h-80">
                            
                            <a><img class="card-img-top" class="center" src="data:image/jpg;base64,<?php echo base64_encode($row['Foto']); ?>" width="30" height="130" ></a>
                            
                            <div class="card-body">
                                <h4 class="card-title">
                                    <h3 style="color:#2980B9;"><?php echo" $link " ?></h3>
                                    <!--<a style="font-size:87%;"><?php echo ($row['Descripcion']); ?></a></p><-->

                                    <!--<p align="center"><a style="font-size:79%; color:blue;"> <i class="fa fa-wrench"></i><?php echo "  Oficio: ",($row['Nombre']);?>
                                    <br><i class="fa fa-phone"></i><?php echo "  Teléfono: ", ($row["Telefono"]);?>
                                    <br><i class="fa fa-envelope"></i><?php echo "  Email: ", ($row["Email"]);?>
                                    <br><i class="fa fa-map-marker"></i><?php echo "  Municipio: ",($row['Municipio']); ?></a></p>                  
                          
                                </h4><br>
                                <a align="center" class="btn btn-primary"<?php echo "$link3" ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                <a align="center" class="btn btn-primary"<?php echo "$link2" ?></a><-->

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
    </div>
	<div>
        <br>
            </div>    
    <footer class="py-4 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; MAJEMA-C Group</p>
      </div>
    </footer>
    <script src="js/index.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.js"></script>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>   
		
    <script src="/vendor/jquery/jquery.min.js" type="text/javascript"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"  type="text/javascript"></script>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
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