<?php
// Inicie a sessão (se ainda não estiver iniciada)
session_start();

// Verifique se as variáveis de sessão existem
if (!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])) {
    header('Location: index.php');
    exit;
}

// Limpe todas as variáveis de sessão
session_unset();

// Destrua a sessão
session_destroy();

// Redirecione para a página de login com um atraso de 2 segundos
header("Refresh: 2; url=index.php");
exit;
?>
