
<?php

$content=\file_get_contents('data/formation.yaml');
$formation=yaml_parse($content);
/*$data= yaml_parse_file('data/formation.yaml');*/

echo"<h1>".$formation["rubrique"]."</h1>";
echo "<main>";

    echo "<article>";
        echo $formation["1"]["diplome"]."<br/>";
        echo "A ".$formation["1"]["etablissement"]." à ".$formation["1"]["lieu"]." <br/>";
        echo "Pendant l'année scolaire ".$formation["1"]["date"];
    echo "</article>";

    echo "<article>";
        echo $formation["2"]["diplome"]."<br/>";
        echo "A ".$formation["2"]["etablissement"]." à ".$formation["2"]["lieu"]." <br/>";
        echo "Pendant l'année scolaire ".$formation["2"]["date"];
    echo "</article>";

    echo "<article>";
        echo $formation["3"]["diplome"]."<br/>";
        echo "A ".$formation["3"]["etablissement"]." à ".$formation["3"]["lieu"]." <br/>";
        echo "Pendant l'année scolaire ".$formation["3"]["date"];
    echo "</article>";

echo"</main>";

?>