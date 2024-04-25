<?php
  
  $conn = new mysqli("localhost","root","","library");

  if($conn->connect_error){
       die("Connection failed: ".$conn->connect_error);
  }

  $sql="SELECT * from books";
  $res=$conn->query($sql);

  if($res->num_rows>0){
    while($row=$res->fetch_assoc()){
        echo "<div>";
        echo "<br><br>";
        echo "<h2>".$row['title']."</h2>";
        echo "<p><strong>Author:</strong> " . $row["author"] . "</p>";
        echo "<p><strong>Genre:</strong> " . $row["genre"] . "</p>";
        echo "<p><strong>Description:</strong> " . $row["description"] . "</p>";
        echo "<p><strong>Price:</strong> $" . $row["price"] . "</p>";
        echo "<br><br>";
        echo "</div>"; 
    }
  }
  else{
    echo "<p> No Books available </p>";
  }


?>