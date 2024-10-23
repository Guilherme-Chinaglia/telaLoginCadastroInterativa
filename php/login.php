<?php
include('dbconnection.php');
// Verificar se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Buscar o usuário pelo email
    $sql = "SELECT * FROM condor1 WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        
        // Verificar a senha
        if (password_verify($senha, $user['senha'])) {
            echo "Login bem-sucedido! Bem-vindo, " . $user['nome'] . "!";
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}

$conn->close();
?>
