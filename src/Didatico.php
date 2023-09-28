<?php 
require_once "Livro.php";

class Didatico extends Livro{
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"];


    public function getDisciplina(): string
    {
        return $this->disciplina;
    }


    public function setDisciplina(string $disciplina): self
    {
        $this->disciplina = $disciplina;

        return $this;
    }


    public function getNivel(): string
    {
        return implode(", ", $this->nivel) ;
    }


    public function setNivel(array $nivel): self
    {
        $this->nivel = $nivel;

        return $this;
    }
}

?>