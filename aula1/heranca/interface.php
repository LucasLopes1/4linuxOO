<?php
    interface RacaoDeGato{
        public function empacotar($kg);
        public function setPreco($preco);
        public function distribuir($cliente);
        Public function fabricar($materiaPrima);
    }

    class Empresa implements RacaoDeGato{
        public function empacotar($kg){
            
        }
        public function setPreco($preco){

        }
        public function distribuir($cliente){

        }
        Public function fabricar($materiaPrima){
            
        }
    }

    $empresa = new Empresa;