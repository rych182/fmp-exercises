<?php

    abstract class ejemplo 
    {
        public function saludar()
        {
           return 'Soy una clase abstracta, no me verán a menos que me hereden';
        }
    }
    class bonjour extends ejemplo
    {
        
    }
    $objeto = new bonjour;
    echo $objeto->saludar();

?>