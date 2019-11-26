<?php 
    // phpinfo();

    interface Pessoa {

        function getGenero();
    }

    class Homem implements Pessoa {

        function getGenero(){
            echo "Eu sou homem!";
        }
        
    }
    
    class Mulher implements Pessoa {

        function getGenero(){
            echo "Eu sou mulher!";
        }
        
    }

    $pessoa = new Pessoa();

    $pessoa->getGenero();


