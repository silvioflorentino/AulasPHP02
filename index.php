<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    <h1>Trabalhando com Array</h1>
<?php

$carro = array("Pequenos","Médios","Grandes","Super Grandes","Pequenos 4","Médios 4","Grandes 4","Super Grandes 4");

echo("Escolha de carro $carro[7] </br>");
echo(count($carro));
echo("</br>Etec</br> de </br>Guarulhos");
?>
<h1>Matriz de dados - Array</h1>
<?php
$funcionario = array(
  array("José dos Santos"  ,"12/09/2000","Gerente"),
  array("Nathalia da Silva","04/10/1956","Gerente I"),
  array("Marcia Rodrigues" ,"13/02/1999","Diretora")
);

echo("Nome: ".$funcionario[1][0]."</br>");
?>
<h1>Array Nomeando o Indice</h1>
<?php
$notas = array("nome"=>"Beatriz","media"=>7.8,"falta"=>12);
echo("Nome: ".$notas["nome"]."</br>");
echo("Média: ".$notas["media"]."</br>");
echo("Notas:".$notas["falta"]."</br>");

?>
</body>
</html>