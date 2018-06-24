<?php
header("Content-Type: application/json; charset=UTF-8");

$pdo = new PDO("sqlite:foos.db");

$result = [];

$q = $pdo->query("SELECT position,name FROM playerpositions INNER JOIN players ON playerpositions.player_id = players.id");
while($row = $q->fetch(PDO::FETCH_ASSOC)) {
    $result[$row['position']] = $row['name'];
}

echo json_encode($result);
?>