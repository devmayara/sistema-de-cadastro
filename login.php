<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login | Sistema de Cadastro</title>
</head>
<body>
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">Sistema de Cadastro</a>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="" class="nav-link px-2 link-secondary">Home</a></li>
            <li><a href="" class="nav-link px-2 link-dark">Features</a></li>
            <li><a href="" class="nav-link px-2 link-dark">Pricing</a></li>
            <li><a href="" class="nav-link px-2 link-dark">FAQs</a></li>
            <li><a href="" class="nav-link px-2 link-dark">About</a></li>
        </ul>

        <div class="col-md-3 text-end">
            <a type="button" class="btn btn-outline-primary me-2" href="login.php">Login</a>
            <a type="button" class="btn btn-primary" href="cadastro.php">Inscrever-se</a>
        </div>
    </header>
    <section>
        <div class="container">
            <h1 class="text-center text-primary my-5">Login</h1>
            <form action="test-login.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control mb-3" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" class="form-control mb-3" id="password" name="password" placeholder="Senha">
                </div>
                <input type="submit" id="submit" name="submit" class="btn btn-primary" value="Entrar">
            </form>
        </div>
    </section>
</body>
</html>
