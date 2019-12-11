<?php
function get_item_html($id,$item){
    $output = "<div class='card' style='width: 18em;'>
            <div class='card-body'>
            <h5 class='card-title'>".  $item["title"] ."</h5>
            <a class='btn btn-primary' href='details.php?id=" . $id . "'> Play
            </a>
            </div>
            </div>";
        return $output;
}



function array_category($catalog,$category){
    $output = array();

    foreach($catalog as $id => $item) {
        if ($category == null OR strtolower($category) == strtolower($item["category"])) {
            $sort = $item["title"];
            $sort = ltrim($sort, "The ");
            $sort = ltrim($sort, "A ");
            $sort = ltrim($sort, "An ");
            $output[$id] = $sort;
        }
    }
    asort($output);
    return array_keys($output);
}
?>