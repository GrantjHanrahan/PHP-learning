<? 
# First example 
print <<<END
This uses the "here document" syntax to output multiple lines with $variable interpolaion.
END;

# Second example
print "This spans multiple lines.
The newlines will be output as well"
?>

<?php 
$four = 2 + 2; // single spaces
// $four <tab>=<tab2<tab>+<tab>2 ; //spaces and tabs;
$four = 
2+
2; // multiple lines
?>

<html>
    <body>

        <?php 
            $capital = 67;
            print("Variable capita is $capital<br>");
            print("Variable CaPital is $CaPiTaL<br>");
        ?>

    </body>
</html>    