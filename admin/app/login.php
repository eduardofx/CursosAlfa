<?php
    session_cache_expire(5);
    session_start();

    //verificar se o usuario está logado
    if(!isset($_SESSION["sistema"]["id"])){
        header("location: index.php");
        
    }