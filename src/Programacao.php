<?php 
require_once "Livro.php";

class Programacao extends Livro {
    private string $area;

    public function getArea(): string
    {
        return $this->area;
    }

    public function setArea(string $area): self
    {
        $this->area = $area;

        return $this;
    }
}


?>