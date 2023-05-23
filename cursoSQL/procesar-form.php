<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];

    if (empty($nombre) || empty($email)) {
        echo "Nombre y Email son campos requeridos";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "El formato de correo electrónico no es válido";
    } else {
  
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "cursosqlsamsung";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO usuario (NOMBRE, APELLIDO, EMAIL) VALUES ('$nombre', '$apellido', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Formulario enviado correctamente</h1>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Apellido: $apellido</p>";
            echo "<p>Email: $email</p>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
}

?>
<button class="waves-effect waves-light btn" onclick="window.location.href='formulario.html'">Volver al formulario</button>




