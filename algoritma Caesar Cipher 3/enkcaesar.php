<?php
// Mengambil nilai kalimat dan kunci dari parameter GET
$kalimat = $_GET["kata"];
$key = $_GET["key"];

// Proses enkripsi menggunakan metode Caesar Cipher dengan kunci tertentu
for ($i = 0; $i < strlen($kalimat); $i++) {
    // Mengambil nilai ASCII dari setiap karakter dalam teks
    $kode[$i] = ord($kalimat[$i]);
    // Melakukan operasi enkripsi Caesar Cipher dengan kunci
    $b[$i] = ($kode[$i] + $key) % 256;
    // Mengonversi kembali ke karakter setelah proses enkripsi
    $c[$i] = chr($b[$i]);
}

// Menampilkan kalimat asli
echo "Kalimat ASLI : ";
for ($i = 0; $i < strlen($kalimat); $i++) {
    echo $kalimat[$i];
}
echo "<br>";

// Menampilkan hasil enkripsi
echo "Hasil enkripsi =";
$hsl = '';
for ($i = 0; $i < strlen($kalimat); $i++) {
    echo $c[$i];
    $hsl = $hsl . $c[$i];
}
echo "<br>";

// Menyimpan data ke dalam file enkripsi.txt
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);
fclose($fp);
?>
