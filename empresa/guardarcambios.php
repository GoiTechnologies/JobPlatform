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
 

    if(isset($_POST['guardar'])){
        $nempresa = $_POST['nempresa'];
        $tel = $_POST['telefono'];
        $cp = $_POST['cp'];
        $ciudad = $_POST['ciudad'];
        $correo = $_POST['correo'];
        $pwd = $_POST['pwd'];
        $pwd2 = $_POST['pwd2'];
        $token = $_POST['session'];
        
        if($pwd == $pwd2){

            $sql = "CALL editarEmpresa('$nempresa','$tel','$cp','$ciudad','$correo','$pwd','$token')";
            $resultado = mysqli_query($conn, $sql);
            
            if($resultado){
                ?>
                <script>
                    alert("Se realizaron los cambios correctamente.");
                    window.history.back();
                </script>
                <?php	
            }
            else{
                echo "No se pudo actualizar :( ";
            }
        }
        else{
            echo "Las contraseñas no coinciden.";
        }


    } 
?> 