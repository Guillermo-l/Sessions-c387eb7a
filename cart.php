<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Bit Academy</title>
</head>

<body>
    <h1>Skateboard <small>(#1)</small></h1>
    <h1>Basketbal <small>(#2)</small></h1>
    <h1>Skeelers <small>(#3)</small></h1>

    <!-- maak hier de opdracht -->
    <?php

    session_start();

    if (isset($_POST["item"]) && !empty($_POST["item"])) {
        $_SESSION["item"] = $_POST["item"];
        if ($_SESSION["item"] <= 3 && is_numeric($_POST["item"])) {
            echo "Gekozen item: #" . $_SESSION['item'];
        } else {
            echo "Voer een geldig artikel nummer in";
        }
    }
    ?>

    <div>
        <form action="" method="post" name="item" autocomplete="off">
            <label for="item">Kies een item</label>
            <input type="text" name="item" id="item" />
            <input type="submit" value="Verstuur" />
        </form>
    </div>
</body>

</html>