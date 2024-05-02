<?php
$pdo = new PDO('mysql:host=localhost;dbname=your_database', 'username', 'password');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->fetchColumn() > 0) {
        echo "Email already exists";
        exit();
    }

    $verificationCode = md5(uniqid(rand(), true));

    $stmt = $pdo->prepare("INSERT INTO users (username, email, password, verification_code, status) VALUES (?, ?, ?, ?, 'unverified')");
    $stmt->execute([$username, $email, $password, $verificationCode]);

    $to = $email;
    $subject = 'Email Verification';
    $message = 'Click the following link to verify your email: http://example.com/verify.php?code=' . $verificationCode;
    $headers = 'From: your_email@example.com';
    mail($to, $subject, $message, $headers);

    echo "User registered successfully. Please check your email for verification.";
}
?>