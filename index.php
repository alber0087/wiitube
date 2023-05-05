<?php
$title = 'Wiitube';
$copyright = '© Alberto Rodríguez 2023 - Todos los derechos reservados.';

$host = "localhost";
$dbname = 'Wiitube';
$dbuser = "root";
$dbpass = "root";

// Connection
$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: $conn->connect_error");
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>
    <?php echo $title; ?>
  </title>
</head>

<body>
  <header class="header">
    <h1>
      <?php echo $title; ?>
    </h1>
    <button class="loginButton">Login</button>
  </header>
  <main class="main">
    <h2>HOME</h2>

    <?php 
    $sql = "SELECT * from videos";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<li><a href='" . $row['url'] . "'>" . $row['title'] . "</a></li>";
      }
    } else {
      echo "No videos found.\n";
    }
    
    $conn->close();
    
    ?>
  </main>
  <footer class="footer">
    <p>
      <?php echo $copyright; ?>
    </p>
  </footer>

</body>

</html>