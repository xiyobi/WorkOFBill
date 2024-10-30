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
        <label>Kelgan vaqti:</label>
        <input type="datetime-local" name="Arrived_person" required><br><br>
        <label>Ketgan vaqti:</label>
        <input type="datetime-local" name="leaved_person" required><br><br>
        <button type="submit">Hisoblash</button>
    </form>
</body>
</html>

<?php   
if (isset($_GET['Arrived_person']) && isset($_GET['leaved_person'])) {
    // Formadagi qiymatlarni DateTime obyekti qilish
    $Arrived_person = new DateTime($_GET['Arrived_person']);
    $leaved_person = new DateTime($_GET['leaved_person']);
    
    // Farqni hisoblash
    $difference = $leaved_person->diff($Arrived_person);

    // Farqni chiqarish
    echo "Kun: " . $difference->days . "<br><br>";
    echo "Soat: " . $difference->h . "<br><br>";
    echo "Daqiqa: " . $difference->i;
}
?>
