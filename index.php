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

include "componentes/header.php";
?>
<main class="conteudo">
    <section class="hero">
        <h1>Painel empresarial</h1>
        <p>Dashboard de consulta</p>
    </section>
    <section class="sessaoCards">
        <article class="cardResumo">
            <h3>Total de produtos</h3>
            <h4><?php echo($totalProdutos["total"]);?></h4>
        </article>
        <article class="cardResumo">
            <h3>Total de funcionários</h3>
            <h4><?php echo($totalFuncionarios["total"]);?></h4>
        </article>
        <article class="cardResumo">
            <h3>Total de clientes</h3>
            <h4><?php echo($totalClientes["total"]);?></h4>
        </article>
        <article class="cardResumo">
            <h3>Maior salário</h3>
            <h4><?php echo number_format($totalSalario["maiorSalario"]);?></h4>
        </article>
        <article class="cardResumo">
            <h3>Maior preço</h3>
            <h4><?php echo number_format($totalPreco["maiorPreco"]);?></h4>
        </article>
    </section>
</main>
<?php
include "componentes/footer.php";
?>