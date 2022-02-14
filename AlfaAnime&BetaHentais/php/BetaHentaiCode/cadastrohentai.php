<?php 
    session_start();
    if( !isset($_SESSION['nome'])){
    session_destroy();
    header("Location: index.php");
    }
   if( isset($_POST['nomehentai']) and isset($_POST['generohentai'])){
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $nome = $_POST['nomehentai'];
        $genero = $_POST['generohentai'];
        $query = "INSERT INTO hentais (nomehentai, generohentai) VALUES ('$nome','$genero')";
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
    <link rel="stylesheet" href="../../css/hentais/cadastro.css">
    <title>Beta Hentais</title>
</head>
<body>
    <div class="register-box">
        <div class="row">
            <img src="../../img/ahegao.png" alt="">
        </div>
        <h2>Beta Hentais</h2>
        <form action="cadastrohentai.php" method="POST">
            <div class="anime-box">
                <input type="text" name="nomehentai" autocomplete="off" required=" ">
                <label><i class="anime-name" aria-hidden="true">Nome do Hentai</i></label>
            </div>
            <div class="anime-box">
                <input type="text" name="generohentai" autocomplete="off" required=" ">
                <label><i class="anime-genre" aria-hidden="true">Genêro do Hentai</i></label>
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