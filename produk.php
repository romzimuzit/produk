<?php
// ================================
// PROSES DATA FORM
// ================================

// cek apakah tombol simpan ditekan
if (isset($_POST['simpan'])) {

    // deklarasi variabel
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    // validasi sederhana (tidak boleh kosong)
    if ($nama == "" || $harga == "" || $deskripsi == "") {
        echo "<p style='color:red;'>Data tidak boleh kosong!</p>";
    } else {
        // contoh output (sementara)
        echo "<p style='color:green;'>Produk berhasil disimpan</p>";
        echo "Nama Produk: " . $nama . "<br>";
        echo "Harga: " . $harga . "<br>";
        echo "Deskripsi: " . $deskripsi;
    }
}
?>
