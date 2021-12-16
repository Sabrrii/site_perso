
<?php

    $content=\file_get_contents('data/competence.yaml');
    $competence=yaml_parse($content);

    
    echo"<h1>".$competence['Titre']."</h1>";
    echo"<main>";

        echo"<article>";
            echo"<h1 id=smooth1>"."Divers"."</h1>";

            echo "<div class=competence>";
                echo $competence["info"]['skill1']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=vert>";
                        echo"<p>"."100%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo "</div>";

            echo "<div class=competence>";
                echo $competence["info"]['skill2']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=vert>";
                        echo"<p >"."100%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo "</div>";

            echo "<div class=competence>";
                echo $competence["info"]['skill3']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=orange>";
                        echo"<p>"."80%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo "</div>";



            echo "<div class=competence>";
                echo $competence["info"]['skill4']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=orangebis>";
                        echo"<p>"."70%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo "</div>";
        echo"</article>";

        echo"<article>";

            echo"<h1 id=smooth>"."développement"."</h1>";

            echo "<article  class=competence>";
                echo $competence["dev"]['skill1']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=orangehalf>";
                        echo"<p>"."50%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo "</article >";


            echo "<article  class=competence>";
                echo $competence["dev"]['skill2']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=orangehalf>";
                        echo"<p>"."50%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo "</article >";
        

            echo "<article  class=competence>";
                echo $competence["dev"]['skill3']."<br/>";
                    echo"<div class=barre>";
                        echo"<div class=yellow>";
                            echo"<p>"."30%"."</p>";
                        echo"</div>";
                    echo"</div>";
            echo "</article >";

            echo "<article  class=competence>";
                echo $competence["dev"]['skill4']."<br/>";
                echo"<div class=barre>";
                    echo"<div class=orangehalf >";
                        echo"<p>"."50%"."</p>";
                    echo"</div>";
                echo"</div>";
            echo"</article>";

        echo "</article >";

    echo"</main>";
?>