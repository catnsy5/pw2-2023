<?php
    echo '<br><br>';
    $m_fruits = [
        ["id" => "1", "nama" => "Anggur", "warna" => "Ungu", "persediaan" => 30, "harga" => 25000, "deskripsi" => "Anggur dengan rasa manis asam"],
        ["id" => "2","nama" => "Mangga", "warna" => "Hijau", "persediaan" => 25, "harga" => 30000, "deskripsi" => "Mangga yang manis"],
        ["id" => "3","nama" => "Jeruk", "warna" => "Oren", "persediaan" => 15, "harga" => 20000, "deskripsi" => "Jeruk dengan rasa asam yang segar"],
        ["id" => "4","nama" => "Apel", "warna" => "Merah", "persediaan" => 20, "harga" => 18000, "deskripsi" => "Buah merah yang enak"],
        ["id" => "5","nama" => "Ceri", "warna" => "Merah", "persediaan" => 10, "harga" => 15000, "deskripsi" => "Buah kecil dengan rasa yang segar"]
      ];
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
              foreach ($m_fruits as $fruit){
                echo "<tr>";
                echo "<td>" . $fruit["id"] . "</td>";
                echo "<td>" . $fruit["nama"] . "</td>";
                echo "<td>" . $fruit["warna"] . "</td>";
                echo "<td>" . $fruit["persediaan"] . "</td>";
                echo "<td>" . $fruit["harga"] . "</td>";
                echo "<td>" . $fruit["deskripsi"] . "</td>";
                echo "</tr>";
              }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>