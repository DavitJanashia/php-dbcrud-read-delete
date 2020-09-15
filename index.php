<?php
//*********************************** PRIMO ***********************************

$servername = "localhost";
$username = "root";
$password = 'root';
$dbname = "dbhotel";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    return;
}
$sql = "
  SELECT *
  FROM pagamenti;
";
$result = $conn->query($sql);



if ($result && $result->num_rows > 0) {


    echo '<ol>';
    while($row = $result->fetch_assoc()) {
      echo '<li>';
      foreach ($row as $key => $value) {
        echo '<span style = "color: #913199">' . $key . '</span>: '
        . '<span style= "color: #354ab4">' .$value . '</span><br>';
      }
      echo '</li>';

      echo '<br><br>';
    }
    echo '<ol>';

} elseif ($result) {
    echo "0 results";
} else {
    echo "query error";
}
$conn->close();

//*********************************** SECONDO ***********************************

// $servername = "localhost";
// $username = "root";
// $password = 'root';
// $dbname = "dbhotel";
// $conn = new mysqli($servername, $username, $password, $dbname);
//
// if ($conn && $conn->connect_error) {
//     echo "Connection failed: " . $conn->connect_error;
//     return;
// }
// $sql = "
//   DELETE
//   FROM pagamenti
//   WHERE id = 8;
// ";
// $result = $conn->query($sql);
//
//
// if ($result && $result->num_rows > 0) {
//
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }
// $conn->close();

//*********************************** TERZO ***********************************

// $servername = "localhost";
// $username = "root";
// $password = 'root';
// $dbname = "dbhotel";
// $conn = new mysqli($servername, $username, $password, $dbname);
//
// if ($conn && $conn->connect_error) {
//     echo "Connection failed: " . $conn->connect_error;
//     return;
// }
//
//
// $sql = "
//  DELETE
//  FROM pagamenti
//  WHERE pagante_id = 6 AND status LIKE 'rejected';
// ";
// $result = $conn->query($sql);
//
//
//
// if ($result && $result->num_rows > 0) {
//
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }
// $conn->close();

//*********************************** QUARTO ***********************************

// $servername = "localhost";
// $username = "root";
// $password = 'root';
// $dbname = "dbhotel";
// $conn = new mysqli($servername, $username, $password, $dbname);
//
// if ($conn && $conn->connect_error) {
//     echo "Connection failed: " . $conn->connect_error;
//     return;
// }
//
// $sql = "
//   SELECT id, status, price
//   FROM pagamenti
//   WHERE price > 600;
// ";
// $result = $conn->query($sql);
//
//
//
// if ($result && $result->num_rows > 0) {
//
//
//     echo '<ul>';
//     while($row = $result->fetch_assoc()) {
//       echo '<li>';
//       foreach ($row as $key => $value) {
//         echo '<span style = "color: #913199">' . $key . '</span>: '
//         . '<span style= "color: #354ab4">' .$value . '</span><br>';
//       }
//       echo '</li>';
//
//       echo '<br><br>';
//     }
//     echo '</ul>';
//
// } elseif ($result) {
//     echo "0 results";
// } else {
//     echo "query error";
// }
// $conn->close();


?>
