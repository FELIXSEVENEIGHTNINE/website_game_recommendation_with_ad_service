<?php
    include_once("tags.php");

    echo "<p style='margin-bottom: -15px; text-align: center'> Genres </p> <hr>";
    for($i=0 ; $i < count($tags); $i++ ) {
        echo "<div class='form-check'>";
            echo "<input type='checkbox' id='".$i."' name='' value='".$tags[$i]."'>";
            echo "<label for='".$i."'>".$tags[$i]."</label></div>";
    }

?>