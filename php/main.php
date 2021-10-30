<?php
    
    require_once('class/words.php');
    require_once('class/generate.php');
    require_once('class/sanitize.php');

    $words = new words;
    $sanitize = new sanitize;    
    $generate = new generate;
    
    $list1 = $words->get('../words/adjectives');
    $list2 = $words->get('../words/animals');

    $generate->firstName = $sanitize->post($_POST['firstName']);
    $generate->lastName = $sanitize->post($_POST['lastName']);
    
    $generate->middleName($list1, $list2);

    echo $generate->middleName;        

?>