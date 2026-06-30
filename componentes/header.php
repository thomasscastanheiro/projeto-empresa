<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="topbar">
<a class="menu-mobile" href="index.php" aria-label="Ir para o painel">PE</a>
<div class="topbar-marca">
<strong>Painel Empresarial</strong>
<span>PHP + MySQL</span>
</div>
<form class="busca-global" method="GET" action="produtos.php">
<input type="text" name="busca" placeholder="Buscar produto no sistema">
<button type="submit">Buscar</button>
</form>
<div class="usuario">admin</div>
</header>
<aside class="sidebar">
<div class="logo-sistema">PE</div>
<nav>
<a class="<//?php echo $paginaAtual == 'index.php' ? 'ativo' : ''; ?>" href="index.php">Dashboard</a>
<a class="<//?php echo $paginaAtual == 'produtos.php' || $paginaAtual == 'produto-detalhe.php' ? 'ativo' :
''; ?>" href="produtos.php">Produtos</a>
<a class="<//?php echo $paginaAtual == 'funcionarios.php' ? 'ativo' : ''; ?>"
href="funcionarios.php">Funcionários</a>
<a class="<//?php echo $paginaAtual == 'clientes.php' ? 'ativo' : ''; ?>" href="clientes.php">Clientes</a>
<a class="<//?php echo $paginaAtual == 'producao.php' ? 'ativo' : ''; ?>" href="producao.php">Produção</a>
</nav>
</aside>
<footer class="rodape">
<p>Painel Empresarial desenvolvido com PHP, MySQL, HTML e CSS.</p>
</footer>    
</body>
</html>
--> 
<?php
$paginaAtual = basename($_SERVER["PHP_SELF"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<link rel="stylesheet" href="style.css">
    <header>
        <a href="index.php">PE</a>

        <h1>Painel Empresarial</h1>

        <form action="produtos.php" method="GET">
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