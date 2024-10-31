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

$dns = "mysql:host=127.0.0.1;dbname=work_of_bill";
$username = "root";
$password = "root";
$pdo = new PDO($dns, $username, $password);
$WorkTimes = $pdo->query(query:"Select *from work_times");
$WorkTimes->fetch();
// var_dump($pdo);


if (isset($_GET['arrived']) && isset($_GET['leaved'])) {
    
    $arrived = $_GET['arrived'];
    $leaved = $_GET['leaved'];
    
    $query = "Insert into work_times (arrived, leaved) values(:arrived,:leaved)";
    $stmt = $pdo->prepare($query);
    
    $stmt->bindParam(':arrived',$arrived);
    $stmt->bindParam(':leaved',$leaved);
    $stmt->execute();

}
?>
