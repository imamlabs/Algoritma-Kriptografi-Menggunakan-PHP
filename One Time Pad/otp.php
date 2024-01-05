<?php 
// Fungsi untuk menghasilkan kunci acak sepanjang $length
function generateKey($length){
   $key = '';
   for($i = 0; $i < $length; $i++){
    $key .= chr(rand(65, 90)); // Menghasilkan karakter acak dari tabel ASCII huruf besar
   }
   return $key;
} 

// Fungsi untuk mengenkripsi pesan menggunakan kunci
function encrypt($message, $key){
    $encrypted = '';
    $length = strlen($message);
    for($i = 0; $i < $length; $i++){
        // Menghitung nilai karakter pesan dan kunci
        $messageChar = ord($message[$i]) - ord('A');
        $keyChar = (ord($key[$i]) + rand(1, 10)) - ord('A'); // Menambahkan nilai acak pada kunci
        // Menghitung karakter terenkripsi
        $encryptedChar = ($messageChar + $keyChar) % 26;
        // Mengonversi kembali ke karakter setelah proses enkripsi
        $encrypted .= chr($encryptedChar + ord('A'));
    }
    return $encrypted;
}

// Teks pesan yang akan dienkripsi
$message = 'ADI';
$length = strlen($message);
// Menghasilkan kunci dengan panjang yang sama dengan panjang pesan
$key = generateKey($length);

// Menampilkan teks pesan, kunci yang dihasilkan, dan hasil enkripsi
echo 'Plainteksnya adalah ' . $message . '<br>';
echo 'Kunci Generate adalah ' . $key . '<br>';
echo 'Hasil enkripsinya adalah ' . encrypt($message, $key);
?>
