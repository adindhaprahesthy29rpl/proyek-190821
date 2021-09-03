<!doctype html>
<html lang="en">
  <head>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">	
      <link rel="stylesheet" type = "text/css" href = "styletgs1.css">
      <title>DISTO CELLULAR</title>
  </head>

  <body align="center">
                <div class="px-1 py-2 my-2 text-center">
                <h2 class="display-5 fw-bold">DISTO CELLULAR</h2>
                <div class="px-1 py-2 my-2 text-center">
                <h8 class="lead mb-4">Jl. Menak Agung, Bangsalan, Sambit, Kabupaten Ponorogo, Jawa Timur</h8>
        
        </div>
        </div>


    <?php
    $dataProduk = array(
        //Nama HP, Merk HP, Harga, Status (true/false)
        array("Galaxy S21", "Samsung", 19000000, true),
        array("Galaxy A71", "Samsung", 6999000, false),
        array("iPhone 12 Pro Max", "Apple", 20999000, true),
        array("iPhone 12 Mini", "Apple", 10999000, false),
    );

    $n = count($dataProduk);
    echo "<div class=row>";
    for($i=0; $i<$n; $i++){
    echo "<div class = 'box1 col-md-3'>";
    echo $dataProduk[$i][1]."<br>";
    echo $dataProduk[$i][0]."<br>";
    echo "Rp. " .$dataProduk[$i][2]."<br>";
    $stok = $dataProduk[$i][3];
    if($stok == true){
        echo "Stok Tersedia";
        echo "<br></br>";
        echo "<button>Order</button>";
    }else{
        echo "Stok Habis";
    }
    echo "</div> <br>";
    }
    echo "</div>";
    ?>
</body>
</html>