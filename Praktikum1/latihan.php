<?php 
// ini sebuah komentar
/* ini juga sebuah kopmentar */
# komentar pake simbol kres

echo " Hello World <br>";
echo 'Hello World <br>';
print_r("Ahmadin <br>");
var_dump("STT NURUL FIKRI");
echo "<hr>";


$nama = "Ahmadin";
$umur = 18;
$berat = 65.2;
$mahasiswa = true;

echo "Nama saya $nama <br>";
echo "Umur saya sekarang adalah $umur tahun <br>";
echo "Berat saya $berat kg <br>";
echo "<hr>";

// Membuat array
$programs = ["php", "javascript", "html", "css"];
echo $programs[0];
foreach ($programs as $program){
    echo $program;
}

?>