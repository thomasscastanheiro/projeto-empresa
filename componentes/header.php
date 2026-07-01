
<?php
$paginaAtual = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard </title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header class="topo">
        <a href="index.php">PE</a>
        <div class="topbar-marca">
        <h1>Painel Empresarial</h1>
        </div>

        <form class="pesquisa" action="produtos.php" method="GET">
            <input type="text" placeholder="Buscar produto">
            <button type="submit">Buscar</button>
        </form>

    </header>
    <aside>
        <nav>
            <a class="<?php echo $paginaAtual == 'index.php' ? 'ativo' : ''; ?>" href="index.php">Dashboard</a>
            <a class="<?php echo $paginaAtual == 'produtos.php' ? 'ativo' : ''; ?>" href="produtos.php">Produtos</a>
            <a class="<?php echo $paginaAtual == 'funcionarios.php' ? 'ativo' : ''; ?>" href="funcionarios.php">Funcionários</a>
            <a class="<?php echo $paginaAtual == 'clientes.php' ? 'ativo' : ''; ?>" href="clientes.php">Clientes</a>
            <a class="<?php echo $paginaAtual == 'producao.php' ? 'ativo' : ''; ?>" href="producao.php">Produção</a>
        </nav>
    </aside>