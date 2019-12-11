<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title><?php echo $pageTitle; ?></title>
</head>
<body>
<header>
<nav class="navbar navbar-dark bg-dark">
<a class="navbar-brand" href="index.php">
    <img src="img/vinylRecordLogo.png" width="50" height="50" alt="logo">
  </a>
  <li class="nav-item">
    <a class="nav-link active" href="catalog.php?cat=regular">"Real" Music</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="catalog.php?cat=game">Video Game Soundtracks</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="catalog.php?cat=cover">Covers</a>
  </li>
</nav>
</header>
<div class="content">