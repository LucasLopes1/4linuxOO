<?php
    abstract class BarulhoDeCarro{
        public function getBarulho($nomeDoCarro){
            return "{$nomeDoCarro},  fazendo barulho";
        }
    }


    class carro extends BarulhoDeCarro{
        public function Acelerar(){
            return ": vrum";
        }
    }
    $obj = new Carro;
    echo $obj->getBarulho('Fiesta');
    echo $obj->Acelerar();