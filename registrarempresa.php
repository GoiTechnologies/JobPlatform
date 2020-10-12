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

if(isset($_POST['guardarempresa'])){
    $tokenempresa = $_POST["tokenempresa"];
    $tamaño = $_POST["size"];
    $nempresa = $_POST["nempresa"];
    $correoe = $_POST["correoempresa"];
    $tel = $_POST["tel"];
    $cp = $_POST["cp"];
    $ciudad = $_POST["ciudad"];
    $giro =$_POST["giro"];
    $pwdempresa = $_POST["pwdempresa"];
    $rol = $_POST["rol"];
    
    $sql = "CALL REGISTRAR_TR('$tokenempresa','$correoe','$pwdempresa')";
    $res=$conn->query($sql);  
    $count=mysqli_num_rows($res);
    
if (filter_var($correoe, FILTER_VALIDATE_EMAIL)) {
    if($count >=1){

    ?>
                        <script type="text/javascript">
                            alert("ESTA CUENTA YA EXISTE")
                            window.history.back();
                        </script>
                
                    <?php 
                      $conn->close();   
    } // manda tus parametros haber
    else if($count==0){

           
        $conn = new mysqli($servername, $username, $password, $dbname);
        mysqli_set_charset($conn,"utf8");

            $insertar="CALL insertEmpresa('$tokenempresa','$tamaño','$nempresa','$tel','$cp','$ciudad','$giro')";
            $resul = mysqli_query($conn,$insertar); // 

            $insertarcred="CALL REGISTER('$tokenempresa','$correoe','$pwdempresa','$rol')";
            $resul = mysqli_query($conn,$insertarcred); // 


            if($resul){
                session_start();
                $_SESSION['empresa'] = $tokenempresa;
            ?>

                        <!DOCTYPE html>
                       <html lang="en">
                       <head>
                           <meta charset="UTF-8">
                           <meta name="viewport" content="width=device-width, initial-scale=1.0">
                           <title>Registro</title>
                           <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <link rel="stylesheet" href="css/index.css">
                            <link rel="stylesheet" href="css/regisempresa.css">
                            <link rel="stylesheet" href="css/estilos.css" type="text/css">
                            <link rel="stylesheet" href="css/modals.css">
                            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

                       </head>


                       <body>
                           <!--Navbar -->
                                <nav class="mb-1 navbar navbar-expand-lg navbar-dark orange lighten-1" style="background-color:#00AEEF;">
                                    <div id="fondo">
                                        <a href="index.php"><img src="img/LOGO GOI JOB.png" width="200px;" height="100px;" style="margin-left:60px; margin-top:-10px;"></a>
                                    </div>
                                </nav>
                            <!--/.Navbar -->
                            <div id="barra"></div>

                            <div class="container" style="align-items: center; text-align:center; justify-content:center">
                                <div></div>
                                <img src="img/5482.jpg" alt="" width="57%" height="50%">
                                <br>
                                <div class="title" style="text-align: center;">
                                            <h2>¡Felicidades!</h2><br>
                                            <h2>Ya estás registrado</h2>
                                </div>

                                    <div>
                                        <br>
                                    </div>
                                <div style="display: flex; flex-direction:column; text-align:center; align-items:center; justify-content:center">
                                    <div id="completar" class="col-sm-3">
                                        <a href="empresa/categorias.php"><button type="submit" class="btn btn-dark">Completar perfil</button></a>
                                    </div><br><br>
                                    <div class="card" style="width: 18rem; text-align:center">
                                    <br>
                                            <h5 class="card-title">Sabías que...</h5>
                                            <h2>87%</h2>
                                            <p class="card-text">de los clientes prefieren contratar profesionales que tienen un perfil completado</p>
                                        <br>
                                    </div>
                                </div>


                                <div class="footer">
<br>
                                </div>
                            </div>

                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
                       </body>
                       </html>
                
                <?php
                
            }                
            else{ 
        
                echo " error: ";
                $conn->close(); 
            }
                            
    }

}//end if email validation
else{ ?>
    <script>
        alert("Ingresa una dirección de correo electrónico.");
        //window.location.href="index.php";
        window.history.back();
    </script>
    <?php
    $conn->close();
}


}//end isset
?>