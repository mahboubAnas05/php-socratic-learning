<?php

    class Product {
        
        public $ProdName;

        public function __construct($ProdName){
            $this->ProdName = $ProdName;
        }

        public function sayHello(){
            echo "j'ai acheté un" . ' ' . $this->ProdName;
        }

    }

    $pn1 = new Product('clavier');
    $pn1->sayHello();

?>