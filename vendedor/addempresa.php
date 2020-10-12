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
 

    if(isset($_POST['save'])){
        $empresa = $_POST['empresa'];
        $puesto = $_POST['puesto'];
        $duracion = $_POST['duracion'];
        $inicio = $_POST['inicio'];
        $fin = $_POST['fin'];
        $descr = $_POST['desc'];
        $token= $_POST['tokenAccess'];
        $sentencia = "CALL ADDEMPRESA('$empresa', '$puesto', '$duracion', '$inicio','$fin','$descr','$token')";
        $resultado = mysqli_query($conn, $sentencia);
        
        if($resultado){
            ?>
            <script>
                alert("Registro exitóso.");
                window.history.href(miperfil.php);
            </script>
            <?php	
        }
        else{
            echo "No se pudo agregar :(";
        }

    } 
?> 