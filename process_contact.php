<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
&lt;?php // process_contact.php  if ($_SERVER["REQUEST_METHOD"] == "POST") {      // Eingaben aus dem Formular sicher bereinigen     $name = htmlspecialchars(strip_tags(trim($_POST["name"])));     $email = htmlspecialchars(strip_tags(trim($_POST["email"])));     $message = htmlspecialchars(strip_tags(trim($_POST["message"])));      // Konfiguriere die E-Mail-Empfangsadresse     $to = "drawtimes@gmx.de"; // &lt;-- Hier deine E-Mail-Adresse eintragen!          // Betreff und Nachricht zusammenbauen     $subject = "Neue Kontaktformular-Nachricht von " . $name;     $body = "Name: " . $name . "\n";     $body .= "E-Mail: " . $email . "\n\n";     $body .= "Nachricht:\n" . $message;      // E-Mail-Header festlegen     $headers = "From: " . $email . "\r\n";     $headers .= "Reply-To: " . $email . "\r\n";      // E-Mail senden und Rückmeldung geben     if (mail($to, $subject, $body, $headers)) {         echo "Danke, Ihre Nachricht wurde gesendet.";     } else {         echo "Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.";     } } else {     echo "Ungültige Anfrage."; } ?&gt;
</body>
</html>