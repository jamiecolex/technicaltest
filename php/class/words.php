<?php

    class words {      
        
        public $wordArray;

        function get($filename) {            
            
            if($this->errorCheck($filename)) {
                return $this->wordArray;
            }
            
        }

        
        // Array must contain at least 100 entries, 2 digit number generated for name means array indexes could be 0 to 99
        function errorCheck($filename) {            
            
            if(file_exists($filename)) {     

                $content = file($filename);

                if(count($content) >= 100) {
                    $this->wordArray = $content;
                    return true;
                } else {
                    error_log("File: " . $filename . " does not contain correct rows.",0);
                    exit();
                }

            } else {
                error_log("File: " . $filename . " does not exist.",0);
                exit();
            }

        }

    }

?>