<?php

/**
 *
 * @param <string> $s
 * @return <string> htmlspecialchars short name
 */
function h($s){
    return htmlspecialchars($s,ENT_QUOTES,'UTF-8');
}

/**
 *
 * @param <string> $s
 * @return <int> convert string to int short name
 */
function i($s){        
    return intval($s);
}
?>
