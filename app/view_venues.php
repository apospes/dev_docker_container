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

        $stmt = $pdo->query("SELECT * FROM venues");
        $venues = $stmt->fetchAll();
    ?>

    <table border="1">
        <tr>
            <th>ID</th><th>Όνομα Χώρου</th><th>Χωρητικότητα</th>
        </tr>
        <?php foreach ($venues as $venue): ?>
            <tr>
                <td><?= $venue['venueid'] ?></td>
                <td><?= $venue['venuename'] ?></td>
                <td><?= $venue['capacity'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="new_venue.php">Προσθέστε νέα αίθουσα.</a></p>
</body>
</html>