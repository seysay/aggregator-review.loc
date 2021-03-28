<?php

/**
 * @var array. Contains parts of requested uri
 */
$uriArray = explode('/', $_SERVER['REQUEST_URI']);
//var_dump($uriArray);
if (count($uriArray) == 3) {
    /**
     * @var string URI parameter
     */
    $uriSegment = $uriArray[2];
} else {
    $uriSegment = null;
}
return $uriSegment;

