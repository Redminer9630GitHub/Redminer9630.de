<?php
// Sicherstellen, dass nur POST-Anfragen akzeptiert werden
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = "redminer9630@gmail.com";
    $subject = "Redminer9630.de Statusbericht " . date("d.m.Y");
    $body = "Statusbericht für alle Websites:\n\n";
    $body .= "- Website 1: OK\n";
    $body .= "- Website 2: OK\n";

    $headers = "From: noreply@redminer9630.de"; // Die "From"-Adresse sollte gültig sein, um Spam-Filter zu vermeiden.

    // E-Mail senden
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(["status" => "success"]);
    } else {
        echo json_encode(["status" => "error"]);
    }
} else {
    echo json_encode(["status" => "invalid_request"]);
}
?>
