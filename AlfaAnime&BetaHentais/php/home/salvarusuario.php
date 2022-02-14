<?php 
   session_start();
   if( !isset($_SESSION['nome'])){
   session_destroy();
   header("Location: index.php");
   }
   if( isset($_POST['login']) and isset($_POST['username']) and isset($_POST['password'])){
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $nome = $_POST['username'];
        $login = $_POST['login'];
        $senha = md5($_POST['password']);
        $query = "INSERT INTO users (username, login, password ) VALUES ('$nome','$login','$senha')";
        $resultado = mysqli_query($conexao, $query);
        mysqli_close($conexao);
        header("Location: index.php");
   }
?>