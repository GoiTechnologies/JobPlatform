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
	if($_SESSION == null || $_SESSION == '') 		
    {?>
    <h1 style="color:blue;"><?php echo 'Para poder ver el contenido, favor de iniciar sesión.';	?></h1>
    <button type="submit" id="btn" class="btn btn-primary"><a href="../index.php">Regresar</a></button>
    <?php die();
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/menuv.css" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<header class="header-section">
		<nav>
            <div class="nav-fostrap">
                <div id="logotipo">
						<!-- logo -->
						<a href="./index.php" class="site-logo">
							<img src="/img/insta.png" alt="" width="175px" height="100px">
						</a>
                </div>             						
				<div id="busca">
					<form class="header-search-form" action="index.php" method="POST">
							<input type="text" placeholder="Buscar Por Oficio o Municipio" name="quer">
							<button><i class="fa fa-search"></i></button>
                    </form>                    
                </div>
                 
                <?php
                    $sql= "SELECT Id_Vendedor, UserName FROM `vendedor` WHERE UserName = '{$_SESSION['usuario']}'";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            $myprofile = '<a href="miperfil.php?ID=' .$row["Id_Vendedor"].'" >'.'Mi perfil'.'</a>';
                            ?>
                <div id="menuv"> 

                    <ul>    
                        <li><a href="index.php"><i class="fa fa-home"></i>  Inicio</a></li> 
                        <li><a href="faq.php"><i class="fa fa-question-circle"></i> FAQ</a></li>
                                   
                        <li><img src="img/avataprofile.png" width="60px" height="50px"><?php echo $myprofile;   }
                        }?><span class="arrow-down"></span>
                        <ul class="dropdown">
                            <li><a href="cerrarsesion.php" style="font-size:90%;"><i class="fa fa-sign-out"></i> Cerrar Sesión</a></li>
                        </ul>
                        </li>
                    </ul>
				</div>           	
			</div>
		</nav>		
	</header>
<script type="text/javascript" src="https://form.jotform.co/jsform/93174355870867"></script>
 
</body>
</html>

