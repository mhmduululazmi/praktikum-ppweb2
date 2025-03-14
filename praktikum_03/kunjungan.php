<?php
require_once ("BukuTamu.php");
session_start();

if (!isset($_SESSION['buku_tamu'])) {
    $_SESSION['buku_tamu'] = [];
}

if (isset($_POST['submit'])) {
    // Membuat object dari class Buku Tamu
    $buku_tamu = new BukuTamu();

    // Mengisi property timestamp dengan fungsi date
    // Y-m-d H:i:s artinya 2025-03-14 
    $buku_tamu->timestamp = date('Y-M-d H:i:s');

    $buku_tamu->fullname = $_POST['fullname'];
    $buku_tamu->email = $_POST['email'];
    $buku_tamu->message = $_POST['message'];

    array_push($_SESSION['buku_tamu'], $buku_tamu);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<div class="container" my-5>
    <h2 class="mb-4">Daftar Kunjungan</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Timestamp</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Keperluan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['buku_tamu'] as $entry):  ?>
            <tr>
                <td>
                    <?php echo htmlspecialchars($entry->timestamp); ?>
                </td>
                <td>
                    <?php echo htmlspecialchars($entry->fullname); ?>
                </td>
                <td>
                    <?php echo htmlspecialchars($entry->email); ?>
                </td>
                <td>
                    <?php echo htmlspecialchars($entry->message); ?>
                </td>    
            </tr>
            <?php endforeach; ?>    
        </tbody>
    </table>
    <a href="index.php">&lt;&lt;&lt; Kembali</a>
    <!-- <a href="index.php"><<< Kembali</a> -->
</div>    
</body>
</html>