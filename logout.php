<?php session_start();
    echo $_SESSION['nm_usu'];
    exit();
    unset($_SESSION['login']);
    unset( $_SESSION['SGI']);
    unset( $_SESSION['nm_usu']);

    session_unset();
    session_destroy();

    echo "<script type='text/javascript'>location.href = './index.html';</script>";
    exit();

?>

