<?php

function uploadImage($image)
{
    $name = $image['name'];
    $tmp_name = $image['tmp_name'];

    move_uploaded_file($tmp_name, "images/" . $name);
}

uploadImage($_FILES['image']);

?>

<img src="" alt="">
