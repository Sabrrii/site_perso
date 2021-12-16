<style>
@import url('https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap');
</style>
<?php

    $data=array_reverse(yaml_parse_file('data/menu.yaml'));
    foreach ($data as $cle=>$menu){
        echo '<section id="'.$cle.'">';
        include('php/'.$cle.'.php');
        echo '</section>';
    }

    include 'footer.php';
?>

    