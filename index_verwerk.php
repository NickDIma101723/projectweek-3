<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: checkout.html");
    exit();
}

$name = $_POST["name"];
$email = $_POST["email"];
$shipping_address = $_POST["shipping_address"];
$products = $_POST["products"];
$shipping_method = $_POST["shipping_method"];
$shipping = [
    "standard" => 5.00,
    "express" => 10.00,
    "next day" => 20.00
];

$erros = [];
if (empty($name)) {
    $errors[] = "Name is required.";
}
if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}
if (empty($shipping_address)) {
    $errors[] = "Shipping address is required.";
}
if (empty($products)) {
    $errors[] = "Products are required.";
} elseif (!is_array($products)) {
    $errors[] = "Invalid products format.";
}
if (empty($shipping_method)) {
    $errors[] = "Shipping method is required.";
} elseif (!array_key_exists($shipping_method, $shipping)) {
    $errors[] = "Invalid shipping method.";
}

if(empty($errors)) {
    include 'index_view.php';
} else{
    foreach ($errors as $error) {
        print "<p>$error</p>";
    }
}