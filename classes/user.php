<?php

    class User {
        protected $firstName;
        protected $lastName;
        protected $product;
        protected $price;

        public function __construct($firstName, $lastName, $product, $price)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->product = $product;
            $this->price = $price;
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function getProduct() {
            return $this->product;
        }

        public function getPrice() {
            return $this->price;
        }
    }

?>    