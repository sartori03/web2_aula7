<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$nome = $_GET['nome'];
$email = $_GET['email'];

$comando = "SELECT * FROM usuarios WHERE nome = :nome AND email = :email";

$stm = $conexao->prepare($comando);
$stm->execute();

$resultado = $stm->fetch(PDO::FETCH_ASSOC);

if($resultado) {

    $_SESSION['nome'] = $resultado['nome'];

    echo "Login correto!<br>";
    echo "<a href='outra.php'>Ir para outra página</a>";

} else {

    echo "Nome ou e-mail incorretos!";

}

?>
