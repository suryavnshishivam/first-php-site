<?php
    $str = "this this is string ";
    echo $str;
    $lenn = strlen($str);
    echo "the length of this string is".$lenn. ".thank you <br>";
    echo "the nummber of words in this string is". str_word_count($str). ".thank you <br>";
    echo "the reversed string is". strrev($str). ".thank you <br>";
    echo "the search for is in string is". strpos($str , "is "). ".thank you <br>";
    echo "the replace string is". str_replace("is","at", $str). ".thank you <br>";
    //echo $lenn;
    

?>
