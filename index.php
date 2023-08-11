<?php
//% $GLOBALS
/* $course = 'PHP';
$name = 'Eleonora';

function test() {
    echo $GLOBALS['course'] . '<br>'; // PHP
    echo $GLOBALS['name'] . '<br>'; // Eleonora
    //global $course;
    //echo $course . '<br>'; // PHP
} test();
 */

//% $_GET
//var_dump($_GET);
//echo "Nome: {$_GET['name']}, Cognome {$_GET['last_name']}.";

// Nome: Matteo, Cognome Russo
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Superglobali</title>
</head>
<body>
    <form action="superglobals_array.php" method="GET">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Inserire nome"> <br />
        <label for="last_name">Cognome: </label>
        <input type="text" id="last_name" name="last_name" placeholder="Inserire cognome">
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form>
    <?php /*
    if (!empty($_GET)) {
        extract($_GET);

        $response = <<<Text
        <h2>Dati utente</h2>
        <p>
            <h4>Nome: $name</h4>
            <h4>Cognome: $last_name</h4>
        </p>
        Text;
        echo $response;
    }*/
    ?>
</body>
</html> -->


<?php
//% $_POST
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Superglobali</title>
</head>
<body>
    <form action="superglobals_array.php" method="POST">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Inserire nome"> <br />
        <label for="last_name">Cognome: </label>
        <input type="text" id="last_name" name="last_name" placeholder="Inserire cognome">
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form> -->
    <?php /*
    if (!empty($_POST)) {
        $name_safe = htmlspecialchars($_POST['name']);
        echo $name_safe;
        exit();
        print_r($_POST);
        extract($_POST);
        $response = <<<Text
        <h2>Dati utente</h2>
        <p>
            <h4>Nome: $name</h4>
            <h4>Cognome: $last_name</h4>
        </p>
        Text;
        echo $response;
    }*/
    ?>
    <!--  &ltscript&gtalert(&#039Ciao&#039)&lt/script&gt -->
<!-- </body>
</html> -->

