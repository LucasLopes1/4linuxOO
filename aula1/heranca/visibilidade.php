<?php
    class minhaclasse{
        protected $protegida = 'Protegida';
        public $publica = 'Publca';
        private $privada = 'Privada';

        function mostrarPropriedaes(){
            echo $this->publica;
            echo $this->privada;
            echo $this->protegida;
        }
    }


    class MinhaClasseFilha extends minhaclasse{
        
        function mostrarPropriedaes(){
            echo $this->publica;
            echo $this->privada;
            echo $this->protegida;
        }
    }
$obj = new minhaclasse;
$obj2 = new MinhaClasseFilha;
$obj->mostrarPropriedaes(); 
$obj2->mostrarPropriedaes(); 
// echo $obj->publica;
// echo $obj->privada;
// echo $obj->protegida;