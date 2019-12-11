<?php
include("inc/data.php");
include("inc/functions.php");

$pageTitle = "Full Catalog";

$section = null;

if (isset($_GET["cat"])){
    if($_GET["cat"] == "regular") {
        $pageTitle = "Regular music";
        $section = "regular";
    } else if ($_GET["cat"] == "game")
    {
        $pageTitle = "Video Game Soundtracks";
        $section = "game";
    }  else if($_GET["cat"] == "cover") 
    {
        $pageTitle = "Covers";
        $section = "cover";
    }
}
include("inc/header.php"); ?>

<div class="section catalog page">
    <h1><?php
    if ($section != null) {
        echo "<a href='catalog.php'>Full Catalog</a> &gt; ";
    }
    echo $pageTitle; ?></h1>

    <ul class="items">
        <?php
        $categories = array_category($catalog,$section);
        foreach($categories as $id) {
            echo get_item_html($id,$catalog[$id]);
        }
        ?>
        </ul>
</div>

<?php include("inc/footer.php"); ?>