<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: /index.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if ($name === '') {
    $errors[] = 'Nama wajib diisi.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Format email tidak valid.';
}
if ($message === '') {
    $errors[] = 'Pesan wajib diisi.';
}

if (empty($errors)) {
    $to = 'aulia@example.com';
    $subject = 'Pesan dari formulir portofolio';
    $body = "Nama: $name\nEmail: $email\n\nPesan:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";
    mail($to, $subject, $body, $headers);
    header('Location: /index.php?status=success&msg=Pesan%20berhasil%20dikirim');
} else {
    $encoded = urlencode(implode(' | ', $errors));
    header('Location: /index.php?status=error&msg=' . $encoded);
}
exit;
