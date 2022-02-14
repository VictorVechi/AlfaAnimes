<?php 
    session_start();
    if( !isset($_SESSION['nome'])){
    session_destroy();
    header("Location: index.php");
    }
   if( isset($_POST['nomeanime']) and isset($_POST['generoanime'])){
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $nome = $_POST['nomeanime'];
        $genero = $_POST['generoanime'];
        $query = "INSERT INTO animes (nomeanime, generoanime) VALUES ('$nome','$genero')";
        $resultado = mysqli_query($conexao, $query);
        if (!$resultado){
            echo"<script>alert('Erro no cadastro!')</script>";
        }
        mysqli_close($conexao);
   }
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/animes/cadastro.css">
    <title>Alfa Animes</title>
</head>
<body>
    <div class="register-box">
        <div class="row">
            <img src="../../img/tanjiro.png" alt="">
        </div>
        <h2>Alfa Animes</h2>
        <form action="cadastroanime.php" method="POST">
            <div class="anime-box">
                <input type="text" name="nomeanime" autocomplete="off" required=" ">
                <label><i class="anime-name" aria-hidden="true">Nome do Anime</i></label>
            </div>
            <div class="anime-box">
                <input type="text" name="generoanime" autocomplete="off" required=" ">
                <label><i class="anime-genre" aria-hidden="true">Genêro do Anime</i></label>
            </div>
            <button type="submit" class="salvar"></button>
        </form>
        <span><a href="lista.php"></a></span>
    </div>
    <footer>
                <h2 class="footer">©VictorVechi</h2>
    </footer>
</body>

</html>