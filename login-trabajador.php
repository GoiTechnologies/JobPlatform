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

$usern = mysqli_real_escape_string($conn, $_POST["e-mail"]);
$passwd = mysqli_real_escape_string($conn, $_POST["passwd"]);
//$passwd=md5($passwd);


$sql="SELECT * FROM credenciales WHERE email = '$usern' AND passwd = '$passwd'";
$res=$conn->query($sql);
$count=mysqli_num_rows($res);
if($count == 0)
{
    ?>
	               <script type="text/javascript">
	                   alert("Usuario y/o contraseña incorrecto.")
                        window.history.back();
                    </script>
            <?php
            
//cerrar conexion
mysqli_close($conn);    

}
else
{
    $sql1="SELECT * FROM credenciales WHERE (email = '$usern' AND passwd = '$passwd')";
    $res1=$conn->query($sql1);
    $count1=mysqli_num_rows($res1);
    if($count1 == 1)
    {
        $sql = "SELECT token, rol from credenciales where email = '".$usern."'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
             // output data of each row
             while($row = $result->fetch_assoc()) {
                 $token = $row['token'];


                 if($row["rol"]=="empresa"){ 
                    session_start();
                    $_SESSION['empresa'] = $token; ?>

                    <script type="text/javascript">
                        alert("Bienvenido")
                        window.location.href="empresa/miperfil.php";
                    </script> 
                    <?php
                 }
                 else{ 
                    session_start();
                    $_SESSION['token'] = $token; ?>
                    <script type="text/javascript">
                        alert("Bienvenido")
                        window.location.href="vendedor/miperfil.php";
                    </script> <?php

                 } 
                }}
    }
    else
    {
    }
    
//cerrar conexion
mysqli_close($conn);

}

?>