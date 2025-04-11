<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: checkout.html");
    exit();
}

$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$shipping_address = isset($_POST["shipping_address"]) ? trim($_POST["shipping_address"]) : "";
$products = isset($_POST["products"]) && is_array($_POST["products"]) ? $_POST["products"] : [];
$shipping_method = isset($_POST["shipping_method"]) ? trim($_POST["shipping_method"]) : "";

$shipping = [
    "standard" => 5.00,
    "express" => 10.00,
    "next day" => 20.00
];

$errors = [];
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

if (empty($errors)) {
    // Display order confirmation
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Confirmation</title>
    </head>
    <body>
        <h1>Your Order Information</h1>
        <p><strong>Name:</strong> <?= htmlspecialchars($name) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($email) ?></p>
        <p><strong>Shipping Address:</strong> <?= htmlspecialchars($shipping_address) ?></p>
        <p><strong>Products:</strong></p>
        <ul>
            <?php foreach ($products as $product): ?>
                <li><?= htmlspecialchars($product) ?></li>
            <?php endforeach; ?>
        </ul>
        <p><strong>Shipping Method:</strong> <?= htmlspecialchars($shipping_method) ?></p>
        <p><strong>Shipping Cost:</strong> €<?= number_format($shipping[$shipping_method], 2) ?></p>
    </body>
    </html>
    <?php
} else {
    // Display errors
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Checkout Error</title>
    </head>
    <body>
        <h1>Checkout Error</h1>
        <?php foreach ($errors as $error): ?>
            <p><?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
        <a href="checkout.html">Go back to checkout</a>
    </body>
    </html>
    <?php
}
?>