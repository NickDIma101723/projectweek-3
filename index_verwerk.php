<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: checkout.html");
    exit();
}

// Initialize all variables to avoid undefined errors
$name = "";
$email = "";
$shipping_address = "";
$products = array();
$shipping_method = "";
$shipping = array(
    "standard" => 5.00,
    "express" => 10.00,
    "next day" => 20.00
);

// Assign POST data if provided
if (isset($_POST["name"])) {
    $name = $_POST["name"];
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
if (isset($_POST["shipping_address"])) {
    $shipping_address = $_POST["shipping_address"];
}
if (isset($_POST["products"])) {
    $products = (array)$_POST["products"];
}
if (isset($_POST["shipping_method"])) {
    $shipping_method = $_POST["shipping_method"];
}

// Validate form data
$errors = array();
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
}
if (empty($shipping_method)) {
    $errors[] = "Shipping method is required.";
} elseif (!array_key_exists($shipping_method, $shipping)) {
    $errors[] = "Invalid shipping method.";
}

// Include view or show errors
if (empty($errors)) {
    include 'index_view.php';
} else {
    print "<h1>Form Errors</h1>";
    foreach ($errors as $error) {
        print "<p>$error</p>";
    }
    print '<a href="checkout.html">Go back to checkout</a>';
}
?>