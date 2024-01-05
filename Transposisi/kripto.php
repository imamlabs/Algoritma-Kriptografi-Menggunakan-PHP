<?php 
// Fungsi untuk mengenkripsi pesan menggunakan metode transposisi sederhana
function pesanEnkripsi($pesan, $kunci){
    $panjangKunci = strlen($kunci);
    $pesan = str_replace(' ','',$pesan); // Menghapus spasi dari pesan
    $panjangPesan = strlen($pesan);
    $textEnkripsi='';
    
    // Melakukan iterasi sepanjang kunci
    for ($kol=0; $kol<$panjangKunci; $kol++){
        $pointer = $kol;
        
        // Melakukan iterasi melalui pesan dengan langkah sepanjang kunci
        while($pointer < $panjangPesan){
            $textEnkripsi .= $pesan[$pointer];
            $pointer += $panjangKunci;
        }
    }
    
    return $textEnkripsi;
}

// Teks pesan yang akan dienkripsi
$plaintext = 'udin sedunia';
// Kunci untuk metode transposisi
$kunci = 'ab';
// Melakukan enkripsi
$hasilCipher = pesanEnkripsi($plaintext, $kunci);

// Menampilkan teks pesan dan hasil enkripsi
echo '<h1>Plaintext ='.$plaintext.'</h1>';
echo '<h1>Chipertext ='.$hasilCipher.'</h1>';
?>
