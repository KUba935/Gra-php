<?php
    session_start();
    
    $_SESSION["username"] = "Gość";
    if (isset($_SESSION["username"])) {
        echo "Zalogowany jako: " . $_SESSION["username"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App 🧠</title>
</head>
<body>
    <section id='glowne'>
        <h1>Quiz 🧠</h1>
    </section>
    <section id='srodek'>
        <h2>Kategorie</h2>
    </section>

    
</body>
</html>
