<?php

$host = "localhost";
$user = "root";
$senha = "";
$database = "arcadetec";

$conn = mysqli_connect($host, $user, $senha, $database);

if(isset($_POST['logar-dono'])){
    session_start();
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = mysqli_query($conn, "SELECT * FROM dono WHERE email='$email' and senha='$senha' ");

    $result = mysqli_fetch_assoc($query);

    if(empty($result)){
        $_SESSION['msg'] = "Usuário inexistente";
        header("location:login-dono.php");

    } else{
        $_SESSION['email'] = $result['email'];
        $_SESSION['senha'] = $result['senha'];
        header("location:tela-dono.php");

    }


}


?>