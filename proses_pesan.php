<?php
include "db.php"; // koneksi ke database 'kantindb'

$menuDipilih = $_POST['menu'] ?? [];
$jumlahDipilih = $_POST['jumlah'] ?? [];
$pesanan = [];
$totalHarga = 0;
$error = false;

$conn->begin_transaction();

try {
  foreach ($menuDipilih as $kantin => $menus) {
    foreach ($menus as $index => $menuNama) {
      $jumlah = intval($jumlahDipilih[$kantin][$index] ?? 0);

      // Ambil data menu dari database
      $stmt = $conn->prepare("SELECT * FROM menu WHERE menu = ? AND kantin = ? FOR UPDATE");
      $stmt->bind_param("ss", $menuNama, $kantin);
      $stmt->execute();
      $result = $stmt->get_result();

      if (!$result->num_rows) {
        throw new Exception("Menu '$menuNama' dari $kantin tidak ditemukan");
      }

      $row = $result->fetch_assoc();

      if ($row['stok'] < $jumlah) {
        throw new Exception("Stok tidak cukup untuk menu '$menuNama' dari $kantin");
      }

      // Kurangi stok
      $stmt = $conn->prepare("UPDATE menu SET stok = stok - ?, tanggal_pesan = NOW() WHERE id = ?");
      $stmt->bind_param("ii", $jumlah, $row['id']);
      $stmt->execute();

      $subtotal = $row['harga'] * $jumlah;
      $pesanan[] = [
        'kantin' => $kantin,
        'menu' => $menuNama,
        'harga' => $row['harga'],
        'jumlah' => $jumlah,
        'subtotal' => $subtotal
      ];
      $totalHarga += $subtotal;
    }
  }

  $conn->commit();
} catch (Exception $e) {
  $conn->rollback();
  $error = $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Hasil Pemesanan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container py-5">
  <h2 class="fw-bold mb-4">Detail Pemesanan Anda</h2>

  <?php if ($error): ?>
    <div class="alert alert-danger">
      <strong>Terjadi Kesalahan:</strong> <?= htmlspecialchars($error) ?>
    </div>
    <a href="index.php" class="btn btn-secondary">Kembali ke Beranda</a>
  <?php else: ?>
    <table class="table table-bordered">
      <thead class="table-success">
        <tr>
          <th>Kantin</th>
          <th>Menu</th>
          <th>Harga Satuan</th>
          <th>Jumlah</th>
          <th>Subtotal</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($pesanan as $item): ?>
          <tr>
            <td><?= htmlspecialchars(ucwords(str_replace('_', ' ', $item['kantin']))) ?></td>
            <td><?= htmlspecialchars($item['menu']) ?></td>
            <td>Rp<?= number_format($item['harga'], 0, ',', '.') ?></td>
            <td><?= $item['jumlah'] ?></td>
            <td>Rp<?= number_format($item['subtotal'], 0, ',', '.') ?></td>
          </tr>
        <?php endforeach; ?>
        <tr class="table-success">
          <td colspan="4" class="text-end fw-bold">Total</td>
          <td class="fw-bold">Rp<?= number_format($totalHarga, 0, ',', '.') ?></td>
        </tr>
      </tbody>
    </table>

    <h4>Scan QR berikut untuk konfirmasi pemesanan:</h4>
    <img src="img/qr.png" alt="QR Code" width="200" height="200" />
    <br><a href="index.php" class="btn btn-success mt-3">Kembali ke Beranda</a>
  <?php endif; ?>
</div>
</body>
</html>
