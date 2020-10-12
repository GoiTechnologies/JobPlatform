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
 

    if(isset($_POST['guardarperfil'])){
        $tel = $_POST['tel'];
        $correo = $_POST['correo'];
        $ciudad = $_POST['ciudad'];
        $ocupacion = $_POST['ocupacion'];
        $spanish = $_POST['spanish'];
        $english = $_POST['english'];
        $chinese = $_POST['chinese'];
        $german = $_POST['german'];
        $french = $_POST['french'];
        $italy = $_POST['italy'];
        $other = $_POST['other'];
        $id= $_POST['idt'];
        $sentencia = "CALL ACTUALIZAR_DATOSPERSONALES('$tel', '$correo', '$ciudad', '$ocupacion','$spanish','$english','$chinese','$german','$french','$italy','$other','$id')";
        $resultado = mysqli_query($conn, $sentencia);
        
        if($resultado){
            ?>
            <script>
                alert("Se realizaron los cambios correctamente.");
                window.history.back();
            </script>
            <?php	
        }
        else{
            echo "No se pudo actualizar :(";
        }

    } 
?> 