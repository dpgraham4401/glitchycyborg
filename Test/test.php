<!DOCTYPE html>
<html>
    <body>
        <h3>Yo Yo Yo! What up?</h3>
        <?php
            $msg = "a test environment";
            echo "This is " . $msg . " nothing here to see.<br>";
            $test =  <<< _END
            lipsum orium or however th hell you spell it
            I spend my days...
            <h3> just mooning </h3>
                all     over    you
            _END;
            echo $test;
        ?>
    </body>
</html>