<?php

    include_once("templates/static-templates/topo.php");
    include_once("templates/static-templates/menu.php");

    if(empty($_SERVER["QUERY_STRING"])){
        $conteudo = "templates/principal.php";
        include_once("$conteudo");
    }else{
        $pg = $_GET["pg"];
        include_once("$pg.php");
    }
    include_once("templates/static-templates/rodape.php");
?>
