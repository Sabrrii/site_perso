
<?php

$content=\file_get_contents('data/experience.yaml');
$experience=yaml_parse($content);
/*$data=yaml_parse_file('../data/experience.yaml');*/

    echo"<h1>".$experience["rubrique"]."</h1>";
    echo "<main>";
        echo "<article>";
            echo "Poste: ".$experience["1"]["poste"]."<br/>";
            echo "Dans l'entreprise ".$experience["1"]["entreprise"]." situe à ".$experience["1"]["lieu"]." <br/>";
            echo "Du ".$experience["1"]["dateDebut"]." au ".$experience["1"][ "dateFin"]."<br/>";
            echo "Descptif du poste: ".$experience["1"]["descriptif"]."<br/>";
        echo"</article>";

        echo "<article>";
            echo "Poste: ".$experience["2"]["poste"]."<br/>";
            echo "Dans l'entreprise ".$experience["2"]["entreprise"]." situe  à ".$experience["2"]["lieu"]." <br/>";
            echo "Du ".$experience["2"]["dateDebut"]." au  ".$experience["2"][ "dateFin"]."<br/>";
            echo "Descptif du poste: ".$experience["2"]["descriptif"]."<br/>";
        echo"</article>";
    echo "</main>";



?>