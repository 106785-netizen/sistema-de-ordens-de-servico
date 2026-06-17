<?php
try {
    $nome_banco = 'nome_do_banco.sqlite';
    $conexao = new PDO('sqlite:'. $nome_banco);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>