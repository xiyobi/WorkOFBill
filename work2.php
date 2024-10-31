<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="stylesheet" href="navbarbill.css">
</head>
<body>
    <form method="GET">
        <label> Kelgan vaqti: </label>
        <input type="datetime-local" name="arrived" required><br><br>
        <label> Ketgan vaqti: </label>
        <input type="datetime-local" name="leaved" required><br><br>
        <button type="submit">Bill</button>
    </form>
</body>
</html>
<?php
$connection = mysqli_connect("localhost", "root", "root", "work_of_bill");
$query = "SELECT * FROM work_times";
$result = mysqli_query($connection, $query);
foreach ($result as $row) {
    echo $row['arrived'] . "<br>";
    echo $row['leaved'] . "<br>";
}

mysqli_close($connection);
?>
