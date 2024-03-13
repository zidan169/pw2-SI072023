<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pendaftaran</title>
    <!-- Load Bootstrap CSS from CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        body {
            background-color: blue;
            padding-top: 50px;
        }
        /* .container {
            max-width: 600px;
            margin: 0 auto;
        } */
        /* .card {
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 50px;
        } */
        h1 {
            text-align: center;
            margin-bottom: 30px;
        }
        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Hasil Pendaftaran</h1>
        <div class="card">
            <div class="card-body">
            <?php
                // Memeriksa apakah data telah dikirim
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Mendapatkan data dari formulir
                    $nama_lengkap = $_POST["nama_lengkap"];
                    $email = $_POST["email"];
                    $alamat = $_POST["alamat"];
                    $telepon = $_POST["telepon"];

                    // Memeriksa apakah data yang diterima kosong
                    if (!empty($nama_lengkap) && !empty($email) && !empty($alamat) && !empty($telepon)) {
                        // Menampilkan data yang diterima
                        echo "<p>Nama Lengkap: $nama_lengkap</p>";
                        echo "<p>Email: $email</p>";
                        echo "<p>Alamat: $alamat</p>";
                        echo "<p>Telepon: $telepon</p>";
                    } else {
                        // Menampilkan pesan menggunakan JavaScript
                        echo "<script>alert('Semua kolom harus diisi.'); window.location.href = 'tugas2.php';</script>";
                    }
                } else {
                    // Menampilkan pesan menggunakan JavaScript
                    echo "<script>alert('Tidak ada data yang dikirim.'); window.location.href = 'tugas2.php';</script>";
                }
            ?>
            </div>
        </div>
    </div>

</body>
</html>