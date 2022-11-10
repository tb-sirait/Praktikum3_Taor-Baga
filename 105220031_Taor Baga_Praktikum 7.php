<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>105220031_TaorBaga</title>
    <style>
        #sheesh{
            background-color = green;
        }
    </style>
</head>
<?php
    $berat = array(1,5,2,7,1);
    $barang = array("Tepung", "Gula", "Pisang", "Terigu", "Mantan");
    $stokbarang = array(20,25,20,30,0);
    $konversi_gr = 1000;
    $konversi_mg = 1000000;
    $tabelku = array(
        array("1", $barang[0], ($berat[0]), ($berat[0]*$konversi_gr), ($berat[0]*$konversi_mg), $stokbarang[0]),
        array("2", $barang[1], ($berat[1]), ($berat[1]*$konversi_gr), ($berat[1]*$konversi_mg), $stokbarang[1]),
        array("3", $barang[2], ($berat[2]), ($berat[2]*$konversi_gr), ($berat[2]*$konversi_mg), $stokbarang[2]),
        array("4", $barang[3], ($berat[3]), ($berat[3]*$konversi_gr), ($berat[3]*$konversi_mg), $stokbarang[3]),
        array("5", $barang[4], ($berat[4]), ($berat[4]*$konversi_gr), ($berat[4]*$konversi_mg), $stokbarang[4])
    );
?>
<body>
    <h1> Konversi barang pak cepak jeger</h1>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>Nama Barang</th>
            <th>Berat(kg)</th>
            <th>Berat(gr)</th>
            <th>Berat(mg)</th>
            <th>stock</th>
        </tr>
        <tr>
            <td><?php echo $tabelku[0][0]; ?></td>
            <td><?php echo $tabelku[0][1]; ?></td>
            <td><?php echo $tabelku[0][2]; ?></td>
            <td><?php echo $tabelku[0][3]; ?></td>
            <td><?php echo $tabelku[0][4]; ?></td>
            <td><?php echo $tabelku[0][5]; ?></td>
        </tr>
        <tr>
            <td><?php echo $tabelku[1][0]; ?></td>
            <td><?php echo $tabelku[1][1]; ?></td>
            <td><?php echo $tabelku[1][2]; ?></td>
            <td><?php echo $tabelku[1][3]; ?></td>
            <td><?php echo $tabelku[1][4]; ?></td>
            <td><?php echo $tabelku[1][5]; ?></td>
        </tr>
        <tr>
            <td><?php echo $tabelku[2][0]; ?></td>
            <td><?php echo $tabelku[2][1]; ?></td>
            <td><?php echo $tabelku[2][2]; ?></td>
            <td><?php echo $tabelku[2][3]; ?></td>
            <td><?php echo $tabelku[2][4]; ?></td>
            <td><?php echo $tabelku[2][5]; ?></td>
        </tr>
        <tr>
            <td><?php echo $tabelku[3][0]; ?></td>
            <td><?php echo $tabelku[3][1]; ?></td>
            <td><?php echo $tabelku[3][2]; ?></td>
            <td><?php echo $tabelku[3][3]; ?></td>
            <td><?php echo $tabelku[3][4]; ?></td>
            <td><?php echo $tabelku[3][5]; ?></td>
        </tr>
        <tr class = "a">
            <td><?php echo $tabelku[4][0]; ?></td>
            <td><?php echo $tabelku[4][1]; ?></td>
            <td><?php echo $tabelku[4][2]; ?></td>
            <td><?php echo $tabelku[4][3]; ?></td>
            <td><?php echo $tabelku[4][4]; ?></td>
            <td><?php echo $tabelku[4][5]; ?></td>
        </tr>
        <tr>
            <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $namabarangnya = $_POST['namabarangs'];
                    $beratbarangnya = $_POST['berats'];
                    $stoknya = $_POST['stokbrg'];
                    if (empty($namabarangnya)) {
                        echo "";
                    } 
                    else {
                        echo "<td> 6 </td>";
                        echo "<td> $namabarangnya</td>";
                        echo "<td> $beratbarangnya</td>";
                        echo "<td> ($beratbarangnya)*($konversi_gr)</td>";
                        echo "<td> ($beratbarangnya*$konversi_mg)</td>";
                        echo "<td> $stoknya</td>";
                    }
                }
            ?>
        </tr>
        
    </table>
    <br>
    <h3>tambah barang</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method = "POST" id="sheesh">
        <label for="namabarangs">Nama barang: </label>
        <br><input type="text" name="namabarangs"> <br>
        <label for="berats">Berat Barang (KG): </label>
        <br><input type="text" name="berats"> <br>
        <label for="stokbrg">Stock: </label>
        <br><input type="text" name = "stokbrg"> <br>
        <input type="submit"><br>
    </form>
</body>
</html>
