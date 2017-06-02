<?php
include "sqlBrad.php";
$pdo = new pdo($dsn, $user, $passwd, $opt);

$sql = "SELECT * FROM member member";
$stmt = $pdo->prepare($sql);    // statement SQL
$stmt->execute();

echo "<table>";
while ($obj= $stmt->fetchObject()){
    echo '<tr>';
    echo "<td>{$obj->id}</td>";
    echo "<td>{$obj->account}</td>";
    echo "<td>{$obj->passwd}</td>";
    echo "OK";
    echo '</tr>';
}
echo "</table>";