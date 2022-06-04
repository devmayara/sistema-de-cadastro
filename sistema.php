<?php

session_start();
include_once('connect.php');
// print_r($_SESSION);
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true))
{
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM usuarios ORDER BY id DESC";

$result = $conexao->query($sql);

print_r($result);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Sistema | Sistema de Cadastro</title>
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
            <a type="button" class="btn btn-outline-primary me-2" href="sair.php">Sair</a>
            <a type="button" class="btn btn-primary" href="cadastro.php">Inscrever-se</a>
        </div>
    </header>
    
    <section>
        <div class="container text-center">
            <?php 
                echo "<h1>Bem-Vindo! <u>$logado</u></h1>";
            ?>
            <h1>Você acessou o sistema</h1>

            <table class="table mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Senha</th>
                        <th>Telefone</th>
                        <th>Sexo</th>
                        <th>Data de Nascimento</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($user_data = mysqli_fetch_assoc($result))
                        {
                            echo "<tr>";
                            echo "<td>".$user_data['id']."</td>";
                            echo "<td>".$user_data['name']."</td>";
                            echo "<td>".$user_data['email']."</td>";
                            echo "<td>".$user_data['password']."</td>";
                            echo "<td>".$user_data['phone']."</td>";
                            echo "<td>".$user_data['sexo']."</td>";
                            echo "<td>".$user_data['data_nasc']."</td>";
                            echo "<td>".$user_data['cidade']."</td>";
                            echo "<td>".$user_data['estado']."</td>";
                            echo "<td>".$user_data['endereco']."</td>";
                            echo "<td>Ações</td>";
                            echo "</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>
