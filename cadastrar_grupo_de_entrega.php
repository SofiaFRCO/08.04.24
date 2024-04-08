<?php
require_once('./conexao.php');

$txtNomeGrupoEntrega = $_POST['txtNomeGrupoEntrega'];
$txtDescricaoGrupoEntrega = $_POST['txtDescricaoGrupoEntrega'];

$str_sql_cadastrar_grupo_entrega = "INSERT INTO `grupos_de_entrega` (`nome`, `descricao`) VALUES ('$txtNomeGrupoEntrega', '$txtDescricaoGrupoEntrega')";

try {
    $cadastrar_grupo_entrega = mysqli_query($conexao, $str_sql_cadastrar_grupo_entrega);
    if ($cadastrar_grupo_entrega) {
        $ultimo_id = $conexao->insert_id;
        $_SESSION['idGrupoEntrega'] = $ultimo_id;
        die('idGrupoEntrega: ' . $_SESSION['idGrupoEntrega']);
    } else {
        die('Não foi possível cadastrar o grupo de entrega. Erro: ' . mysqli_error($conexao));
    }
} catch(Exception $e) {
    die('Não foi possível cadastrar o grupo de entrega. Erro: ' . $e->getMessage());
}
?>
