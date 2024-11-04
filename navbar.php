<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventori</title>
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="assets/image/yusen-logistics.png" class="image" alt="Sample Image" style="max-height: 50px;"> <!-- Membatasi tinggi gambar -->
    
    <!-- Tombol Navbar untuk tampilan responsif -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menu Navbar dengan posisi di sebelah kanan -->
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="masterDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            MASTER
          </a>
          <ul class="dropdown-menu" aria-labelledby="masterDropdown">
            <li><a class="dropdown-item" href="barang.php">BARANG</a></li>
            <li><a class="dropdown-item" href="kategori.php">KATEGORI</a></li>
            <li><a class="dropdown-item" href="lokasi.php">LOKASI</a></li>
            <li><a class="dropdown-item" href="user.php">USER</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="stock.php">STOCK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pengambilan_barang.php">BARANG KELUAR</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

<!-- Custom JavaScript for dropdown behavior -->
<script>
  $(document).ready(function() {
    // Mengatur perilaku dropdown ketika diklik
    $('#masterDropdown').on('click', function(event) {
      event.preventDefault(); // Mencegah aksi default tautan
      $(this).dropdown('toggle'); // Toggle dropdown
    });

    // Menutup dropdown ketika klik di luar dropdown
    $(document).on('click', function(event) {
      if (!$(event.target).closest('#masterDropdown').length) {
        $('.dropdown-menu').removeClass('show'); // Menutup dropdown
      }
    });
  });
</script>
</body>
</html>
