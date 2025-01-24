<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <link rel="stylesheet" href="pembayaran.css">
</head>
<body>
    <div class="container">
        <nav>
            <h1 class="judul">JUCKER</h1>
            <ul>
                <li><a href="indexuser.php">Home</a></li>
                <li><a href="indexuser.php#menu">Menu</a></li>
                <li><a href="daftar.php">Daftar Pesanan</a></li>
                <li><a href="login.php">Log out</a></li>
            </ul>
        </nav>
        <div class="title">
            <h1>Informasi Pembayaran</h1>
            <p>Setelah melakukan pembayaran kirim bukti pembayaran melalui nomor WhatsApp <a href="#bukti">di bawah</a></p>
        </div>
        <section id="pembayaran">
            <div class="opsi">
                <div class="bri">
                    <h3>BRI : 1665 01 012771 507</h3>
                </div>
                <div class="bni">
                    <h3>BNI : 1665 01 012771 507</h3>
                </div>
                <div class="mandiri">
                    <h3>Mandiri : 1665 01 012771 507</h3>
                </div>
                <div class="bca">
                    <h3>BCA : 1665 01 012771 507</h3>
                </div>
                <div class="ovodana">
                    <h3>OVO/Dana: 082192113512</h3>
                </div>
                <div class="qris">
                    <h3>QRIS: Tekan <a href="#">disini</a> untuk menampilkan barcode</h3>
                </div>
            </div>
        </section>
        <section id="bukti">
            <a href="https://wa.me/6282192113512" class="whatsapp-button">
                <img src="img/wa_logo-removebg-preview.png" alt="WhatsApp Icon" width="40" height="30">WA: 082192113512
            </a>
        </section>
        <div class="submit">
            <a href="daftar.php" onclick="alert('Silahkan menunggu konfirmasi dari admin')">Selesai</a>
        </div>
    </div>
    <section class="footer">
        <h6 class="contact">IG: @jucker_catering   I   FB: @jucker_catering   I   Youtube: jucker channel</h6>
        <h6>@Copyright 2025 by Jucker Catering</h6>
    </section>
</body>
</html>