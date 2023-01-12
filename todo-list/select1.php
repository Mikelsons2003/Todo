<?php

function printSelected($conn){
  $sql = "SELECT * FROM todoList";
  $result = select($sql, $conn);

  while ($row = $result->fetch_assoc()) {
    echo "
        <div class='box-select'>
        <input type='checkbox'>
        <p>" . $row['text'] . "</p>
        <a href='delete.php?id=" . $row['id'] . "'><i class='delete-style'>DELETE</i></a>
    </div>
    ";
  }
}

?>
