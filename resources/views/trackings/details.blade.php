<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details de la reservation</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
    }
    .bg-rose-800 {
        background-color: #C72C41;
    }
    .bg-rose-50 {
        background-color: #FEE2E2;
    }
    .text-rose-800 {
        color: #C72C41;
    }
    .text-rose-500 {
        color: #FBBF24;
    }

    </style>

<body>
    <header class="bg-rose-800 text-white py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Détails de la réservation</h1>
            <nav class="space-x-4">
                <a href="/" class="text-white hover:text-gray-200">Accueil</a>
                <a href="{{ route('trackings.track') }}" class="text-white hover:text-gray-200">Suivi</a>
            </nav>
        </div>
    </header>

    
<div class="container mx-auto px-6 py-8">
    <h1 class="text-3xl font-bold text-center text-rose-800 mb-6">Détails de la Réservation</h1>

    <div class="bg-white p-6 rounded-lg shadow-md max-w-md mx-auto">
        <p><strong>Nom :</strong> {{ $reservation->name }}</p>
        <p><strong>Email :</strong> {{ $reservation->email }}</p>
        <p><strong>Téléphone :</strong> {{ $reservation->phone }}</p>
        <p><strong>Date :</strong> {{ $reservation->date }}</p>
        <p><strong>Heure :</strong> {{ $reservation->time }}</p>
        <p><strong>Nombre de personnes :</strong> {{ $reservation->guests }}</p>
        <p><strong>Statut :</strong> {{ $reservation->status }}</p>
        <p><strong>Code de suivi :</strong> {{ $reservation->tracking_code }}</p>
    </div>
</div>


</body>
</html>