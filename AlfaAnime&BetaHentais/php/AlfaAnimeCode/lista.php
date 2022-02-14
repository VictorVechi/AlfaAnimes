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
    <link rel="stylesheet" href="../../css/animes/lista.css">
    <script>
        function deletaranime(id, nome){
        var resposta = confirm("Vai deletar o " +nome+ " mesmo bro?");
        if(resposta){
        window.location.href = 'animedelete.php?id='+id;
    }
}
    </script>
    <title>Animes</title>
</head>
<body>  
    <div class="box">
        <?php 
            $conexao = mysqli_connect("localhost:3306", "root", "12345678");
            mysqli_select_db($conexao, "animes_victor");
            $query = "SELECT * from animes";
            $resultado = mysqli_query($conexao, $query);
            $animes = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
            echo('<table class="tabela"> <tr><td>Nome</td> <td>Gênero</td> <td class="vazio"></td> <td class="vazio"></td> </tr>');
            if(!$resultado){
                $animes = array();
            }
            foreach($animes as $anime){
                $id = $anime['idanime'];
                $nome = $anime['nomeanime'];
                $genero = $anime['generoanime'];
                $delete = "<button onClick='deletaranime($id,`$nome`)'; class='botao'></button>";
                $update = "<a class='update' href='update.php?id=$id'></a>";
                echo('<tr> <td>'.$nome.'</td> <td>'.$genero.'</td> <td>'.$delete.'</td> <td>'.$update.'</td></tr>');
            }
            echo('</table>');
            mysqli_close($conexao);
        ?>
        <span class="cadastro"><a href="cadastroanime.php"></a></span>
        <span class="logout"><a href="../home/logout.php"></a></span>
        <span class="hentai"><a href="../BetaHentaiCode/lista.php"></a></span>
    </div>
    <footer>
                <h2 class="footer">©VictorVechi</h2>
    </footer>
</body>
</html>