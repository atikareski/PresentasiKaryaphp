<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/order.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Jucker Admin</title>
</head>
<body>
    <aside class="sidebar">
        <header>Jucker Admin</header>
        <ul>
            <li class="dashboard"><a href="dashboard.php"><i class='fas'>&#xf201; Dashboard</i></a></li>
            <li class="orders"><a href="#"><i class='far'>&#xf328; Orders</i></a></li>
            <li class="products"><a href="product.php"><i class='fas'>&#xf84c; Products</i></a></li>
        </ul>
    </aside>
    <div class="container">
        <div class="top">
            <div class="searchbar">
                <form>
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="akun">
                <h4>Admin</h4>
            </div>
        </div>
        <h1>Orders</h1>
        <div class="tabel">
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Nama Customer</th>
                    <th>Pesanan</th>
                    <th>Porsi</th>
                    <th>Request</th>
                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>Alamat</th>
                    <th>No.HP</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>5001</td>
                    <td>Atika</td>
                    <td>Menu Diet</td>
                    <td>1</td>
                    <td>-</td>
                    <td>20 Januari 2025</td>
                    <td>26 Januari 2025</td>
                    <td>Jl.Tamangapa Raya 3</td>
                    <td>082192113512</td>
                    <td>
                    <button>Belum Diproses</button>
                    <button>Sedang Diproses</button>
                    <button>Proses Pengantaran</button>
                    <button>Selesai</button></td>
                </tr>
                <tr>
                    <td>6001</td>
                    <td>Andi Pratama</td>
                    <td>Menu Biasa</td>
                    <td>1</td>
                    <td>Tanpa Sambal</td>
                    <td>20 Januari 2025</td>
                    <td>21 Januari 2025</td>
                    <td>Jl. Melati No. 45, Jakarta</td>
                    <td>081234567890</td>
                    <td>
                    <button>Belum Diproses</button>
                    <button>Sedang Diproses</button>
                    <button>Proses Pengantaran</button>
                    <button>Selesai</button></td>
                </tr>
                <tr>
                    <td>6002</td>
                    <td>Siti Nurhaliza</td>
                    <td>Paket Catering - Paket Standar</td>
                    <td>30</td>
                    <td>-</td>
                    <td>22 Januari 2025</td>
                    <td>22 Januari 2025</td>
                    <td>Jl. Anggrek No. 10, Bandung</td>
                    <td>081987654321</td>
                    <td>
                    <button>Belum Diproses</button>
                    <button>Sedang Diproses</button>
                    <button>Proses Pengantaran</button>
                    <button>Selesai</button></td>
                </tr>
                <tr>
                    <td>6003</td>
                    <td>Budi Santoso</td>
                    <td>Menu Makanan Luar Negeri</td>
                    <td>1</td>
                    <td>Makanan Khas Jepang</td>
                    <td>25 Januari 2025</td>
                    <td>29 Januari 2025</td>
                    <td>Jl. Mawar No. 2, Surabaya</td>
                    <td>081876543210</td>
                    <td>
                    <button>Belum Diproses</button>
                    <button>Sedang Diproses</button>
                    <button>Proses Pengantaran</button>
                    <button>Selesai</button></td>
                </tr>
                <tr>
                    <td>6004</td>
                    <td>Rina Suryani</td>
                    <td>Paket Catering - Paket Premium</td>
                    <td>50</td>
                    <td>-</td>
                    <td>23 Januari 2025</td>
                    <td>23 Januari 2025</td>
                    <td>Jl. Kenanga No. 12, Malang</td>
                    <td>081345678910</td>
                    <td>
                    <button>Belum Diproses</button>
                    <button>Sedang Diproses</button>
                    <button>Proses Pengantaran</button>
                    <button>Selesai</button></td>
                </tr>
                <tr>
                    <td>6005</td>
                    <td>Faisal Rahman</td>
                    <td>Menu Diet</td>
                    <td>2</td>
                    <td>-</td>
                    <td>21 Januari 2025</td>
                    <td>23 Januari 2025</td>
                    <td>Jl. Flamboyan No. 5, Bali</td>
                    <td>081234098765</td>
                    <td>
                    <button>Belum Diproses</button>
                    <button>Sedang Diproses</button>
                    <button>Proses Pengantaran</button>
                    <button>Selesai</button></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>