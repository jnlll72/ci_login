<p>
    <pre>
        <?php print_r($maLibrairie);?>
    </pre>
    
    <?php
        foreach($maLibrairie as $object){
            echo "<p>".$object->type."</p>";
        }

        echo "<p>".$maLibrairie[1]->type."</p>";
    ?>
</p>
