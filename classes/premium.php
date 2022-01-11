<?php

    require_once __DIR__ . '/user.php';

    class Premium extends User {

        public $discount = 20;
        public function __construct($firstName, $lastName, $product, $price) {
            parent::__construct($firstName, $lastName, $product, $price);
        }

        private function setDiscount() {
            return $this->price - (($this->price * $this->discount) / 100);
        }

        public function getDiscount() {
            return $this->setDiscount();
        }
    }

?>