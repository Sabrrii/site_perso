<?php

function image(){
    $image=file_get_contents('data/image.yaml');
    $im=yaml_parse($image);
}

function accueil(){
    $content=\file_get_contents('data/accueil.yaml');
    $data=yaml_parse($content);
}

function competence(){
    $content=\file_get_contents('data/competence.yaml');
    $competence=yaml_parse($content);
}




?>