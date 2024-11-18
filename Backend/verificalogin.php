<?php

//Este arquivo verifica se o usuario possui uma sessão ativa e está logado

session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado'] === true) {
    echo json_encode(["logado" => true, "usuario" => $_SESSION['usuario'], "id_Usuario" => $_SESSION["id_Usuario"], "nivel" => $_SESSION["nivel"]]);
} else {
    echo json_encode(["logado" => false]);
}
?>