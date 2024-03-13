<?php

// //
// //associaive array
// //multidimensional array

// $fruits =  ["mangga","anggur","cipedak"];

// foreach ($fruits as $fruit){
//     echo $fruit;
//     echo '<br>';
// } 


// $dinos = [
//     "dinoName" => "tricera",
//     "dinoAge"=> 300,
//     "simarried"=> false
// ];

//     foreach ($dinos as $dino) {
//         echo $dino;
//         echo'<br>';
//     }

// $dinos =[
//     [
//         "dinoName" => "tricera",
//         "dinoAge"=> 300,
//     ],
//     [
//         "dinoName" => "rex",
//         "dinoAge"=> 500,
//     ],
//     [
//         "dinoName" => "ptera",
//         "dinoAge"=> 250,
//     ],
    
// ];
//     foreach ($dinos as $dino) {
//         echo $dino["dinoName"] . " - ". $dino["dinoAge"] . "tahun";
//         echo "<br>";
//     }
// // ?>


<?php
  $buah2 =[
        [
            "buahName" => "cipedak",
            "buahcolor"=> green,
            "stokbuah" => 2,
            "hargabuah"=> Rp.12.0000,
            "deskripsi"=> buah seperti nangka,
        ],
        [
            "buahName" => "alpukat",
            "buahcolor"=> green,
            "stokbuah" => 3,
            "hargabuah"=> Rp.8.0000,
            "deskripsi"=> buah berbiji,
        ],
        [
            "buahName" => "anggur",
            "buahcolor"=> ungu,
            "stokbuah" => 1,
            "hargabuah"=> Rp.15.0000,
            "deskripsi"=> buah dengan banyak varian,
        ],
        [
            "buahName" => "durian",
            "buahcolor"=> kuning,
            "stokbuah" => 2,
            "hargabuah"=> Rp.25.0000,
            "deskripsi"=> buah yang berduri,
        ],
        [
            "buahName" => "tomat",
            "buahcolor"=> merah,
            "stokbuah" => 5,
            "hargabuah"=> Rp.5.0000,
            "deskripsi"=> buah dengan rasa asam,
        ],
        
    ];
        foreach ($buah2 as $buah) {
            echo $buah["buahName"] . " - ". $buah["buahcolor"] . $buah["stokbuah"] 
            echo "<br>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
          /* Task 2
            Tampilkan data array tersebut disini dan buatlah menjadi sebuah table
          */
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>