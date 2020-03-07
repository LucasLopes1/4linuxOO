<?php
    class Comida{

        public static $gosto = "salgado";
        public static function mastigar(){
              echo "mastigando";  
        }
    }

    echo Comida::$gosto;
    //Comida::mastigar();