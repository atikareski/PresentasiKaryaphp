<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/order.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>Dashboard Jucker</title>
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
    </div>
</body>
</html>