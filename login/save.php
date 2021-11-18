<?php include('db.php');

if (isset($_POST['guardar'])) {
    $email= $_POST['email'];
    $fechanacimiento=$_POST['fechanacimiento'];
    $usuario=$_POST['usuario'];
    $contraseña=$_POST['contraseña'];

    $query="INSERT INTO registro values ('$email', '$fechanacimiento' ,'$usuario', '$contraseña')";
    $result=mysqli_query($conn, $query);
    if(!$result) {
        die("Query_failed.")
    }
    header('location: registro.php');
}

?>