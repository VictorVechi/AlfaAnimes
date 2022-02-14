<?php
    if(isset($_POST['login']) and isset($_POST['password'])){
        $conexao = mysqli_connect("localhost:3306", "root", "12345678");
        mysqli_select_db($conexao, "animes_victor");
        $login = mysqli_real_escape_string($conexao, $_POST['login']);
        $senha = mysqli_real_escape_string($conexao, $_POST['password']);
        $login = trim($login);
        $senha = md5(trim($senha));
        $query = "SELECT * FROM users WHERE login='$login' and password='$senha'";
        $resultado = mysqli_query($conexao, $query);
        $usuarios = mysqli_num_rows($resultado);
        if($usuarios > 0){ 
            $dados = mysqli_fetch_array($resultado);
            if(strcmp($dados['password'], $senha) == 0){
                session_start();
                $_SESSION['id_usuario'] = $dados['idusuarios'];
                $_SESSION['nome'] = $dados['username'];
                header("location: selectpage.php");
            }
            else{
                echo "<script>alert('Senha incorreta')</script>";
            }
        }else{
            echo "<script>alert('Login não existe')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home/loginpage.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="login-box">
        <div class="row">
            <img src="https://raw.githubusercontent.com/obliviate-dan/Login-Form/master/img/avatar.png" alt=""/>
        </div>
        <h2>Login</h2>
        <form action="" method="post" autocomplete="off">
            <div class="user-box">
                <input type="text" name="login" required=""/>
                <label ><i class="fa fa-user" aria-hidden="true"></i>Login</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required=""/>
                <label ><i class="fa fa-user" aria-hidden="true"></i>Senha</label>
            </div><div class="user-box">
                <button type="submit" class="loginbtn"></button>
            </div>
        </form>
        <span> <a href="cadastrousuario.php"></a></span>
    </div>
    <footer>
        <h2 class="footer">©VictorVechi</h2>
    </footer>
</body>
</html>