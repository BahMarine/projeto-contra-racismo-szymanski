<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    // Aqui você pode enviar um e-mail ou armazenar os dados em um banco de dados
    mail("seuemail@exemplo.com", "Contato do Site", $mensagem, "From:" . $email);
}
?>