<?php

class Avo{
    public function __construct($nome)
    {
        $this->nome = $nome;
    }
    public function mostraNome()
    {
        return $this->nome;
    }
}
class Mae extends Avo{
    public function __construct($nome,  $idade) 
    {
        parent::__construct($nome);
        $this->idade = $idade;
    }
    public function mostraIdade()
    {
        return $this->idade;
       
    }
}
Final class Filha extends Mae{
    public function __construct($nome, $idade, $genero){
        parent::__construct($nome, $idade);
        $this->genero = $genero;
    }
    public function mostraGenero(){
        return $this->genero;
    }
}

$filha = new Filha('mariana', 20, 'indefinido');
echo $filha->mostraGenero();