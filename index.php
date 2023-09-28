<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
    <style>
        .format {
            text-align: center;
            list-style: none;
            text-decoration: underline;
        }
        
    </style>
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
$didatico->setFormato(['digital']);
$didatico->setNivel(["básico", "médio"]);


$programacao = new Programacao;

$programacao->setAutor("Paul Barry");
$programacao->setTitulo("Use a cabeça! Python ― 2ª");
$programacao->setPaginas("616");
$programacao->setArea("Desenvolvimento de Software");



?>
<ul class="format">
    <h2>Técnico</h2>
    <li>Autor: <?=$tecnico->getAutor()?></li>
    <li>Páginas: <?=$tecnico->getPaginas()?></li>
    <li>Título: <?=$tecnico->getTitulo()?></li>
    <li>Formato: <?=$tecnico->getFormato()?></li>
</ul>
<hr>
<ul class="format">
    <h2>Didático</h2>
    <li>Autor: <?=$didatico->getAutor()?></li>
    <li>Páginas: <?=$didatico->getpaginas()?></li>
    <li>Título: <?=$didatico->getTitulo()?></li>
    <li>Disciplina: <?=$didatico->getDisciplina()?></li>
    <li>Formato: <?=$didatico->getFormato()?></li>
    <li>Nível: 
        <?php 
        foreach ($didatico->getNivel() as $nivel) {
            echo $nivel.", ";
        }
        
        ?>
    </li>
    
</ul>
<hr>
<ul class="format">
    <h2>Programação</h2>

    <li>Autor: <?=$programacao->getAutor()?></li>
    <li>Páginas: <?=$programacao->getPaginas()?></li>
    <li>Título: <?=$programacao->getTitulo()?></li>
    <li>Disciplina: <?=$programacao->getArea()?></li>
    <li>Formato: <?=$programacao->getFormato()?></li>
</ul>
<hr>


</body>
</html>