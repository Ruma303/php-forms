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
var_dump($_GET);
//echo "Nome: {$_GET['name']}, Cognome {$_GET['lastname']}.";
// Nome: Matteo, Cognome Russo

//http://localhost:3000/index.php?name=Matteo&lastname=Russo

?>
    <!-- <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array Superglobali</title>
    </head>
    <body>
        <form action="index.php" method="GET">
            <label for="name">Nome: </label>
            <input type="text" id="name" name="name" placeholder="Inserire nome"> <br />
            <label for="lastname">Cognome: </label>
            <input type="text" id="lastname" name="lastname" placeholder="Inserire cognome">
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </form>
        <?php if (!empty($_GET)) {
            extract($_GET);
            $response = <<<Text
            <h2>Dati utente</h2>
            <p>Nome: <b>$name</b> Cognome: <b>$lastname</b></p>
            Text;
            echo $response;}?>
    </body>
    </html> -->


<?php
//% $_POST
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Superglobali</title>
</head>
<body>
    <form action="index.php" method="POST">
        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Inserire nome"> <br />
        <label for="lastname">Cognome: </label>
        <input type="text" id="lastname" name="lastname" placeholder="Inserire cognome">
        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form>
    <?php
    if (!empty($_POST)) {
        $name_safe = htmlspecialchars($_POST['name']);
        echo $name_safe;
        //exit();
        var_dump($_POST);
        extract($_POST);
        $response = <<<Text
        <h2>Dati utente</h2>
        Nome: <b>$name</b> Cognome: <b>$lastname</b></p>
        Text;
        echo $response;
    }
    ?>
    <!--  &ltscript&gtalert(&#039Ciao&#039)&lt/script&gt -->
</body>
</html>

