<?php
$hostname = "localhost";
$bancodedados = "noticiaesportes";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    die("Falha na conexão: " . $mysqli->connect_error);
}

    $sql = "SELECT * FROM categorias";
    $result = $mysqli->query($sql);
        if (!$result) {
            die("Erro na consulta: " . $mysqli->error);
        }
        while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Nome: " . $row['nomecategoria'] . "<br>";
        echo "<br>";
        }

         $result->free();

?>