<?php 
$content=\file_get_contents('data/apropos.yaml');
$data=yaml_parse($content);

$image=\file_get_contents('data/image.yaml');
$im=yaml_parse($image);

    echo"<h1>".$data['Titre']."</h1>";
    echo "<article>";
        echo"<h2>".$data['info']['moi']['rubrique']."</h2>";
        echo"<p>".$data['info']['moi']['texte']."</p>";
    echo"</article>";
    echo"<article id=bis>";
        echo"<h2>".$data['info']['passion']['rubrique']."</h2>";
        echo"<p>".$data['info']['passion']['texte']."</p>";
    echo "</article>";
    echo"<img src=".$im['apropos'].">";

?>