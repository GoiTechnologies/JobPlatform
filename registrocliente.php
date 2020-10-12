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
$email = $_POST["e-mail"];
$passw = $_POST["passwd"];
$passw2 = $_POST["passwd2"];
session_start();

$_SESSION['usuario'] = $email;
$sql= "SELECT email, pwd FROM cuentascliente WHERE email = '$email'";
$res=$conn->query($sql);
$count=mysqli_num_rows($res);
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    if($count == 1)
    {
        ?>
                    <script type="text/javascript">
                        alert("Esta cuenta ya existe.");
                            window.history.back();
                    </script>
                <?php
                mysqli_close($conn);
    }

    else if($count==0)
    {
            // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");

        if($passw == $passw2)
        {
                $insertar = "INSERT INTO cuentascliente(email, pwd) VALUES ('$email', '$passw')";
                //Ejecutar consulta
                $resul = mysqli_query($conn, $insertar);
                if(!$resul) {
	               echo "test de error";
                }                
                else{                   
                        ?>
                        <script type="text/javascript">
	                        alert("Registro exitoso.")
						    window.location.href="cliente/index.php";
                        </script>
                    <?php
            

                    }                    
        }
                    
    }
}
else{ 
    ?>
    <script>
        alert("Ingresa una dirección de correo válida. Ejemplo: ejemplo@ejemplo.com");
        window.location.href="index.php";
    </script>
    <?php
}
    //cerrar conexion
    mysqli_close($conn);

?>