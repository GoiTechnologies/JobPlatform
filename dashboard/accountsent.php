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
$email = $_POST["email"];
$paswd = $_POST["paswd"];
$paswd2 = $_POST["paswd2"];
$sql= "SELECT id, email, passwd FROM cuentasadmin WHERE email = '$email'";
$res=$conn->query($sql);
$count=mysqli_num_rows($res);
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {


        if($count == 1)
        {
                ?>
                            <script type="text/javascript">
                                alert("ESTA CUENTA YA EXISTE")
                                    window.history.back();
                                </script>
                        <?php
        }

        else
        {
            if($paswd == $paswd2)
            {

                    $insertar = "INSERT INTO cuentasadmin(email, passwd) VALUES ('$email', '$paswd')";
                    //Ejecutar consulta
                    $resul = mysqli_query($conn, $insertar);
                    if(!$resul) {
                    echo "error al registrar usuario.";
                    }                
                    else{
                        ?>
                            <script type="text/javascript">
                                alert("Cuenta creada satisfactoriamente.")
                                window.location.href="index.php";
                            </script>
                    
                        <?php



                        }                    
            }
                        
        }
}
else{ ?>
    <script>
        alert("Ingresa una dirección de correo válida. Ejemplo: ejemplo@ejemplo.com");
        window.location.href="index.php";
    </script>
    <?php
}

//cerrar conexion
 mysqli_close($conn);

?>