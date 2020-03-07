<?php
    Class Humano{
        public $nome = "Daniel";
        const VIDA = true;
        public function devWeb(){
            echo "teste";
        }
        public function dormir(){
            if(self::VIDA == true){
                echo "dormindo";
            }else{
                echo "morri";
            }
        }
    public function __clone(){
        echo "<br><br>clonando um objeto <br>";
    }
    public function __construct($idade){
        $this->idade = $idade;
    }
    public function __destruct(){
        echo "estou destruindo o espaco da memoria";
    }

    }
   