<?php
include('connect.php');

$sql = "SELECT id, name FROM hospitals";
$result = $conn->query($sql);

$hospitals = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $hospital = array("id" => $row["id"], "name" => $row["name"]);
    array_push($hospitals, $hospital);
  }
} else {
  echo "0 results";
}
$conn->close();

echo json_encode($hospitals);
?>