<?php
// Data pengunjung
$pengunjung = array(
    array('nama' => 'roni', 'usia' => 25),
    array('nama' => 'sudi', 'usia' => 30),
    array('nama' => 'toni', 'usia' => 28),
    array('nama' => 'jainal', 'usia' => 35),
    array('nama' => 'budi', 'usia' => 22)
);

// Menampilkan daftar pengunjung
echo "Daftar Pengunjung:<br>";
foreach ($pengunjung as $orang) {
    echo "Nama: " . $orang['nama'] . ", Usia: " . $orang['usia'] . " tahun<br>";
}

// Cek jika ada pengunjung yang masih di bawah usia 25 tahun
echo "<br>";
echo "Pengunjung di bawah 25 tahun:<br>";
$adaPengunjungMuda = false;
foreach ($pengunjung as $orang) {
    if ($orang['usia'] < 25) {
        echo "Nama: " . $orang['nama'] . ", Usia: " . $orang['usia'] . " tahun<br>";
        $adaPengunjungMuda = true;
    }
}

if (!$adaPengunjungMuda) {
    echo "Tidak ada pengunjung di bawah 20 tahun.";
}
?>