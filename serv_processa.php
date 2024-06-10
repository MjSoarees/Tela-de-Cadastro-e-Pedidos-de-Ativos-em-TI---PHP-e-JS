<?php
//incluindo a conexao com banco 
include_once('conexao/conexao.php');

$dados_request = $_REQUEST;
//obter a quantidade de registros do banco 
$query_cont_usuarios = "select count(id_funcionario) as qnt_funcionarios from tbfuncionarios";
$resultado_query_qtd = $conn->prepare($query_cont_usuarios);
$resultado_query_qtd->execute();
$linha_qtd_usuarios = $resultado_query_qtd->fetch(PDO::FETCH_ASSOC);
//var_dump($linha_qtd_usuarios);


//registros do banco

$query_usuarios = "Select * from tbfuncionarios order by id_funcionario DESC";
$result_usuarios = $conn->prepare($query_usuarios);
$result_usuarios->execute();

while ($linha_usuario = $result_usuarios->fetch(PDO::FETCH_ASSOC)){
   // var_dump($linha_usuario);
    extract($linha_usuario);
    $registro = [];
    $registro[] = $id_funcionario;
    $registro[] = $nome;
    $registro[] = $id_cargo;
    $registro[] = "
    <button type='submit' id='$id_funcionario' onclick='visualizar($id_funcionario)' class='btn btn-outline-primary btn-sm'>Visualizar</button>
    <button type='submit' id='$id_funcionario' onclick='editar($id_funcionario)'  class='btn btn-outline-warning btn-sm'>Editar</button>
    <button type='submit' id='$id_funcionario' onclick='excluir($id_funcionario)'  class='btn btn-outline-danger btn-sm'>Excluir</button>
    ";
    $dados[] = $registro;
}
//var_dump($dados);

//criar o array de info a serem retornados pelo javascript
$resultado = [
"recordsTotal" => intval($linha_qtd_usuarios['qnt_funcionarios']),//quantidade de registro no banco na tabela
"recordsFiltered" =>intval($linha_qtd_usuarios['qnt_funcionarios']),
"data" => $dados //array de dados com os registros retornados da tabela funcionarios
];
//var_dump($resultado);
//retorna os dados em formado js
echo json_encode($resultado);