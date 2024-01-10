<?php

// Fungsi untuk menampilkan menu makanan
function tampilkanMenuMakanan($jenis, $jumlah) {
    echo "Menu $jenis:\n";
    
    for ($i = 1; $i <= $jumlah; $i++) {
        echo "$i. " . generateMakanan($jenis) . "\n";
    }
}

// Fungsi untuk menghasilkan nama makanan berdasarkan jenis
function generateMakanan($jenis) {
    $makanan = [];

    if ($jenis == 'Sayuran') {
        $makanan = ['Broccoli', 'Wortel', 'Bayam'];
    } elseif ($jenis == 'Protein') {
        $makanan = ['Ayam panggang', 'Ikan bakar', 'Tahu goreng'];
    } elseif ($jenis == 'Buah') {
        $makanan = ['Apel', 'Pisang', 'Jeruk'];
    } else {
        return 'Jenis makanan tidak valid.';
    }

    // Mengembalikan nama makanan secara acak
    return $makanan[array_rand($makanan)];
}

// Memanggil fungsi untuk menampilkan menu makanan dengan perulangan
tampilkanMenuMakanan('Sayuran', 3);
tampilkanMenuMakanan('Protein', 3);
tampilkanMenuMakanan('Buah', 3);

?>
