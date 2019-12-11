<?php
$pageTitle = "Music Catalog";
$section = null;
include("inc/data.php");
include("inc/functions.php");
include("inc/header.php"); ?>
    <div class="random">
        <h2>Here's a sample of what I listen to.</h2>

        <ul class="items">
            <?php
                $random = array_rand($catalog,4);
                foreach($random as $id) {
                    echo get_item_html($id, $catalog[$id]);
                }
                ?>
        </ul>
    </div>

<?php include("inc/footer.php"); ?>