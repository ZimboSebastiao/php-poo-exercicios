<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>

<?php 
require_once "src/Livro.php";

$livroA = new Livro;

$livroA->setTitulo("Niketche: Uma História de Poligamia");
$livroA->setAutor("Paulina Chiziane");
$livroA->setPaginas(296);
?>

<p>Título: <?=$livroA->getTitulo()?></p>
<p>Autor: <?=$livroA->getAutor()?></p>
<p>Paginas: <?=$livroA->getPaginas()?></p>

    
</body>
</html>