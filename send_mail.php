<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pobranie adresu email z formularza
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Sprawdzenie czy adres email jest poprawny
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Parametry wiadomości
        $to = $email;  // adres odbiorcy
        $subject = "Powiadomienie o dostępności produktu";
        $message = "Witaj!\n\nProdukt, który Cię interesuje, ponownie będzie dostępny w naszym sklepie. Zapraszamy do odwiedzin!";
        $headers = "From: no-reply@wybornewypieki.pl\r\n";
        
        // Wysyłanie maila
        if (mail($to, $subject, $message, $headers)) {
            echo "Wiadomość została wysłana na adres: " . $email;
        } else {
            echo "Wystąpił błąd podczas wysyłania wiadomości. Spróbuj ponownie później.";
        }
    } else {
        echo "Nieprawidłowy adres email.";
    }
}
?>
