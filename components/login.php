<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="../css/login.css">
    <title> Adota Pet </title>
</head>

<body>
  <a href="index.html" class="icon"><i class="fa-solid fa-circle-left"> Voltar </i></a>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="efetuar_login.php" method="POST">
            <input type="hidden" name="hidden" value="1">
                <h1>Cadastrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <span>ou use seu email</span>
                <input type="text" name="name" placeholder="Nome">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <input type="number" name="cep" placeholder="CEP">
                <input type="text" name="rua" placeholder="Rua">
                <input type="text" name="city" placeholder="Cidade">
                <input type="text" name="uf" placeholder="UF">

                <button>Cadastrar</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="logar.php" method="POST"> 
                <h1>Entrar</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <span>ou use seu email e senha</span>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Senha">
                <a href="#">Esqueci Minha Senha</a>
                <button>Entrar</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Bem-vindo(a) de volta, aumigo!</h1>
                    <p>Entre para usar todos os recursos do site.</p>
                    <button class="hidden" id="login">Entrar</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Olá, Aumigo!</h1>
                    <p>Cadastre-se para usar todos os recursos do site</p>
                    <button class="hidden" id="register">Cadastrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/login.js"></script>
</body>

</html>