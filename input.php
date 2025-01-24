<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/input.css">
    <title>Daftar Pesanan</title>
</head>
<body>
    <nav>
        <h1 class="judul">JUCKER</h1>
        <ul>
            <li><a href="indexuser.php">Home</a></li>
            <li><a href="indexuser.php#menu">Menu</a></li>
            <li><a href="daftar.php">Daftar Pesanan</a></li>
            <li><a href="login.php">Log out</a></li>
        </ul>
    </nav>
    <div class="container"></div>
        <section id="pengguna">
            <div class="nama">
                <h1>Hello, Atika</h1>
            </div>
            <div class="id">
                <h1>ID:342012</h1>
            </div>
        </section>
        <h1 class="title">Masukkan Informasi</h1>
        <section id="input">
            <div class="pesanan">
                <h1>Informasi Pesanan</h1>
                <form>
                    <label for="kategori">Pilih Kategori:</label><br>
                    <select id="kategori" name="Pilih Kategori">
                        <option value="Default">Pilih Kategori (Default)</option>
                        <option value="Diet">Menu Diet</option>
                        <option value="Biasa">Menu Biasa/Request</option>
                        <option value="Luar">Menu Makanan Luar Negeri</option>
                        <option value="Catering1">Paket Catering - Paket Ekonomis</option>
                        <option value="Catering2">Paket Catering - Paket Standar</option>
                        <option value="Catering3">Paket Catering - Paket Premium</option>
                        <option value="Catering4">Paket Catering - Paket Spesial</option>
                        <option value="snack">Paket Snack Luar Negeri</option>
                        <option value="kue">Paket Kue Tradisional</option>
                    </select><br><br><br>
                    <label for="porsi">Masukkan Porsi:</label><br>
                    <input type="number" id="porsi" name="porsi" placeholder="Masukkan Porsi Pesanan"><small>*hanya angka</small><br><br><br>
                    <label for="request">Masukkan Request</label>
                    <input type="text" maxlength="500" placeholder="Masukkan Request">
                    <small>*Berikan request jika ada</small><br><br><br>
                    <label for="tanggal">Masukkan Tanggal Pengantaran: </label><br><br>
                    <p>Mulai Tanggal</p>
                    <input type="date" id="tanggal" name="tanggal"><p>Hingga</p>
                    <input type="date" id="tanggal" name="tanggal">
                    <small>*Masukkan tanggal yang sama jika hanya memesan untuk satu hari</small><br><br><br>
                </form>
            </div>
            <div class="pelanggan">
                <h1>Informasi Pelanggan</h1>
                <form>
                    <label for="nama">Masukkan Nama Pelanggan</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan Nama"><br>
                    <input type="radio" id="akun" name="pilih_nama" value="nama-akun">
                    <label for="akun">Gunakan nama akun</label><br>
                    <input type="radio" id="ganti" name="pilih_nama" value="ganti">
                    <label for="ganti">Gunakan nama yang berbeda</label><br><br><br>
                    <label for="alamat">Masukkan Alamat</label><br>
                    <input type="text" name="alamat" id="alamat" maxlength="100" placeholder="Masukan Alamat">
                    <small>*max: 100 huruf</small><br><br><br>
                    <label for="telpon">Masukkan Nomor telepon</label><br>
                    <input type="tel" id="phone" name="phone" placeholder="1234-5678-9101" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required><br>
                    <small>Format: 1234-5678-9101</small><br><br>
                </form>
            </div>
        </section>
        <div class="tombol">
            <input type="button" onclick="alert('Data Telah Ditambahkan')" value="Submit">
        </div>
        <div class="pembayaran">
            <a href="pembayaran.php"><h3>Lanjutkan Pembayaran -></h3></a>
        </div>
        <section class="footer">
            <h6 class="contact">IG: @jucker_catering   I   FB: @jucker_catering   I   Youtube: jucker channel</h6>
            <h6>@Copyright 2025 by Jucker Catering</h6>
        </section>
    </div>
</body>
</html>