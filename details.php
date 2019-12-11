<?php 
include("inc/data.php");
include("inc/functions.php");



if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if (isset($catalog[$id])) {
      $item = $catalog[$id];
    }
}

if (!isset($item)) {
    header("location:catalog.php");
    exit;
}

$pageTitle = $item["title"];
$section = null;


include("inc/header.php"); ?>

<div class="section page">
    <div class="video">
        <span>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo ltrim($item["video"], "https://youtu.be/"); ?>" 
        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
        </span>
    </div>
    <div class="media-details">
        <h1><?php echo $item["title"]; ?></h1>
        <table>
            <tr>
                <th>Category</th>
                <td><?php echo ucfirst($item["category"]); ?></td>
            </tr>
            <?php if (strtolower($item["category"]) == "regular"){ ?>
        <tr>
          <th>Artist</th>
          <td><?php echo implode(", ",$item["artist"]); ?></td>
        </tr>
        <tr>
          <tr>
          <th>Album</th>
          <td><?php echo $item["album"]; ?></td>
        </tr>
        <?php } else if (strtolower($item["category"]) == "cover"){ ?>
          <tr>
          <th>Youtuber</th>
          <td><?php echo $item["youtuber"]; ?></td>
        </tr>
        <?php } else if (strtolower($item["category"]) == "game"){ ?>
          <tr>
          <th>Youtuber</th>
          <td><?php echo $item["game"]; ?></td>
        </tr>
         <?php } ?>
        </table>
    </div>