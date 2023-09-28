<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>

<?php 
require_once "src/Tecnico.php";
require_once "src/Didatico.php";
require_once "src/Programacao.php";

$tecnico = new Tecnico;

$tecnico->setAutor("Lynn Beighley");
$tecnico->setTitulo("Use a cabeça! PHP e MySQL: PHP e MySQL");
$tecnico->setPaginas("254");
$tecnico->setFormato(['fisico']);

$didatico = new Didatico;

$didatico->setAutor("Mia Couto");
$didatico->setTitulo("A confissão da leoa");
$didatico->setPaginas("354");
$didatico->setDisciplina("História");
$didatico->setNivel(['superior']);


$programacao = new Programacao;

$programacao->setAutor("Paul Barry");
$programacao->setTitulo("Use a cabeça! Python ― 2ª");
$programacao->setPaginas("616");
$programacao->setArea("Desenvolvimento de Software");



?>
<h2>Técnico</h2>
<p>Autora: <?=$tecnico->getAutor()?></p>
<p>Páginas: <?=$tecnico->getPaginas()?></p>
<p>Título: <?=$tecnico->getTitulo()?></p>
<p>Formato: <?=$tecnico->getFormato()?></p>

<h2>Didático</h2>
<p>Autora: <?=$didatico->getAutor()?></p>
<p>Páginas: <?=$didatico->getPaginas()?></p>
<p>Título: <?=$didatico->getTitulo()?></p>
<p>Disciplina: <?=$didatico->getDisciplina()?></p>
<p>Título: <?= $didatico->getNivel()?></p>

<h2>Programação</h2>
<p>Autora: <?=$programacao->getAutor()?></p>
<p>Páginas: <?=$programacao->getPaginas()?></p>
<p>Título: <?=$programacao->getTitulo()?></p>
<p>Disciplina: <?=$programacao->getArea()?></p>



</body>
</html>