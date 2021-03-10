<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device, initial scale=1" />
    <meta http-equiv="X-UA-compatible" content="ie=edge" />
    <title> Menghitung Deret Fibonaci </title>

    <link rel="stylesheet" href="./PHP/stylephp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="content">
            <div class="col-lg-8 bg-info">
                <h2 style="color: indianred; text-align: center;"> DERET FIBONACI</h2>
                <hr>
                <form class="form-horizontal" action="">
                    <div class="form-group">
                    <td><input type="text" name="na" placeholder="Masukkan Suku Pertama" value="<?=isset($_POST['na']) ? $_POST['na']: ''?>"></td>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required placeholder="Input Bilangan Ke-1" name="bil1">
                        </div>
                    </div>
                    <div class="form-group">
                      <label><input type="text" name="nb" placeholder="Masukkan Suka Kedua" value="<?=isset($_POST['nb']) ? $_POST['nb']: ''?>"></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" required placeholder="Input Bilangan Ke-2" name="bil2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Bilangan :</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" placeholder="Masukkan Jumlah Bilangan" name="deret">
                        </div>
                    </div>

                    <input type="submit" value="Hasil">
                    <input type="reset" value="Kosongkan">
            </div>
            </form>
            <?php
                $angka_sebelumnya = $_GET['bil1'];
                $angka_sekarang = $_GET['bil2'];
                $deret = $_GET['deret'];

                echo '<br>';
                echo "Hasilnya Adalah : $angka_sebelumnya $angka_sekarang";

                for ($i = 1; $i <= $deret; $i++) 
                {
                $output = $angka_sekarang + $angka_sebelumnya;
                echo " $output";
                $angka_sebelumnya = $angka_sekarang;
                $angka_sekarang = $output;
                }
    ?>
        </div>

    </div>
    </div>
    </div>
</body>

</html>