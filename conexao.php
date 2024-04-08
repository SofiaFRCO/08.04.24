<?php
$txt_usuario = trim(@$_POST['txt_usuario']);
$txt_senha = md5(trim(@$_POST['txt_senha']));

@session_start();
$_SESSION['usuario'] = NULL;
$_SESSION['senha'] = NULL;
if ($txt_usuario && $txt_senha != '') {
    $_SESSION['usuario'] = $txt_usuario;
    $_SESSION['senha'] = $txt_senha;
}

$host = 'localhost';
if ($_SERVER['SERVER_NAME'] != 'localhost') {
    $host = 'otherhost.mysql.com';
}

$db = 'usuarios';
$usuario = 'root';
$senha = '';

try{
    $conexao = mysqli_connect($host,$usuario,$senha);
    echo 'Conexão bem sucedida.';
}catch (Exeption $e){
    die ('Não foi possível conectar ao banco de dados. Erro: '.$e);
}

$conexao = mysqli_connect($host,$usuario,$senha);

mysqli_select_db($conexao,$db);
?>