<?php
    session_start();
    if( !isset($_SESSION['nome'])){
    session_destroy();
    header("Location: index.php");
    } 
   if(isset($_GET['id'])){
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $id = $_GET['id'];
        $query = "SELECT * FROM hentais WHERE idhentai='$id' ";
        $resultado = mysqli_query($conexao, $query);
        $hentais = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        $hentai = $hentais[0];
        $nome = $hentai['nomehentai'];
        $genero = $hentai['generohentai'];
        mysqli_close($conexao);
   }
   else if( isset($_POST['nomehentai']) and isset($_POST['generohentai'])){
        $nome = $_POST['nomehentai'];
        $genero = $_POST['generohentai'];
        $idhentai = $_POST['idhentai'];
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $query = "UPDATE hentais SET nomehentai ='$nome',generohentai='$genero' WHERE idhentai='$idhentai'";
        $resultado = mysqli_query($conexao, $query);
        if (!$resultado){
            echo"<script>alert('Erro na Atualização!')</script>";
        }
        mysqli_close($conexao);
        header("Location: lista.php");
   }
?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/hentais/update.css">
    <title>Update</title>
</head>
<body>
    <div class="register-box">
        <div class="row">
            <img src="../../img/ahegao.png" alt="">
        </div>
        <h2>Beta Hentais</h2>
        <form action="update.php" method="POST">
            <?php
                echo "<div class='anime-box'>";
                echo    "<input type='hidden' name='idhentai' value='$id'>";
                echo    "<input type='text' name='nomehentai' autocomplete='off' required=' ' value='$nome' >";
                echo    "<label><i class='anime-name' aria-hidden='true'>Nome do Anime</i></label>";
                echo "</div>";
                echo "<div class='anime-box'>";
                echo    "<input type='text' name='generohentai' autocomplete='off' required=' ' value='$genero' >";
                echo    "<label><i class='anime-genre' aria-hidden='true'>Genêro do Anime</i></label>";
                echo "</div>";
                echo "<button type='submit' class='atualizar'></button>";
            ?>
        </form>
        <span><a href="lista.php"></a></span>
        <span class="cadastro"><a href="cadastrohentai.php"></a></span>
    </div>
    <footer>
                <h2 class="footer">©VictorVechi</h2>
    </footer>
</body>

</html>