<?php
//% $GLOBALS
/* $course = 'PHP';
$name = 'Eleonora';

function test() {
    echo $GLOBALS['course'] . '<br>'; // PHP
    echo $GLOBALS['name'] . '<br>'; // Eleonora
    //global $course;
    //echo $course . '<br>'; // PHP
} test(); */



//% $_GET
//var_dump($_GET);

//echo "Nome: {$_GET['name']}, Age: {$_GET['age']}.";

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
>
            <br>
            <label for="age">Etá: </label>
            <input type="number" id="age" name="age">

            <input type="submit">Invia</input>
            <button type="reset">Reset</button>
        </form> -->

        <?php
        /* if (!empty($_GET)) {
            extract($_GET);

            //$name = $_GET["name"];
            //$lastname = $_GET["lastname"];
            //$age = $_GET["age"];

            $response = <<<Text
            <h2>Dati utente</h2>
            <p>Nome: <b>$name</b> Cognome: <b>$lastname</b> Etá: <b>$age</p>
            Text;
            echo $response;
        } */
        ?>

   <!--  </body>
    </html>
 -->

<?php
//% $_POST

//var_dump($_POST);

/* echo 'GET: http://localhost:3000/index.php?name=Ursa+Macias&lastname=Singleton <br><br>';
echo 'POST: http://localhost:3000/index.php <br>'; */
?>
<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Superglobali</title>
</head>
<body>
    <form action="index.php" method="POST">

        <label for="name">Nome: </label>
        <input type="text" id="name" name="name" placeholder="Inserire nome"> <br/>

        <label for="lastname">Cognome: </label>
        <input type="text" id="lastname" name="lastname" placeholder="Inserire cognome">

        <button type="submit">Invia</button>
        <button type="reset">Reset</button>
    </form> -->

    <?php
    /* if (!empty($_POST)) {
        extract($_POST);
        $response = <<<Text
        <h2>Dati utente</h2>
        Nome: <b>$name</b> Cognome: <b>$lastname</b></p>
        Text;
        echo $response;
    } */

    /* //, Form safe */
    /* if (!empty($_POST)) {
        $safeName = htmlspecialchars($_POST['name']);
        $safeLastName = htmlspecialchars($_POST['lastname']);
        $response = <<<Text
        <h2>Dati utente</h2>
        Nome: <b>$safeName</b> Cognome: <b>$safeLastName</b></p>
        Text;
        echo $response;
    } */?>
    <!-- <p>&ltscript&gtalert(&#039Ciao&#039)&lt/script&gt</p> -->
<!-- </body>
</html>
 -->
