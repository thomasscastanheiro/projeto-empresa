<?php
include "conexao.php";

$sqlProdutos = "SELECT COUNT(*) AS total FROM produtos;";
$resultadoProdutos = mysqli_query($conexao, $sqlProdutos);
$totalProdutos = mysqli_fetch_assoc($resultadoProdutos);

$sqlFuncionarios = "SELECT COUNT(*) AS total FROM funcionarios";
$resultadoFuncionarios = mysqli_query($conexao, $sqlFuncionarios);
$totalFuncionarios = mysqli_fetch_assoc($resultadoFuncionarios);

$sqlClientes = "SELECT COUNT(*) AS total FROM clientes";
$resultadoClientes = mysqli_query($conexao, $sqlClientes);
$totalClientes = mysqli_fetch_assoc($resultadoClientes);

$sqlMaiorPreco = "SELECT"

$sqlMaiorSalario
?>