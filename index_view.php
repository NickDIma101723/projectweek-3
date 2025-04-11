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