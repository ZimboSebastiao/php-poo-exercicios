<?php
// require_once "Livro.php";

class Tecnico {
    private array $formato = ["digital", "fisico"];


    public function getFormato(): array
    {
        return $this->formato;
    }

    public function setFormato(array $formato): self
    {
        $this->formato = $formato;

        return $this;
    }
}


?>