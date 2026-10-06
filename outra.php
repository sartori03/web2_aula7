<?php

session_start();

if(isset($_SESSION['nome'])) {

    echo "Usuário logado: " . $_SESSION['nome'];

} else {

    echo "Você precisa fazer login.";

}

?>

