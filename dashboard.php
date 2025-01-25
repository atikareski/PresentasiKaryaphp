<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Dashboard Jucker</title>
</head>
<body>
    <aside class="sidebar">
        <header>Jucker Admin</header>
        <ul>
            <li class="dashboard"><a href="#"><i class='fas'>&#xf201; Dashboard</i></a></li>
            <li class="orders"><a href="order.php"><i class='far'>&#xf328; Orders</i></a></li>
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
        <h1>Dashboard</h1>
        <div class="analytics">
            <div class="besar">
                <h3>Total Kategori Makanan Besar</h3><br><br>
                <i class="fas fa-chart-line"> 7</i>
            </div>
            <div class="kue">
                <h3>Total Paket Snack dan Kue Tradisional</h3><br><br>
                <i class="fas fa-chart-line"> 2</i>
            </div>
            <div class="pesanan">
                <h3>Total Orders</h3><br><br>
                <i class="fas fa-chart-line">   5</i>
            </div>
            <div class="income">
                <h3>Total Income</h3><br><br>
                <i class="fas fa-chart-line">   Rp.700.000</i>
            </div>
        </div>
       
    </div>
</body>
</html>



