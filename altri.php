<?php
//% $_SERVER
/* echo '<pre>';
print_r($_SERVER);
echo '</pre>'; */

//* Ottenere l'URL della pagina corrente
/* $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "L'URL corrente è: $current_url"; */

//* Ottenere il metodo di richiesta HTTP
/* $request_method = $_SERVER['REQUEST_METHOD'];
echo "Il metodo di richiesta è: $request_method"; */

//% $_REQUEST
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Coding: php-forms</title>
</head>
<body>
    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST">
        Name: <input type="text" name="name"><br>
        Age: <input type="number" name="age">
        <input type="submit">
    </form> -->
    <?php
    /* if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_REQUEST['name'];
        $age = $_REQUEST['age'];
        echo "Name: " . $name . '<br>';
        echo "Age: " . $age . '<br>';
    } */
    ?>
<!-- </body>
</html> -->