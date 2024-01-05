<?php

// Fungsi untuk mengenkripsi teks menggunakan algoritma Caesar Cipher
function encrypt($plaintext, $shift) {
    $ciphertext = "";
    $length = strlen($plaintext);   
    // Iterasi melalui setiap karakter dalam teks
    for ($i = 0; $i < $length; $i++) {
        // Memeriksa apakah karakter adalah huruf alfabet
        if (ctype_alpha($plaintext[$i])) {
            // Mengambil nilai ASCII dari huruf besar atau kecil pertama
            $ascii = ord(ctype_upper($plaintext[$i]) ? 'A' : 'a');
            // Menghitung offset untuk menggeser karakter
            $offset = ((ord($plaintext[$i]) - $ascii + $shift) % 26);
            // Mengonversi kembali ke karakter setelah digeser
            $ciphertext .= chr($offset + $ascii);
        } else {
            // Menambahkan karakter langsung jika bukan huruf alfabet
            $ciphertext .= $plaintext[$i];
        }
    }
    return $ciphertext;
}

// Fungsi untuk mendekripsi teks menggunakan algoritma Caesar Cipher
function decrypt($ciphertext, $shift) {
    // Menggunakan fungsi encrypt dengan shift yang berlawanan untuk mendekripsi
    return encrypt($ciphertext, 26 - $shift);
}

// Teks yang akan dienkripsi
$plaintext = "Hello, World!";
// Jumlah pergeseran (shift) untuk enkripsi
$shift = 3;
// Melakukan enkripsi teks
$ciphertext = encrypt($plaintext, $shift);
// Melakukan dekripsi teks
$decryptedText = decrypt($ciphertext, $shift);

// Menampilkan hasil
echo "Plaintext: " . $plaintext . "<br>";
echo "Shift: " . $shift . "<br>";
echo "Ciphertext: " . $ciphertext . "<br>";
echo "Decrypted Text: " . $decryptedText;

?>
