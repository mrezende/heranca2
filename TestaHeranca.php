<?php

require "Secretaria.php";
require "Gerente.php";


$secretaria = new Secretaria();
$secretaria->nome = "Jonas";
$secretaria->matricula = 56;
$secretaria->salario = 15000;
$secretaria->ramal = 6291;

echo "-----Secretário----" . PHP_EOL;
echo "Nome: $secretaria->nome" . PHP_EOL;
echo "Matrícula: $secretaria->matricula" . PHP_EOL;
echo "Salário: $secretaria->salario" . PHP_EOL;
echo "Ramal: $secretaria->ramal" . PHP_EOL;
echo "Bonificacao: " . $secretaria->calculaBonificacao() . PHP_EOL;

$gerente = new Gerente();
$gerente->nome = "Maria";
$gerente->matricula = 56;
$gerente->salario = 30000;
$gerente->senha = 1234;

echo "-----Gerente----" . PHP_EOL;
echo "Nome: $gerente->nome" . PHP_EOL;
echo "Matrícula: $gerente->matricula" . PHP_EOL;
echo "Salário: $gerente->salario" . PHP_EOL;
echo "Senha: $gerente->senha" . PHP_EOL;
echo "Bonificacao: " . $gerente->calculaBonificacao() . PHP_EOL;
