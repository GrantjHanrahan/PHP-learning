<!DOCTYPE html>
<html>
<body>

<?php
    $x = 5 + 5;
    echo $x;

    // $x = 5; global scope

    function myTest() {
        $x = 5; // local scope
        
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest();

    echo "<p>Variable x outisde function is: $x</p>";
?>

<?php 
    $x = 5;
    $y = 10;

    function myTest2() {
        global $x, $y; // the global keyword is used to access a global varibale from within a function
        $y = $x + $y;
    }

    myTest2();
    echo $y;
    ?>

    <?php 
    $x = 5;
    $y = 10;

    function myTest3() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        // PHP also stores all gloabl variables in an array called $GLOBALS[index]. The index holds the name of the variable.
    }

    myTest3();
    echo $y; // outputs 15
?>

<?php 
    function myTest4() {
        static $x = 0; // the static keyword prevents a variable from being deleted
        echo $x;
        $x++;
    }

    myTest4();
    myTest4();
    myTest4();
?>

<?php
$x = 55;
var_dump($x);

$xx = 55.5;
var_dump($xx);

$cars = array("Volvo", "BMW");
var_dump($cars);

class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create and object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>

<?php 
define("GREETING", "Welcome to blah..");

function myTest5() {
    echo GREETING;
}

myTest5();
?>

<?php 
$t = date("H");

if ($t < "10" ) {
    echo "Have a good morning";
} elseif ($t < "20") {
    echo "Have a good day";
} else {
    echo "Have a good night";
}

for ($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}

$colors = array("red", "green", "blue");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

</body>
</html>