<?php
$title = 'Wiitube';
$page = 'Video';
$copyright = '© 2023 WiiTube - All Rights Reserved.';

$url = $_GET['url'];
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
    <h2><?php echo $videoTitle; ?></h2>
    <div class="main-wrapper">
      <iframe src="<?php echo $url; ?>" width="560" height="315" frameborder="0"></iframe>
    </div>
  </main>
  <footer class="footer">
    <p>
      <?php echo $copyright; ?>
    </p>
  </footer>

</body>

</html>