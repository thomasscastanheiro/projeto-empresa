<?php
define('SERVIDOR','localhost');
define('USUARIO','root');
define('SENHA','');
define('BASEDADOS','empresa26');

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BASEDADOS);

if(!$conexao) {
    die("Erro ao conectar com o banco: " . mysqli_connect_error());
}

mysqli_set_charset($conexao,"utf8");
?>