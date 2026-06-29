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

$sqlMaiorSalario = "SELECT MAX(Salario) AS maiorSalario FROM funcionarios";
$resultadoMaiorSalario = mysqli_query($conexao, $sqlMaiorSalario);
$totalSalario = mysqli_fetch_assoc($resultadoMaiorSalario);

$sqlMaiorPreco = "SELECT MAX(Preco) AS maiorPreco FROM produtos";
$resultadoMaiorPreco = mysqli_query($conexao, $sqlMaiorPreco);
$totalPreco = mysqli_fetch_assoc($resultadoMaiorPreco);

include "header.php";
?>