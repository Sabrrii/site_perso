<?php

    $content=\file_get_contents('data/accueil.yaml');
    $data=yaml_parse($content);
    
    $image=file_get_contents('data/image.yaml');
    $im=yaml_parse($image);


    echo "<h1>".$data["rubrique"]."</h1>";
    echo "<h2>".$data["nom"]."</h2>";
    echo "<p>".$data["accroche"]."</p>"."<br/>";
    echo "<img src=".$im["accueil"].">";



?>