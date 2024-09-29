<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie danych z formularza
    $username = htmlspecialchars($_POST['username']);
    $comment = htmlspecialchars($_POST['comment']);

    // Formatowanie komentarza
    $newComment = "Użytkownik: " . $username . "\nKomentarz: " . $comment . "\n------------------\n";

    // Zapisanie komentarza do pliku
    $file = fopen("comments.txt", "a");  // "a" oznacza dopisywanie do pliku
    fwrite($file, $newComment);
    fclose($file);

    // Przekierowanie z powrotem na stronę główną po dodaniu komentarza
    header("Location: index.php");
    exit();
} else {
    echo "Nieprawidłowe żądanie.";
}
?>
