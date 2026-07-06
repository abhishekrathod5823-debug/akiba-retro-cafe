<?php
// Akiba Retro Cafe - Order Processing Handler
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
require_once 'db.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['login_error'] = "You must be signed in to place an order.";
    header("Location: order.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $cart_data_json = isset($_POST['cart_data']) ? $_POST['cart_data'] : '';

    if (empty($cart_data_json)) {
        $_SESSION['success_message'] = "Your cart is empty. Could not place order.";
        header("Location: order.php");
        exit;
    }

    $cart = json_decode($cart_data_json, true);

    if (json_last_error() !== JSON_ERROR_NONE || !is_array($cart) || empty($cart)) {
        $_SESSION['success_message'] = "Invalid cart data. Please try again.";
        header("Location: order.php");
        exit;
    }

    // Calculate total price and validate contents
    $total_price = 0;
    foreach ($cart as $item) {
        $price = floatval($item['price']);
        $qty = intval($item['quantity']);
        $total_price += ($price * $qty);
    }

    // Insert order and order items inside a Database Transaction for reliability
    try {
        $pdo->beginTransaction();

        // 1. Create main order record
        $order_stmt = $pdo->prepare("INSERT INTO orders (user_id, total_price, status) VALUES (:user_id, :total_price, 'Pending')");
        $order_stmt->execute([
            'user_id' => $user_id,
            'total_price' => $total_price
        ]);
        
        $order_id = $pdo->lastInsertId();

        // 2. Insert each item from the cart
        $item_stmt = $pdo->prepare("INSERT INTO order_items (order_id, item_name, price, quantity) VALUES (:order_id, :item_name, :price, :quantity)");
        
        foreach ($cart as $item) {
            $item_stmt->execute([
                'order_id' => $order_id,
                'item_name' => $item['name'],
                'price' => floatval($item['price']),
                'quantity' => intval($item['quantity'])
            ]);
        }

        // Commit transaction
        $pdo->commit();

        $_SESSION['success_message'] = "Arigato! Your order has been placed successfully! Order ID: #" . $order_id . ". Preparing food now!";
        header("Location: index.php");
        exit;

    } catch (\PDOException $e) {
        // Rollback transaction if any query fails
        $pdo->rollBack();
        $_SESSION['success_message'] = "Could not place order due to database error: " . $e->getMessage();
        header("Location: order.php");
        exit;
    }
} else {
    header("Location: order.php");
    exit;
}
?>
