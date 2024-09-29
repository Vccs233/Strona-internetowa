<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekcja komentarzy</title>
</head>
<body>

    <h1>Sekcja komentarzy</h1>

    <!-- Formularz dodawania komentarza -->
    <form action="comments.php" method="post">
        <label for="username">Nazwa użytkownika:</label><br>
        <input type="text" id="username" name="username" required><br><br>

        <label for="comment">Komentarz:</label><br>
        <textarea id="comment" name="comment" rows="5" cols="30" required></textarea><br><br>

        <button type="submit">Dodaj komentarz</button>
    </form>

    <h2>Wszystkie komentarze:</h2>

    <!-- Sekcja, w której będą wyświetlane komentarze -->
    <?php
        include 'display_comments.php';
    ?>

</body>
</html>
