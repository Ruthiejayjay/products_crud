<?php

$title = $product['title'];
$price = $product['price'];
$description = $product['description'];
$imagePath ='';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];



    if (!$title) {
        $errors[] = 'Products title is required';
    }
    if (!$price) {
        $errors[] = 'Products price is required';
    }

    if (!is_dir(__DIR__.'/public/images')) {
        mkdir('images');
    }

    if (empty($errors)) {
        $image = $_FILES['image'] ?? null;
        $imagePath = $product ['image'];

        if ($image && $image['tmp_name']) {

            if ($product['image']) {
                unlink(__DIR__.'/public/'.$product['image']);
            }

            $imagePath = 'images/' . randomString(8) . '/' . $image['name'];
            mkdir(dirname(__DIR__.'/public/'.$imagePath));

            move_uploaded_file($image['tmp_name'], __DIR__ . '/public/' . $imagePath);
        }


       
    }
}
