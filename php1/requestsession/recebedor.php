<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

echo '<a href="index.php">Voltar</a><br>';

$sobrenome = 'Gomes de Souza <script type="text/javascript">alert("olá mundo");</script> IUASJ!&!(@T¨728i6t15*&@*!&607!620!9761534(!&*@!¨@$!$##';
filter_var($sobrenome, FILTER_SANITIZE_STRING); // FILTER_SANITIZE_STRING FOI DEPRECIADO NO PHP 8.0,  USAR: htmlspecialchars
$sobrenome = htmlspecialchars($sobrenome);
echo $sobrenome . '<br>';

if ($nome && $email && $idade) {

    $expiracao = time() + (86400 * 30); // 1 dia em milisegundos = 86400
    setcookie('nome', $nome, $expiracao);
    echo "Nome: $nome<br>";
    echo "Email: $email<br>";
    echo "Idade: $idade";
} else {
    $_SESSION['aviso'] = '<b style="color:red">Preencha os itens corretamente!</b><br>';
    header('Location: index.php');
    exit();
}