</html>
<?php
$servidor = "localhost";
$user = "root";
$password = "";
$bd = "practicauno";


$conn = new mysqli($servidor,$user,$password,$bd);
if ($conn->connect_error){
die("Conexion fallida".$conn->connect_error);
}
echo "Conexion exitosa";

$nombres = $_POST['nombres'];
$apellidos = $_POST['apellido'];
$fecha = $_POST['fecha'];
$direccion = $_POST['direccion'];
$colonia = $_POST['colonia'];
$codigo = $_POST['codigo'];
$telefono = $_POST['tel'];
$sql = "INSERT INTO datos (nombres, apellidos, fecha, direccion, colonia, codigo, telefono) VALUES ('$nombres','$apellidos','$fecha','$direccion','$colonia','$codigo','$telefono')";
if($conn->query($sql) ===TRUE){
    echo "Datos almacenados correctamente";
}else{
    echo "Error:".$sql."<br>".$conn->error;
}
    $conn->close();



?>
