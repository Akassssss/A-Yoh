<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="/assets/images/car-sport.svg" />
<title>A-Yoh Dashboard</title>
<!-- ======= Styles ====== -->
<link rel="stylesheet" href={{'Assets/dashboard.css'}} />
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet" />
</head>

<body>
<!-- =============== Navigation ================ -->
<div class="container" style="">
    <div class="navigation">
    <ul>
        <li>
        <a>
            <span class="icon" style="margin-top: 11px">
            
            </span>
            <span class="title" style="font-size: 25px; font-weight: bold; letter-spacing: 3px; margin-top: 10px">A-YOH</span>
        </a>
        </li>

        <li>
        <a href="#">
            <span class="icon">
            <ion-icon name="home-outline"></ion-icon>
            </span>
            <span class="title">Dashboard</span>
        </a>
        </li>



        <li>
        <a href="../admin/feedback.html">
            <span class="icon">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </span>
            <span class="title">Feedback</span>
        </a>
        </li>

        <li>
        <a href="upload">
            <span class="icon">
                <ion-icon name="cloud-upload"></ion-icon>
            </span>
            <span class="title">Upload</span>
        </a>
        </li>

        <li style="margin-top: 30px;">
        <a href="../admin/account.html">
            <span class="icon">
                <ion-icon name="lock-closed-outline"></ion-icon>
            </span>
            <span class="title">Account</span>
        </a>
        </li>
                    
    </ul>
    </div>

    <!-- ========================= Main ==================== -->
    <div class="main">
    <div class="topbar">
        <div class="toggle">
        <ion-icon name="menu-outline"></ion-icon>
        </div>

        <div class="search">
        <label>
            <input type="text" placeholder="Search here" />
            <ion-icon name="search-outline"></ion-icon>
        </label>
        </div>

        <div class="user">
        <a href="/form.html">
            
        </a>
        </div>
    </div>

    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
        <div>
            <div class="numbers">1,504</div>
            <div class="cardName">Dilihat</div>
        </div>

        <div class="iconBx">
            <ion-icon name="eye-outline"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">80</div>
            <div class="cardName">Terjual</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cart-outline"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">284</div>
            <div class="cardName">Ulasan</div>
        </div>

        <div class="iconBx">
            <ion-icon name="chatbubbles-outline"></ion-icon>
        </div>
        </div>

        <div class="card">
        <div>
            <div class="numbers">10,2jt</div>
            <div class="cardName">Pendapatan</div>
        </div>

        <div class="iconBx">
            <ion-icon name="cash-outline"></ion-icon>
        </div>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
        <div class="cardHeader">
            <h2>Riwayat Penyewaan</h2>
            <a href="#" class="btn"></a>
        </div>

        <table class="riwayat" style="border-radius: 10px;">
            <thead>
            <tr class="kolomket">
                <td>Nama</td>
                <td>Barang</td>
                <td>Harga</td>
                <td>Durasi Pengiriman</td>
                <td>Status</td>
            </tr>
            </thead>

            <tbody>
            <tr>
                <td>Ahmad Buang</td>
                <td>black hoodie</td>
                <td>200</td>
                <td>24 jam</td>
                <td><span class="status delivered">Dalam pengemasan</span></td>
            </tr>

            <tr>
                <td>Ayyasi Jr</td>
                <td>pants</td>
                <td>150</td>
                <td>24 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Ronaldowati</td>
                <td>black T-Shirt</td>
                <td>150</td>
                <td>4 jam</td>
                <td><span class="status return">Melewati Durasi Pembayaran</span></td>
            </tr>

            <tr>
                <td>Ten Hag</td>
                <td>blue T-Shirt</td>
                <td>150</td>
                <td>2 hari</td>
                <td><span class="status inProgress">Selesai</span></td>
            </tr>

            <tr>
                <td>Bang Messi</td>
                <td>black T-Shirt</td>
                <td>150</td>
                <td>24 jam</td>
                <td><span class="status delivered">Selesai</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>

            <tr>
                <td>Gonzales</td>
                <td>blue Pants</td>
                <td>400</td>
                <td>4 jam</td>
                <td><span class="status pending">Pengiriman</span></td>
            </tr>
            </tbody>
        </table>
        </div>
    </div>
    </div>
</div>

<!-- =========== Scripts =========  -->
<script src="/assets/js/dashboard.js"></script>

<!-- ====== ionicons ======= -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
