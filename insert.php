<?php

include ('conecta.php');

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$senha = $_POST['senha'];


$teste = $conn->prepare('INSERT INTO cadastro (Nome, Telefone, Senha) VALUES (:n, :t, :s)');
$teste->bindValue(":n","$nome");
$teste->bindValue(":t","$telefone");
$teste->bindValue(":s","$senha");
$teste->execute();


if ($teste) {
    echo "deu bom";
} else {
    echo "deu ruim";
}
?>