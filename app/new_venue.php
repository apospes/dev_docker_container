<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Museapp</title>
</head>
<body>
    <?php
        require 'db.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $stmt = $pdo->prepare("INSERT INTO venues (venuename, capacity) VALUES (?, ?)");
            $stmt->execute([$_POST['venuename'], $_POST['capacity']]);
            echo "Ο χώρος προστέθηκε!";
        }
    ?>

    <form method="post">
        Όνομα Χώρου: <input type="text" name="venuename"><br>
        Χωρητικότητα: <input type="number" name="capacity"><br>
        <input type="submit" value="Προσθήκη">
    </form>
</body>
</html>