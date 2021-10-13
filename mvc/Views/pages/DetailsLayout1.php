<h1>Home</h1>

<?php while ($row = mysqli_fetch_array($data["Student"])) {
      echo $row["id"]." ".$row["Name"]." ".$row["Age"];
      echo "<br>";
}
?>
