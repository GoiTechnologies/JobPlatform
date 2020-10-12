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
if(isset($_POST['calificar'])){

     
$calificacion = $_POST["range"];    
$fkuser = $_POST["fkuser"];

    $insertar = "INSERT INTO calificaciones(calificacion, fktrabajador)
    VALUES ('$calificacion','$fkuser')";
    //Ejecutar consulta
    $resul = mysqli_query($conn, $insertar);
    if(!$resul) {
         echo "Error en el servidor";
        }                
                else{

                    $sql = "SELECT id, tokenAccess FROM `datosacademicos` WHERE tokenAccess = '$fkuser'";
                    $result = $conn->query($sql);     
                    if ($result->num_rows > 0) {
                    // output data of each row
                        while($row = $result->fetch_assoc()) {
                            //$foto = '<img  "class="centrado" src= "data:image/jpg;base64'.$row["Foto"].'" width="200" height="200"/>';
                            $fkusergeneral = 'perfil.php?ID='.$row["tokenAccess"].''                               
                        ?> 
                        <script type="text/javascript">
                            alert("Gracias por calificar.")
                            window.location.href="<?php echo "$fkusergeneral" ?>";

                        
                        </script>
                        <?php
                                                            }
                                                } 
                                                
                }                         
                                                
                
//cerrar conexion
 mysqli_close($conn);
}
?>    