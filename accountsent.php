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
    $token = $_POST["token"];
    $email = $_POST["e-mail"];
    $passwd = $_POST["passwd"];
    $passwd2 = $_POST["passwd2"];
    $rol = $_POST["rol"];
        
    $sql= "CALL REGISTRAR_TR('$token','$email','$passwd')";
    $res=$conn->query($sql);
    $count=mysqli_num_rows($res);
    
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
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

        if($passwd == $passwd2){

            $insertar="CALL REGISTER('$token','$email','$passwd','$rol')";
            $resul = mysqli_query($conn,$insertar); // 
            if($resul){
                session_start();
                $_SESSION['token'] = $token;
            ?>
                <script>
                    alert("Usuario registrado exitosamente")
                    window.location.href="vendedor/registro.php";
                </script>
                <?php
                
            }                
            else{ 
        
                echo " error: ";

            }
            $conn->close();   
        }
        else{
            ?>
                <script>
                    alert("Las contraseñas no coinciden.")
                    window.history.back();
                </script>
                <?php
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