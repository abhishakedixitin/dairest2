<?php


include 'connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

 echo "<table border=5px solid; bgcolor=#e08b3e; width=100%; height=50%; cellpadding=20%>";
 echo "<tr>";
 	echo "<th>ID</td>";
 	echo "<th>USERNAME</td>";
 	echo "<th>PASSWORD</td>";
 	echo "<th>MOBILE</td>";
 	echo "<th>EMAIL</td>";
 while($row = $result->fetch_assoc()) {
 	echo "<tr>";
          echo "<td align=center>".$row["id"]."</td>"."<td align=center>".$row["username"]."</td>"."<td align=center>".$row["password"]."</td>"."<td align=center>".$row["mobile"]."</td>"."<td align=center>".$row["email"]."</td>" ;
     echo "</tr>";
    }
  echo "</table>";

$conn->close();
