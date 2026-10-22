<?php
session_start();
include 'conexao.php';
include 'cabecalho.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $sql);
}
?>

<main>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="email">Digite o email:</label>
        <input type="text" name="email" placeholder="professor@escola.com">
        <label for="senha">Digite a senha:</label>
        <input type="text" name="senha" placeholder="senhaexemplo1234">
        <button type="submit">Entrar</button>
    </form>
</main>