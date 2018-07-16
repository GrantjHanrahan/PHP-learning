<?php 
    // if($_POST['name'] || $_POST['age']) {
    //     if(preg_match("/[^A-Za-z'-]/", $_POST['name'] )) {
    //         die ('invalid name, name should be alpha');
    //     }

    //     echo "Welcome ". $_POST['name']. "<br />";
    //     echo "You are ". $_POST['age']. " years old";

    //     exit();
    // }

    if( $_POST["location"]) {
        $location = $_POST['location'];
        header( 'Location:$location' );

        exit();
    }
?>

<!DOCTYPE html>
<html>
<body>

    <p>Choose site to visit: </p>

    <form action = "<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <select name = 'location'>.

            <option value = 'http://www.wikipedia.com'>
                Wikipedia
            </option>

            <option value = 'http://www.google.com'>
                Google
            </option>

        </select>
        <input type = "submit" />
    </form>

</body>
</html>



