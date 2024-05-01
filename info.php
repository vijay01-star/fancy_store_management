<?php

$galleryData = array(
    array(
        "name" => "Photo 4",
        "image_url" => "g2.jpeg"
    ),
    array(
        "name" => "Photo 5",
        "image_url" => "g11.jpeg"
    ),
    array(
        "name" => "Photo 6",
        "image_url" => "g12.jpeg"
    ),
    array(
        "name" => "Photo 7",
        "image_url" => "g5.jpeg"
    ),
    array(
        "name" => "Photo 8",
        "image_url" => "g6.jpeg"
    ),
    array(
        "name" => "Photo 9",
        "image_url" => "g7.jpeg"
    ),
    array(
        "image_url" => "g1.jpeg"
    ),
    array(
        "image_url" => "g3.jpeg"
    ),
    array(
        "image_url" => "g4.jpeg"
    )
);

// Output JSON-encoded gallery data
echo json_encode($galleryData);

// Echo the "Return to Home Page" link
//echo '<div class="return-home">';
//echo '<a href="fet.html">Return to Home Page</a>';
//echo '</div>';

?>
