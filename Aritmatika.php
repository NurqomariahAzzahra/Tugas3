<!DOCTYPE html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device, initial scale=1" />
    <meta http-equiv="X-UA-compatible" content="ie=edge" />
    <title> Menghitung Barisan Aritmatika </title>

    <link rel="stylesheet" href="./PHP/stylephp.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div class="content">
            <div class="col-lg-8 bg-info">
                <h2 style="color: indianred; text-align: center;"> BARISAN ARITMATIKA</h2>
                <hr>
                <form class="form-horizontal" action="">
                    <div class="form-group">
                        <label class="control-label col-sm-3">Bilangan Ke-1 :</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" required placeholder="Input Bilangan Ke-1" name="bil1">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Beda :</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" required placeholder="Input Bilangan Ke-2" name="bil2">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3">Jumlah Bilangan :</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" placeholder="Masukkan Jumlah Bilangan" name="suku">
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Hasil"></input>

            </div>
            </form>
            <?php
            if (isset ($_POST['submit'])) 
            {
                $awal= $_GET['bil1'];
                $beda = $_GET['bil2'];
                $n = $_GET['suku'];

                $output = $awal + ($n - 1)* $beda;
                echo "<br> Suku ke- $n Barisan Aritmatika Tersebut Adalah $output  <br>" ;
                
                $hasil= $awal + $beda;
                echo "<br> Baris Aritmatika : $awal $hasil";

                for ($i=$awal; $i<=8; $i++)
                {

                $output = $hasil+$beda;
                echo " $output";
                
                $awal = $hasil;
                $hasil = $output;
                }
             }  
    ?>
        </div>

    </div>
    </div>
    </div>
</body>

</html>