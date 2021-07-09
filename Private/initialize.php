<?php
    /* file paths notations to help navigate through paths more easier*/
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH",dirname(PRIVATE_PATH));
    define("PUBLIC_PATH",dirname(PROJECT_PATH .'./public'));
    define("SHARED_PATH",dirname(PRIVATE_PATH . '/shared'));

    include_once ('functions.php');
?>