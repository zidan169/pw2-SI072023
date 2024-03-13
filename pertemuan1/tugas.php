<?php
  $numbers = [
    [
        "id" => "1",
        "nama" => "cipedak", 
        "warna" => "hijau",
        "stok" => "10",
        "harga" => "Rp.12.000",
        "deskripsi" => "buah seperti nangka",
    
    ],
    [
      "id" => "2",
      "nama" => "anggur", 
      "warna" => "ungu",
      "stok" => "5",
      "harga" => "Rp.25.000",
      "deskripsi" => "buah yang bermacam2 warna",
  
  ],
  [
    "id" => "3",
    "nama" => "durian", 
    "warna" => "hijau",
    "stok" => "8",
    "harga" => "Rp 10.0000",
    "deskripsi" => "buah yang berduri",

],
[
  "id" => "4",
  "nama" => "pisang", 
  "warna" => "kuning",
  "stok" => "3",
  "harga" => "Rp.15.000",
  "deskripsi" => "buah yang memiliki getah",

],
[
  "id" => "5",
  "nama" => "tomat", 
  "warna" => "merah",
  "stok" => "20",
  "harga" => "Rp 7.000",
  "deskripsi" => "buah yang memiliki rasa asam",

],

]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    </style>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Array Table Buah</title>
</head>
<body>
  <div class="container">
    <h1 class="text-center mt-5 mb-4">Daftar Buah</h1>
    <table class="table table-striped table-hover">
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Nama</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
          <th>Deskripsi</th>
        </tr>
      </thead>

      <tbody>
        <?php
         foreach ($numbers as $number)  {
        ?>
        <tr>            
            <td><?= $number["id"] ?></td>
            <td><?= $number["nama"] ?></td>
            <td><?= $number["warna"] ?></td>
            <td><?= $number["stok"] ?></td>
            <td><?= $number["harga"] ?></td>
            <td><?= $number["deskripsi"] ?></td>
        </tr>
        <?php
         }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>