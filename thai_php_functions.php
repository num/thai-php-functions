<?php

/**
 *
 * @param <string> $s
 * @return <string> htmlspecialchars short name
 */
function h($s){
	return htmlspecialchars($s,ENT_QUOTES,'UTF-8');
	//return htmlspecialchars($s,ENT_QUOTES,'ISO-8859-1'); //tis-620,windows-874
}

/**
 *
 * @param <string> $s
 * @return <int> convert string to int short name
 */
function i($s){
        $i=0;
        return intval($s);
}



?>