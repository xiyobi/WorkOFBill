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
        <input type="datetime-local" name="Arrived_person" required><br><br>
        <label> Ketgan vaqti: </label>
        <input type="datetime-local" name="leaved_person" required><br><br>
        <button type="submit">Bill</button>
    </form>
</body>
</html>

<?php   

$dns = "mysql:host=127.0.0.1;dbname=work_of_bill";
$username = "root";
$password = "root";
$pdo = new PDO($dns, $username, $password);
$WorkTimes = $pdo->query(query:"Select *from work_times");
print_r($WorkTimes->fetch());
var_dump($pdo);


if (isset($_GET['Arrived_person']) && isset($_GET['leaved_person'])) {
    
    $Arrived_person = $_GET['Arrived_person'];
    $leaved_person = $_GET['leaved_person'];
    
    $query = "Insert into work_times (Arrived_person,leaved_person) values(:Arrived_person,:leaved_person)";
    $stmt = $pdo->prepare($query);
    
    $stmt->bindParam(':Arrived_person',$Arrived_person);
    $stmt->bindParam(':leaved_person',$leaved_person);
    $stmt->execute();

}
?>
