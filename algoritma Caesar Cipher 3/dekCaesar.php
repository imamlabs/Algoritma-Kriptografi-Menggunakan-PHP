<?php
// Mengambil nilai kunci dari parameter GET
$key = $_GET["key"];
// Nama file yang akan dienkripsi
$nmfile = "enkripsi.txt";
// Membuka file untuk dibaca
$fp = fopen($nmfile, "r");
// Membaca isi file
$isi = fread($fp, filesize($nmfile));

// Proses dekripsi menggunakan metode Caesar Cipher dengan kunci tertentu
for ($i = 0; $i < strlen($isi); $i++) {
    // Mengambil nilai ASCII dari setiap karakter dalam teks
    $kode[$i] = ord($isi[$i]);
    // Melakukan operasi dekripsi Caesar Cipher dengan kunci
    $b[$i] = ($kode[$i] - $key) % 256;
    // Mengonversi kembali ke karakter setelah proses dekripsi
    $c[$i] = chr($b[$i]);
}

// Menampilkan kalimat ciphertext
echo "Kalimat ciphertext : ";
for ($i = 0; $i < strlen($isi); $i++) {
    echo $isi[$i];
}
echo "<br>";

// Menampilkan hasil dekripsi
echo "Hasil dekripsi =";
for ($i = 0; $i < strlen($isi); $i++) {
    echo $c[$i];
}
echo "<br>";
?>
