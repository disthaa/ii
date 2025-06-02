<?php
// contact_output.php
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !$name || !$email || !$message) {
    header('Location: index.php#contact');
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Terima Kasih - Contact Us</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body class="bg-light">
  <div class="container py-5">
    <div class="card mx-auto" style="max-width: 500px;">
      <div class="card-body text-center">
        <h3 class="card-title mb-4 text-success">Terima Kasih, <?= htmlspecialchars($name) ?>!</h3>
        <p>Kami telah menerima pesan Anda:</p>
        <ul class="list-group mb-3 text-start">
          <li class="list-group-item"><strong>Email:</strong> <?= htmlspecialchars($email) ?></li>
          <li class="list-group-item"><strong>Pesan:</strong><br> <?= nl2br(htmlspecialchars($message)) ?></li>
        </ul>
        <a href="index.php#contact" class="btn btn-success">Kembali ke Kontak</a>
      </div>
    </div>
  </div>
</body>
</html>
