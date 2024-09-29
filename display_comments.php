<?php
// Sprawdzenie czy plik z komentarzami istnieje
$filename = "comments.txt";
if (file_exists($filename)) {
    // Odczytanie zawartości pliku
    $comments = file_get_contents($filename);
    if ($comments) {
        // Wyświetlenie komentarzy
        echo nl2br($comments);  // nl2br konwertuje nowe linie na znaczniki <br>
    } else {
        echo "Brak komentarzy do wyświetlenia.";
    }
} else {
    echo "Brak komentarzy do wyświetlenia.";
}
?>
