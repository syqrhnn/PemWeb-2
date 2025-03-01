<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belanja</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>

            .container {
                margin: 30px;
               display: flex;
               justify-content: space-between;
            }

            .form-belanja {
                width: 60%;
            }

            .daftar-harga {
                width: 20%;
            }

        </style>

    </head>
    <body>

        <div class="container">

            <div class="form-belanja">
                <h3>Belanja Online</h3>
                <form action="belanja.php" method="post">
                    <div class="form-group row">
                        <label for="customer" class="col-3 col-form-label">Customer</label> 
                        <div class="col-9">
                        <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-3">Pilih Prooduk</label> 
                        <div class="col-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_0" type="radio" class="custom-control-input" value="tv"> 
                            <label for="radio_0" class="custom-control-label">TV</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_1" type="radio" class="custom-control-input" value="kulkas"> 
                            <label for="radio_1" class="custom-control-label">KULKAS</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="radio" id="radio_2" type="radio" class="custom-control-input" value="mesin"> 
                            <label for="radio_2" class="custom-control-label">MESIN CUCI</label>
                        </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-3 col-form-label">Jumlah</label> 
                        <div class="col-9">
                        <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-3 col-9">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="daftar-harga">
                <h3>Daftar Harga</h3>
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Produk</th>
                        <th>Harga</th>
                    </tr>
                    <tr>
                        <td>TV</td>
                        <td>4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas</td>
                        <td>3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci</td>
                        <td>3.800.000</td>
                    </tr>
                </table>
            </div>

        </div>
        
        <?php

            $customer = $_POST['customer'];
            $produk = $_POST['radio'];
            $jumlah = $_POST['jumlah'];

            switch ($produk) {
                case 'tv':
                    $harga = 4200000;
                    break;
                case 'kulkas':
                    $harga = 3100000;
                    break;
                case 'mesin':
                    $harga = 3800000;
                    break;
                default:
                    $harga = 0;
                    break;
            }

            $total = $harga * $jumlah;

            echo "Nama Customer : $customer <br>";
            echo "Produk Pilihan : $produk <br>";
            echo "Jumlah Beli : $jumlah <br>";
            echo "Total Harga : Rp. $total,- <br>";

        ?>
        
    </body>
</html>