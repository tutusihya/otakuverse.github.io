<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Memeriksa apakah data 'anime' ada dan tidak kosong
    if (isset($_POST['anime']) && !empty($_POST['anime'])) {
        $anime = $_POST['anime'];
        // Menambahkan data ke file favorites.txt
        file_put_contents('favorites.txt', $anime . PHP_EOL, FILE_APPEND);
    } else {
        // Menangani kasus di mana data 'anime' tidak ada atau kosong
        echo "No anime data provided.";
    }
} else {
    // Menangani kasus di mana request bukan POST
    echo "Invalid request method.";
}
?>
