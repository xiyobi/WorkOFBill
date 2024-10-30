<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <link rel="stylesheet" href="navbarbill.css">
</head>
<body>
        <form method = "GET">
            <input type="datetime-local" name="Arrived_person" required><br><br>
            <input type="datetime-local" name="leaved_person" required><br><br>
            <button type="submit">Bill</button>
        </form>


</body>
</html> 
<?php   
        $difference = $leaved_person->diff($Arrived_person);  
        echo "Kun: " . $difference->days . "<br>" . "<br>";
        echo "Soat: " . $difference->i . "<br>" . "<br>";
        echo "Daqiqa: " . $difference->m;
           
           
?>