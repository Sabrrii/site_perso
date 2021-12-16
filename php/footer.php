<?php
$content=\file_get_contents('data/footer.yaml');
$footer=yaml_parse($content);

 
    echo '<footer>'.$footer["nom"];
    echo '<a href="CV.pdf" target="_blank">'.$footer["CV"]."</a>";
    echo '</footer>';

?>