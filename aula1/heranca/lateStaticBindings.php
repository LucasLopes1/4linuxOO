<?php

class Animal{
    Protected static  $tipo = 'Animal';
    public function getTipo(){
        return $this->tipo;
    }
}

class Gato extends Animal{
    protected $tipo = 'Gato';
}
$animal = new Animal;
$gato = new Gato;

