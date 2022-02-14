<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/home/registerpage.css">
    <title>LOGIN</title>
</head>
<body>
    <div class="login-box">
        <div class="row">
            <img src="https://raw.githubusercontent.com/obliviate-dan/Login-Form/master/img/avatar.png" alt=""/>
        </div>
        <h2>Login</h2>
        <form action="salvarusuario.php" method="post" autocomplete="off">
            <div class="user-box">
                <input type="text" name="login" required=""/>
                <label ><i class="fa fa-user" aria-hidden="true"></i>Login</label>
            </div>
            <div class="user-box">
                <input type="text" name="username" required=""/>
                <label ><i class="fa fa-user" aria-hidden="true"></i>Nome de Usuário</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required=""/>
                <label ><i class="fa fa-user" aria-hidden="true"></i>Senha</label>
            </div><div class="user-box">
                <button type="submit" class="loginbtn"></button>
            </div>
        </form>
    </div>
    <footer>
        <h2 class="footer">©VictorVechi</h2>
    </footer>
</body>
</html>