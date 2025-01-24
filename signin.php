<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body>
    <nav>
        <h1 class="judul">JUCKER</h1>
        <ul>
            <li><a href="indexuser.php">Home</a></li>
            <li><a href="indexuser.php#menu">Menu</a></li>
            <li><a href="daftar.php">Daftar Pesanan</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="container">
        <section class="container2">
            <div class="login">
                <div class="welcome">
                    <h1>Welcome</h1>
                </div>
                <div class="login_form">
                    <form>
                        <label for="nama">Masukkan Nama</label><br>
                        <input type="text" placeholder="Masukkan Nama"><br><br>
                        <label for="pass">Masukkan No.HP</label><br>
                        <input type="tel" id="phone" name="phone" placeholder="1234-5678-9101" pattern="[0-9]{4}[0-9]{4}[0-9]{4}" required><br>
                        <small>Sudah punya akun, <a href="login.php">Login</a></small><br><br>
                        <div class="button">
                            <a href="daftar.php">
                                <input type="button" onclick="alert('Welcome!!')" value="Sign In">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>  
    <section class="footer">
        <h6 class="contact">IG: @jucker_catering   I   FB: @jucker_catering   I   Youtube: jucker channel</h6>
        <h6>@Copyright 2025 by Jucker Catering</h6>
    </section>
</body>
</html>