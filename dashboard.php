<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/dashboard.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet"/>
    <link rel="shortcut icon" href="../assets/inr.ico" type="image/x-icon" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <title>Jucker Admin</title>
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
        <div class="graph">
            <div class="w-full h-96 bg-white px-8 py-9 rounded-xl">
                <p class="text-xl font-bold">Sales Details</p>
                <canvas id="myChart" class="w-full" width="1079" height="234" style="display: block; box-sizing: border-box; height: 312px; width: 1438px;"></canvas>
            </div>
        </div>
    </div>
<script>
    const ctx = document.getElementById("myChart").getContext("2d");
    const gradient = ctx.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, "rgba(54, 162, 235, 0.5)");
    gradient.addColorStop(0.8, "rgba(54, 162, 235, 0)");
    const myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [
                "5k",
                "10k",
                "15k",
                "20k",
                "25k",
                "30k",
                "35k",
                "40k",
                "45k",
                "50k",
                "55k",
                "60k",
            ],
            datasets: [
                {
                    label: "Data",
                    data: [
                        20, 35, 25, 64.37, 42, 47, 50, 30, 60, 40, 45, 10, 12312, 234,
                    ],
                    backgroundColor: gradient,
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                    fill: true,
                    pointBackgroundColor: "rgba(54, 162, 235, 1)",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(54, 162, 235, 1)",
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: false,
                    max: 100,
                    ticks: {
                        stepSize: 20,
                        callback: function (value) {
                            return value + "%";
                        },
                    },
                    grid: {
                        drawBorder: false,
                    },
                },
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function (context) {
                            let label = context.dataset.label || "";
                            if (label) {
                                label += ": ";
                            }
                            label += parseFloat(context.raw).toFixed(2);
                            return label;
                        },
                    },
                },
            },
            responsive: true,
            maintainAspectRatio: false,
        },
    });
</script>
</body>
</html>



