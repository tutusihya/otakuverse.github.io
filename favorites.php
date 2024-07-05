<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favorites</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Favorites</h1>
        <nav>
            <a href="index.html">Home</a>
        </nav>
    </header>
    <main>
        <section id="favorites-list">
            <?php
            if (file_exists('favorites.txt')) {
                $favorites = file('favorites.txt', FILE_IGNORE_NEW_LINES);
                foreach ($favorites as $favorite) {
                    echo "<div class='anime-item'><h3>" . htmlspecialchars($favorite) . "</h3></div>";
                }
            } else {
                echo "<p>No favorites yet.</p>";
            }
            ?>
        </section>
    </main>
    <footer>
        <span id="hit-counter"></span>
    </footer>
    <script src="script.js"></script>
</body>
</html>