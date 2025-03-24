<?php 
    $lang = ["fr","en","it"];
    const css = "./css/style.css";
    $version = phpVersion();
    const title = "PHP Started version";
    $date = new DateTime();
    $navigator = $_SERVER['HTTP_USER_AGENT'];
    $remote  = $_SERVER['SERVER_ADDR'];
    $signature = $_SERVER['SERVER_SIGNATURE'];

    
?>