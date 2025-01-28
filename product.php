<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/product.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Jucker Admin</title>
</head>
<body>
    <aside class="sidebar">
        <header>Jucker Admin</header>
        <ul>
            <li class="dashboard"><a href="dashboard.php"><i class='fas'>&#xf201; Dashboard</i></a></li>
            <li class="orders"><a href="order.php"><i class='far'>&#xf328; Orders</i></a></li>
            <li class="products"><a href="#"><i class='fas'>&#xf84c; Products</i></a></li>
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
        <h1>Products</h1>
        <div class="tabel">
            <table>
                <tr>
                    <th>Image</th>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td><img src="img/menu diet.jpeg" alt="Menu Diet" width="30px" height="40px"></td>
                    <td>001</td>
                    <td>Menu Diet</td>
                    <td>Rp.20.000</td>
                    <td>Perhari Rp.20.000/d <br>
                        Perminggu  Rp.140.000/w <br>
                        Perbulan Rp.560.000/mo</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
                <tr>
                    <td><img src="img/makanan luar negeri.jpeg" alt="Menu Makanan Luar Negeri" width="30px" height="40px"></td>
                    <td>002</td>
                    <td>Menu Makanan Luar Negeri</td>
                    <td>Rp.30.000</td>
                    <td>Makanan Khas Jepang (Rp. 30.000/d) <br>Makanan Khas Thailand (Rp. 30.000/d) <br>Makanan Khas Arab (Rp. 30.000/d)<br><br>*harga bisa berbeda jika terdapat request diluar menu</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
                <tr>
                    <td><img src="img/Bistik ayam.jpeg" alt="Menu Biasa/Request" width="30px" height="40px"></td>
                    <td>003</td>
                    <td>Menu Biasa/Request</td>
                    <td>Rp.15.000</td>
                    <td>Perhari Rp.15.000/d <br>Perminggu Rp. 105.000/w <br>Perbulan Rp.420.000/mo 
                    <br><br>*harga bisa berbeda tergantung request</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
                <tr>
                    <td><img src="img/prasmanan.jpeg" alt="Paket Catering - Paket Ekonomis" width="30px" height="40px"></td>
                    <td>004</td>
                    <td>Paket Catering - Paket Ekonomis</td>
                    <td>Rp.35.000</td>
                    <td>Nasi putih<br>Ayam goreng/bakar<br>Sayur capcay/sop<br>Tahu/tempe goreng<br>Sambal dan kerupuk<br>Air mineral</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
                <tr>
                    <td><img src="img/prasmanan.jpeg" alt="Paket Catering - Paket Standar" width="30px" height="40px"></td>
                    <td>005</td>
                    <td>Paket Catering - Paket Standar</td>
                    <td>Rp.50.000</td>
                    <td>Nasi putih<br>bakar/goreng, ikan fillet, atau daging semur <br>Sayur lodeh/cah kangkung/capcay <br>Perkedel/tahu isi <br>Sambal, kerupuk, dan lalapan <br>Puding atau buah potong <br>Air mineral</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
                <tr>
                    <td><img src="img/prasmanan.jpeg" alt="Paket Catering - Paket Premium" width="30px" height="40px"></td>
                    <td>006</td>
                    <td>Paket Catering - Paket Premium</td>
                    <td>Rp.75.000</td>
                    <td>Nasi putih <br>Ayam bakar/goreng, ikan fillet, atau daging semur <br>Sayur lodeh/cah kangkung/capcay <br>Perkedel/tahu isi <br>Sambal, kerupuk, dan lalapan <br>Puding atau buah potong <br>Air mineral</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
                <tr>
                    <td><img src="img/prasmanan.jpeg" alt="Paket Catering - Paket Spesial" width="30px" height="40px"></td>
                    <td>007</td>
                    <td>Paket Catering - Paket Spesial</td>
                    <td>Rp.120.000</td>
                    <td>2 jenis nasi (nasi putih/nasi kebuli/nasi liwet) <br>2 lauk utama (ayam, daging, ikan, atau seafood) <br>3 pilihan sayur/sup <br>2 snack atau dessert <br>Minuman (air mineral, teh manis, es buah) <br>Layanan dekorasi dan peralatan prasmanan</td>
                    <td><button>Edit</button><button>Delete</button></td>
                </tr>
            </table>
        </div>
        <div class="tambah">
            <button>Tambah Produk</button>
        </div>
    </div>
</body>
</html>