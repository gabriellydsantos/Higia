<?php
include('database.php');

$sql = "SELECT gender, COUNT(*) AS count FROM patients GROUP BY gender";
$result = $conn->query($sql);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

echo json_encode($data);

$conn->close();
?>