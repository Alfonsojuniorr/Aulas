<?php
class Pessoa {
    private $Nome;
    private $Idade;
    private $Sexo;

    public function FazerAniversario()  {
        $this->Idade ++;
    }

    public function getNome() {
        return $this->Nome;
    }
    public function getIdade() {
        return $this->Idade;
    }
    public function getSexo() {
        return $this->Sexo;
    }
    public function setNome($Nome) {
        $this->Nome = $Nome;
    }
    public function setIdade($Idade) {
        $this->Idade = $Idade;
    }
    public function setSexo($Sexo) {
        $this->Sexo = $Sexo;
    }
}