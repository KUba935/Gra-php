<?php
    session_start();
    
    $_SESSION["username"] = "Gość";
    if (isset($_SESSION["username"])) {
        echo "Zalogowany jako: " . $_SESSION["username"];
    }

    $wszystkie_pytania = [
        "filmy" => [
            "Kto zagrał w 'Matrixie'?" => "Keanu Reeves",
            "Jaki film zdobył Oscara w 2020 roku?" => "Parasite",
            "Kim jest Tony Stark?" => "Iron Man",
            "W jakiej serii filmów występuje Anakin Skywalker?" => "Gwiezdne Wojny",
            "Kto wyreżyserował 'Pulp Fiction'?" => "Quentin Tarantino",
            "Jaka to postać z 'Harry'ego Pottera'?" => "Hermiona",
            "W którym roku wyszedł pierwszy 'James Bond'?" => "1962",
            "Jaki to gatunek 'Star Treka'?" => "Sci-Fi",
            "Kto grał Jacka Sparrowa?" => "Johnny Depp",
            "Jaka to francuska komedia z 1998 roku?" => "Amelie"
        ],
        "geografia" => [
            "Jaka jest stolica Polski?" => "Warszawa",
            "Najdłuższa rzeka na świecie?" => "Amazonka",
            "Kontynent z największą liczbą krajów?" => "Afryka",
            "Stolica Japonii?" => "Tokio",
            "Które morze jest najgłębsze?" => "Spokojny",
            "Największa pustynia na świecie?" => "Antarktyczna",
            "Stolica Brazylii?" => "Brasilia",
            "Które państwo ma największą powierzchnię?" => "Rosja",
            "Najwyższy szczyt świata?" => "Everest",
            "W której części Europy jest Włochy?" => "Południowa"
        ],
        "historia" => [
        "Kto odkrył Amerykę?" => "Krzysztof Kolumb",
        "W którym roku upadł Mur Berliński?" => "1989",
        "Kto był pierwszym prezydentem USA?" => "George Washington",
        "Kiedy rozpoczęła się II wojna światowa?" => "1939",
        "Kto wynalazł druk?" => "Johannes Gutenberg",
        "Stolica Cesarstwa Rzymskiego?" => "Rzym",
        "Kto napisał 'Wojnę i pokój'?" => "Leo Tołstoj",
        "W którym roku nastąpiła rewolucja francuska?" => "1789",
        "Kto był faraonem w czasach budowy Wielkiej Piramidy?" => "Cheops",
        "Kto otworzył drogę do Indii wokół Przylądka Dobrej Nadziei?" => "Bartłomiej Diaz"
        ],
        "wiedza ogólna" => [
        "Ile ma sekund w jednej minucie?" => "60",
        "Jaki symbol chemiczny ma tlen?" => "O",
        "Ile jest dni w roku przestępnym?" => "366",
        "Kto napisał 'Pan Tadeusz'?" => "Adam Mickiewicz",
        "Jaka planeta jest najbliższa Słońcu?" => "Merkury",
        "Ile kolorów ma tęcza?" => "7",
        "Jaki to pierwiastek Au?" => "Złoto",
        "Kto wymyślił lampę elektryczną?" => "Thomas Edison",
        "Ile jest stron w standardowej książce A5?" => "Zależy",
        "Jaki to związek H2O?" => "Woda"
    ]


        ];

    // ROZPOCZĘCIE RUNDY
    if (($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["get_category"]))) {
        $category = strtolower($_POST['category']);

        if (!(isset($wszystkie_pytania[$category]))) {
            echo "kategoria nie istnieje";
        }

        if (count($wszystkie_pytania[$category]) != 10) {
            echo "kategoria nie posiada 10 pytań";
        }

        echo "<br>";
        foreach ($wszystkie_pytania[$category] as $klucz => $wartosc) {
            echo htmlspecialchars($klucz) . "<br>";
        }
    }

    // SPRAWDZANIE ODPOWIEDZI    

    // ODCZTYWANIE ODPOWIEDZI
    if (($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST["submit_ans"]))) {
        $ans = strtolower($_POST['answer']);
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

        <form action="index.php" method="POST">
            <label for="category">
                <input type="text" name="category" id="category">
            </label>
            <button name="get_category">Wyslij Kategorie</button>
        </form>

        <form action="index.php" method="POST">
            <label for="answer">
                <input type="text" name="answer" id="answer">
            </label>
            <button name="submit_ans">Wyślij odpowiedz</button>
        </form>
    </section>
</body>
</html>
