<?php

    class sanitize {
        
        public function post($data) {                                                
            return strip_tags( stripslashes( $data ) );
        }        
        
    }

?>