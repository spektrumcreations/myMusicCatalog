<?php
function get_item_html($id,$item){
    $output = '<li>
                <iframe width="560" height="315" 
                src="'. $item['video'] . '"
                frameborder="0" allow="accelerometer; autoplay; 
                encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen></iframe>
                <div><a href="details.php?id="' . $id . '">' . $item['title'] . '</div></a>
                </li>';
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