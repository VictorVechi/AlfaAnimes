<?php 
session_start();
if( !isset($_SESSION['nome'])){
session_destroy();
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home/selectpage.css">
    <title>Selecione a opção</title>
</head>
<body>  
    <div class="box">
        <span class="hentai"><a href="../BetaHentaiCode/lista.php"></a></span>
        <span class="anime"><a href="../AlfaAnimeCode/lista.php"></a></span>
        <span class="logout"><a href="logout.php"></a></span>
    </div>
    <footer>
        <h2 class="footer">©VictorVechi</h2>
    </footer>
</body>
</html>