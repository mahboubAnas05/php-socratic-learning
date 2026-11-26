<?php

    /*
            what i had like informations
        1) strtotime : compare to element like date (from string to date)

    */ 

    class Product {
        
        public $ProdName;
        public $expiredDate;

        public function __construct($ProdName, $expiredDate){
            $this->ProdName = $ProdName;
            $this->expiredDate = $expiredDate;
        }

        public function sayHello(){
            echo "j'ai acheté un" . ' ' . $this->ProdName;
        }

        public function CheckExpired(){

            if (strtotime($this->expiredDate) > strtotime(date('y-m-d')) ){
                echo "le produit est en bon etat :)";
            }

            elseif (strtotime($this->expiredDate) == strtotime(date('y-m-d'))){
                echo "consommez le avant dépasser 24 heure :|";
            }

            else {
                echo "ne consommez pas ce produit :( !";
            }
        }

    }

    $pn1 = new Product('lait', '25-12-03');
    $pn2 = new Product('cookies', '29-05-09');
    $pn3 = new Product('boisson', '26-11-26');

    // $pn1->sayHello();
    // $pn2->sayHello();
    // $pn3->sayHello();

    $pn1->CheckExpired();
    $pn2->CheckExpired();
    $pn3->CheckExpired();

?>