<?php
require_once('./conexao.php');

$txtNomeBeneficio = $_POST['txtNomeBeneficio'];
$txtDescricaoBeneficio = $_POST['txtDescricaoBeneficio'];   

$str_sql_cadastrar_Beneficio = "INSERT INTO `beneficios` (`nome`, `descricao`) VALUES ('$txtNomeBeneficio', '$txtDescricaoBeneficio')";

try {
    $cadastrar_beneficio = mysqli_query($conexao, $str_sql_cadastrar_beneficio);
    if ($cadastrar_beneficio) {
        $ultimo_id = $conexao->insert_id;
        $_SESSION['idBeneficio'] = $ultimo_id;
        die('idBeneficio: ' . $_SESSION['idBeneficio']);
    } else {
        die('Não foi possível cadastrar o beneficio. Erro: ' . mysqli_error($conexao));
    }
} catch(Exception $e) {
    die('Não foi possível cadastrar o beneficio. Erro: ' . $e->getMessage());
}
?>