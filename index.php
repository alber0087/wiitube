<?php
$title = 'Wiitube';
$page = 'Home';
$copyright = '© 2023 WiiTube - All Rights Reserved.';

$host = "localhost";
$dbname = 'Wiitube';
$dbuser = "root";
$dbpass = "root";

$conn = new mysqli($host, $dbuser, $dbpass, $dbname);

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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="styles.css">
  <title>
    <?php echo $title . ' - ' . $page; ?>
  </title>
</head>

<body>
  <header class="header">
    <div class="logo">
      <span class="material-symbols-outlined">auto_read_play</span>
      <h1><?php echo $title; ?></h1>
    </div>
    <button class="loginButton">Login</button>
  </header>
  <main class="main">
    <h2>
      <?php echo $page; ?>
    </h2>

    <?php 
    $sql = "SELECT * from videos";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<li><a href='video.php?url=" . urlencode($row['url']) . "'>" . $row['title'] . "</a></li>";
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