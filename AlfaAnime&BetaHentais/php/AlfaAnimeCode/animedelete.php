<?php
    session_start();
    if( !isset($_SESSION['nome'])){
    session_destroy();
    header("Location: index.php");
    } 
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $query = "DELETE FROM animes WHERE idanime='$id'";
        echo $query;
        $resultado = mysqli_query($conexao, $query);
        if (!$resultado){
            echo"<script>alert('Erro ._.)')</script>";
        }
        mysqli_close($conexao);
        header("Location: lista.php");
    }
?>