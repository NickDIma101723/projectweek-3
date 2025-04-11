<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>
<body>
<h1>Your Order Information</h1>
<p><strong>Name:</strong> <?= htmlspecialchars(isset($name) && $name ? $name : 'Not provided') ?></p>
<p><strong>Email:</strong> <?= htmlspecialchars(isset($email) && $email ? $email : 'Not provided') ?></p>
<p><strong>Shipping Address:</strong> <?= htmlspecialchars(isset($shipping_address) && $shipping_address ? $shipping_address : 'Not provided') ?></p>
<p><strong>Products:</strong></p>
<ul>
    <?php if (isset($products) && $products): ?>
        <?php foreach ($products as $product): ?>
            <li><?= htmlspecialchars($product) ?></li>
        <?php endforeach; ?>
    <?php else: ?>
        <li>No products selected.</li>
    <?php endif; ?>
</ul>
<p><strong>Shipping Method:</strong> <?= htmlspecialchars(isset($shipping_method) && $shipping_method ? $shipping_method : 'Not selected') ?></p>
<p><strong>Shipping Cost:</strong> €<?= isset($shipping_method) && isset($shipping[$shipping_method]) ? number_format($shipping[$shipping_method], 2) : '0.00' ?></p>
</body>
</html>