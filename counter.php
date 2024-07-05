<?php
$counterFile = 'counter.txt';

// Jika file counter.txt tidak ada, buat file dengan nilai awal 0
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Baca nilai counter dari file
$count = file_get_contents($counterFile);

// Tingkatkan nilai counter
$count++;

// Simpan nilai counter yang baru ke file
file_put_contents($counterFile, $count);

// Tampilkan nilai counter
echo $count;
?>
