<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pemesanan barang</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-8">
                <!-- form -->
                <form method="POST" action="">
                    <div class="form-group row">
                         <label for="pembeli" class="col-4 col-form-label">Costamer</label> 
                    <div class="col-8">
                        <input id="pembeli" name="pembeli" type="text" class="form-control">
                     </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Pilih Prodak</label> 
                    <div class="col-8">
                     <div class="custom-control custom-radio custom-control-inline">
                        <input name="prodak" id="prodak_0" type="radio" class="custom-control-input" value="TV"> 
                        <label for="prodak_0" class="custom-control-label">TELEVISI</label>
                     </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="prodak" id="prodak_1" type="radio" class="custom-control-input" value="KULKAS"> 
                        <label for="prodak_1" class="custom-control-label">KULKAS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="prodak" id="prodak_2" type="radio" class="custom-control-input" value="MC"> 
                        <label for="prodak_2" class="custom-control-label">MESIN CUCI</label>
                    </div>
                    </div>
                    </div>
                    <div class="form-group row">
                         <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                    <div class="col-8">
                        <input id="jumlah" name="jumlah" type="text" class="form-control">
                    </div>
                    </div> 
                    <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-success">Submit</button>
                    </div>
                    </div>
                </form>
            </div>
            <div class="col-4">
                <!-- Daftar harga-->
                    <ul class="list-group">
                        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                        <li class="list-group-item">TV         : 4.200.000</li>
                        <li class="list-group-item">KULKAS     : 3.100.000</li>
                        <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                        <li class="list-group-item active" aria-current="true">Daftar Harga</li>
                    </ul>
            </div>
        </div>
            
            
        <?php if( isset($_POST['submit'])): ?>

            Nama Costamer : <?= $_POST['pembeli']?>
            <br>
            Produk Pilihan : <?= $_POST['prodak']?>
            <br>
            Jumlah barang : <?= $_POST['jumlah']?>
        <br>

            <?php
                if($_POST['prodak']=="TV"&& $_POST['jumlah']>=1){
                    $harga=4200000*$_POST['jumlah'];
                    echo 'Total Harga : '. number_format($harga,0,".",".");

                }elseif($_POST['prodak']== "KULKAS"&& $_POST['jumlah']>=1){
                    $harga=3100000*$_POST['jumlah'];
                    echo 'Total Harga : '. number_format($harga,0,".",".");

                }elseif($_POST['prodak']=="MC"&& $_POST['jumlah']>=1){
                    $harga =3800000*$_POST['jumlah'];
                    echo 'Total Harga : '. number_format($harga,0,".",".");

                }
        


            ?>


        <?php endif ?>

    </div>
</body>
</html>