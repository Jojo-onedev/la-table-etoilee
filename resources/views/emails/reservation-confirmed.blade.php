<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de réservation</title>
</head>
<body>
    <h1>Bonjour {{ $reservation->name }},</h1>
    <p>Merci d'avoir réservé une table à <strong>La Table Étoilée</strong>.</p>
    <p>Voici les détails de votre réservation :</p>
    <ul>
        <li><strong>Date :</strong> {{ $reservation->date }}</li>
        <li><strong>Heure :</strong> {{ $reservation->time }}</li>
        <li><strong>Nombre de personnes :</strong> {{ $reservation->guests }}</li>
    </ul>
    <p>Nous avons hâte de vous accueillir !</p>
    <p>Cordialement,<br>La Table Étoilée</p>
</body>
</html>