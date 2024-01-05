<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // Deklarasi fungsi untuk enkripsi menggunakan Caesar Cipher
        function enkripsi($plaintext, $shift){
            // Inisialisasi variabel ciphertext
            $ciphertext = "";
            // Mendapatkan panjang teks plaintext
            $length = strlen($plaintext);
            
            // Iterasi melalui setiap karakter dalam teks plaintext
            for ($i = 0; $i < $length; $i++){
                // Memeriksa apakah karakter adalah huruf alfabet
                if (ctype_alpha($plaintext[$i])){
                    // Mengambil nilai ASCII dari huruf besar atau kecil pertama
                    $ascii = ord(ctype_upper($plaintext[$i]) ? 'A' : 'a');
                    // Menghitung offset untuk menggeser karakter
                    $offset = (ord($plaintext[$i]) - $ascii + $shift) % 26;
                    // Mengonversi kembali ke karakter setelah digeser dan menambahkannya ke ciphertext
                    $ciphertext .= chr($offset + $ascii);
                } else {
                    // Menambahkan karakter langsung jika bukan huruf alfabet
                    $ciphertext .= $plaintext[$i];
                }
            }
            // Mengembalikan teks terenkripsi
            return $ciphertext;
        }

        // Deklarasi fungsi untuk dekripsi menggunakan Caesar Cipher
        function dekripsi($ciphertext, $shift){
            // Menggunakan fungsi enkripsi dengan shift yang berlawanan untuk mendekripsi
            return enkripsi($ciphertext, 26 - $shift);
        }

        // Teks yang akan dienkripsi
        $plaintext = "abc";
        // Jumlah pergeseran (shift) untuk enkripsi
        $shift = 1;
        // Melakukan enkripsi teks
        $ciphertext = enkripsi($plaintext, $shift);

        // Menampilkan teks asli, kunci, dan teks terenkripsi
        echo "Plaintextnya adalah " . $plaintext;
        echo '<br>';
        echo "Key nya adalah " . $shift;
        echo '<br>';
        echo "Hasil enkripsi substitusinya adalah " . $ciphertext;
        echo "<br>";
        // Menampilkan hasil dekripsi
        echo dekripsi($ciphertext, $shift);
        ?>
    </body>
</html>
