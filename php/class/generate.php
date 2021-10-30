<?php

    class generate {        

        protected $hash;
        public $firstName;
        public $lastName;        
        public $middleName;

        function middleName($word1, $word2) {            
            $this->hash();                   
            $this->middleName = '"' . trim( $word1[$this->hash[0]] ) . " " . trim( $word2[$this->hash[1]] ) . '"';
        }        

        function hash() {                  
            $lowercase = strtolower(substr($this->firstName,0,2).$this->lastName);
            $md5 = preg_replace("/[^0-9\s]/", "", md5($lowercase));
            $this->hash = array((int)substr($md5, 0, 2), (int)substr($md5, 2, 2));
        }

    }

?>