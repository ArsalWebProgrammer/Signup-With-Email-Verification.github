<?php
$pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET['code'])) {
    $verificationCode = $_GET['code'];
    $stmt = $pdo->prepare("SELECT * FROM users WHERE verification_code = ?");
    $stmt->execute([$verificationCode]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $stmt = $pdo->prepare("UPDATE users SET status = 'verified' WHERE id = ?");
        $stmt->execute([$user['id']]);
        echo "Email verified successfully.";
    } else {
        echo "Invalid verification code.";
    }
} else {
    echo "Verification code not provided.";
}
?>