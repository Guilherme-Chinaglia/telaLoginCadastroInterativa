<?php
include('dbconnection.php');
// Verificar se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // Criptografar a senha

    // Verificar se o email já está cadastrado
    $sql = "SELECT * FROM condor1 WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Email já cadastrado!";
    } else {
        // Inserir o novo usuário
        $sql = "INSERT INTO condor1 (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

        if ($conn->query($sql) === TRUE) {
            echo "<h1>Cadastro realizado com sucesso!</h1>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
