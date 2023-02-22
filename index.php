<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2 | Pem. Web</title>
    <style>
        body {
            background-image: url(image/cover.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 {
            font-size: 30px;
            text-align: center;
        }
        table {
            font-size: 20px;
            text-align: center;
        }
    </style>
</head>

<body>
    <br><br><br><br>
    <h1>Menentukan Jenis Bilangan</h1>
    <br><br>
    <form>
        <table cellpadding=3 cellspacing=3 align="center">
            <tr>
                <td><b>Input Nilai</b></td>
            </tr>
            <tr>
                <td><input type="number" name="nilai" placeholder="Masukan Angka...." /></td>
            </tr>
            <tr>
                <td></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Hitung"/><br><br></td>
            </tr>
        </table>
    </form>
</body>

<?php
$a = @$_GET["nilai"];

if ($a > 0){
    echo "<center>$a merupakan bilangan positif <br>dan </center>";
}elseif ($a == 0){
    echo "<center>$a merupakan bilangan 0 <br>dan </center>";
}else{
    echo "<center>$a merupakan bilangan negatif <br>dan </center>";
}

if ($a %2 == 0){
    echo "<center>$a termasuk bilangan genap<br><br></center>";
}else{
    echo "<center>$a termasuk bilangan ganjil<br><br></center>";
}
?>
</html>