<?php

abstract class Livro {
    private string $titulo;
    private string $autor;
    private int $paginas = 0;

    // TITULO
    public function setTitulo(string $titulo):void {
        $this->titulo = $titulo;
    }

    public function getTitulo():string {
       return $this->titulo;
    }

    // AUTOR
    public function setAutor(string $autor):void {
        $this->autor = $autor;
    }

    public function getAutor():string {
       return $this->autor;
    }

    // PAGINAS
    public function setPaginas(string $paginas):void {
        $this->paginas = $paginas;
    }

    public function getPaginas():string {
       return $this->paginas;
    }

}






?>