<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Soto PHO">
    <title>Simulasi Web Kuliner</title>
    
    <!-- style here -->
    <?php include "style.php" ?>
   
</head>
<body>
    <!-- Header start -->
    <?php include "header.php" ?>

    <!--home start-->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Soto PHO</h1>
            <h2>Kuliner Nusantara <br> Juga Bisa Kekinian!!!</h2>
            <a href="menu1.php" class="btn">Menu Hari Ini</a>
        </div>

        <div class="home-img">
            <img src="img/sotohome (1).png">
        </div>
    </section>

    <!--about start-->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/order-food.png">
        </div>

        <div class="about-text">
            <span>Tentang Kita</span>
            <h2>Kuliner Nusantara harus ikut kemajuan teknologi,<br>bukan malah hilang!</h2>
            <p>SOTO PHO. ya, itulah nama kedai kami, kedai dengan kuliner Nusantara.
                Walaupun kami berjualan masakan nusantara, kami harus tetap melakukan inovasi
                di berbagai sektor pelayanan kami. Perkembangan teknologi tidak akan bisa menghambat
                inovasi-inovasi di Kuliner Nusantara. 
            </p>
            <a href="menu2.html" class="btn">Baca Selengkapnya</a>
        </div>
    </section>

    <!--menu start-->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Menu Makanan</span>
            <h2>Rasa Bintang Lima Harga Kaki Lima</h2>
        </div>

        <div class="menu-container">
            <div class="box">
                <div class="box-img">
                    <img src="img/soto2.png">
                </div>
                <h2>Soto Daging Sapi</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 5.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/timlo.png">
                </div>
                <h2>Timlo</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 5.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/kari.png">
                </div>
                <h2>Nasi Tumpang</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 5.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/soto2.png">
                </div>
                <h2>Soto Ayam</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp.7.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/timlo.png">
                </div>
                <h2>Sayur Sop</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 5.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/kari.png">
                </div>
                <h2>Nasi Pecel</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 5.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/kari.png">
                </div>
                <h2>Nasi Botok Ayam</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 8.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/kari.png">
                </div>
                <h2>Nasi Botok Ati</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 7.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/kari.png">
                </div>
                <h2>Nasi Botok Telur</h2>
                <h3>Menu Terlaris</h3>
                <span>Rp. 7.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

        </div>
    </section>

    <!--Table-->
    <section>
        <head>
            <div class="table-header">
                <h2>Jam Operasional</h2>
            </div>
         </head>
         <br>
        <body>
            <table>
                <tr>
                    <th>Hari</th>
                    <th>Jam Buka</th>
                    <th>Jam Tutup</th>
                </tr>
                <tr>
                    <td>Senin</td>
                    <td>05:00</td>
                    <td>09.00</td>
                </tr>
                <tr>
                    <td>Selasa</td>
                    <td>05:00</td>
                    <td>09:00</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>05:00</td>
                    <td>09:00</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>05:00</td>
                    <td>09:00</td>
                </tr>
                <tr>
                    <td>Jumat</td>
                    <td>05:00</td>
                    <td>09:00</td>
                </tr>
                <tr>
                    <td>Sabtu</td>
                    <td>05:00</td>
                    <td>09:00</td>
                </tr>
                <tr>
                    <td>Minggu</td>
                    <td>05:00</td>
                    <td>09:00</td>
                </tr>
            </table>
        </body>
    </section>

    <!--service start-->
    <section class="services" id="sevices">
        <div class="heading">
            <span>Pelayanan Online</span>
            <h2>Kepuasan Pelanggan Adalah Tujuan Kami</h2>
        </div>

        <div class="service-container">
            <div class="s-box">
                <img src="img/s1.png">
                <h3>Pesan</h3>
                <p>Silakan pesan makanan melalui daftar yang tersedia</p>
            </div>

            <div class="s-box">
                <img src="img/s2.png">
                <h3>Antar</h3>
                <p>Untuk menjaga kualitas makanan, Driver kami langsung mengantarkan makanan Anda setelah proses masak selesai</p>
            </div>

            <div class="s-box">
                <img src="img/s3.png">
                <h3>Tiba di Rumah</h3>
                <p>Setelah tiba di rumah Anda, Driver kami akan mengecek pesanan anda terlebih dahulu <br> DAN SELAMAT MENIKMATI!!! </p>
            </div>
        </div>
    </section>

    <!--call to action-->
    <section class="cta">
        <h2>Saran Anda sangat Kami hargai<br>dan penting untuk Kami berkembang</h2>
        <a href="#" class="btn">Tulis Saran</a>
    </section>

    <!--footer start-->
    <?php include "footer.php"?>

    <!--Javascript-->
    <script type="text/javascript" src="assets/main.js"></script>\

</body>
</html>