
<?php
// Fungsi untuk menghitung harga setelah diskon
function hitungDiskon($hargaAwal, $persentaseDiskon) {
    $diskon = $hargaAwal * ($persentaseDiskon / 100);
    $hargaSetelahDiskon = $hargaAwal - $diskon;
    return $hargaSetelahDiskon;
}

// Cek apakah form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validasi input
    $hargaAwal = isset($_POST['harga_awal']) ? floatval($_POST['harga_awal']) : 0;
    $persentaseDiskon = isset($_POST['persentase_diskon']) ? floatval($_POST['persentase_diskon']) : 0;

    // Hitung harga setelah diskon
    $hargaSetelahDiskon = hitungDiskon($hargaAwal, $persentaseDiskon);

    // Output
    echo "Harga awal: Rp " . number_format($hargaAwal, 0, ',', '.') . "<br>";
    echo "Persentase diskon: " . $persentaseDiskon . "%<br>";
    echo "Harga setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.');
}
?>
