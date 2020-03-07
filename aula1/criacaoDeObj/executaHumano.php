<?php 
echo'<pre>';
require('autoload.php');
//  criando objeto
    $pessoa = new Humano(13);
    $pessoa->devWeb();
    $pessoa->dormir();
//  criando outro Objeto    
   // $pessoa2 = new Humano();
    // echo $pessoa2->nome = "teste2";
    // echo Humano::VIDA;
    $pessoa = new Humano(12);
    // $pessoa->devWeb();
    // $pessoa->dormir();
    
    $pessoa2 = new Humano(13);
    $pessoa2->nome = 'henrique';
    $pessoa3 = clone($pessoa2);
    $pessoa3->nome = 'jullio';

    unset($pessoa);
   
    // var_dump($pessoa);
     var_dump($pessoa2);
    // echo $pessoa2->nome = "teste2";
    // echo Humano::VIDA;