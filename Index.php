<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Angelica</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href="">WEBSITE ANGELICA ROMPAS</a></div>
            <div class="menu">
                <ul>
                    <li><a href="#Profil">Profil</a></li>
                    <li><a href="#Galery">Gallery</a></li>
                    <li><a href="#Blog">Blog</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </div> 
        </div>
    </nav>
    <div class="wrapper">
        <!-- untuk Home-->
        <section id="Home">
            <img src="img/imgAngel3.jpg" alt="Picture" width="500px"/>
            <div class="kolom">
                <p class="deskripsi">SELAMAT DATANG DI PORTOFOLIO SAYA</p>
            </div>
        </section>
        
        <!-- untuk Profil-->
                    <section id="Profil">
                        <div class = "kolom">
                            <H2>PROFIL</H2>
                            <p> Nama : Angelica Priskila Trivena Rompas </p>
                            <p> Umur : 18 Tahun </p>
                            <p> NIM : 220211060003 </p>
                            <p> Hobi : Olahraga Bridge </p>
                            <p> Saya adalah mahasiswa aktif Jurusan Teknik Informatika Universitas Sam Ratulangi angkatan 2022. </p>
                            <hr>
                        </div>
                    </section>   

        <!-- untuk Galery-->
        <section id="Galery">
            <div class="kolom">
                <h2>GALERY</h2>
                <p>Ini adalah foto pertandingan olahraga bridge dalam event ASIAN GAMES </p>
                <img src="img/imgbridge1.jpg" height="300px" width="600px">
                <hr>
                <p>Partisipasi Mahasiswa Fakultas Teknik UNSRAT dalam event TELKOM INDONESIA OPEN 2023 </p>
                <img src="img/imgbridge2.jpg" height="300px" width="600px">
                <hr>
                <p>Pertandingan bridge yang dilaksanakan oleh UKM Bridge Fakultas Teknik Unsrat</p>
                <img src="img/imgbridge3.jpg" height="300px" width="600px">
                <hr>
            </div>
        </section>
        
        



<!-- Bagian Blog -->
<section id="Blog">
    <div class="kolom">
        <H2>BLOG</H2>
        <?php
        // Hubungkan ke database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "blog_data";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data dari database
        $sql = "SELECT title, url FROM article";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Tampilkan data sebagai link
            while($row = $result->fetch_assoc()) {
                echo "<p><a href='" . $row["url"] . "'>" . $row["title"] . "</a></p>";
            }
        } else {
            echo "0 hasil";
        }
        $conn->close();
        ?>
        <hr>
    </div>
</section>
    
    <!-- Bagian Contact -->
    <section id="Contact">
        <div class="kolom">
            <h2>CONTACT</h2>
            <p><b>Hubungi Saya</b></p>
            <a href="mailto:rompasangelica18@gmailcom">EMAIL ANGEL</a>
            <p>Whatsapp: 0813-4272-1847</p> 
            <hr>
        </div>
    </section>
    
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var menuLinks = document.querySelectorAll('.menu a');
        
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var targetSection = document.querySelector(link.getAttribute('href'));
                
                console.log('Target Section:', targetSection); // Periksa target section
                
                if (targetSection) {
                    window.scrollTo({
                        top: targetSection.offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });
    
    </script>
<script src = "midproject.js"></script>
</body>
</html>