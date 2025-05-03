<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivi de demande</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
    body {
        font-family: 'Roboto', sans-serif;
        display: flex;
        flex-direction: column;
        min-height: 100vh;

    }
    .bg-rose-800 {
        background-color: #C72C41;
    }
</style>
<body>
    <header class="bg-rose-800 text-white py-4">
        <div class="container mx-auto px-6 flex justify-between items-center">
            <h1 class="text-2xl font-bold">Suivi de votre demande</h1>
            <nav class="space-x-4">
                <a href="/" class="text-white hover:text-gray-200">Accueil</a>
                <a href="{{ route('trackings.track') }}" class="text-white hover:text-gray-200">Suivi</a>
            </nav>
        </div>
    </header>
            
<div class="bg-gray-100 min-h-screen flex flex-col gap-8 items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Suivi de votre demande</h2>
    <p class="mt-2 text-center text[1.2em] text-gray-600">
            Entrez votre code de suivi et votre adresse e-mail pour suivre votre demande.
    </p>
        <div class="flex justify-center mt-4">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16">
        </div>
           

    <form method="POST" action="{{ route('trackings.search') }}" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-md w-full">
        @csrf
        <div class="max-w-md w-full space-y-8">
            <div class="mb-4">
                <label for="tracking_code" class="block text-gray-700 font-medium mb-2">Code de suivi</label>
                <input type="text" name="tracking_code" id="tracking_code" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-rose-300" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" name="email" id="email" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-rose-300" required>
            </div>
            <button type="submit" class="w-full bg-rose-800 text-white px-4 py-2 rounded hover:bg-rose-700 transition">
                Rechercher
            </button>
        </div>
    </form>

    @if (session('error'))
        <div class="mt-4 text-red-500 text-center">
            {{ session('error') }}
        </div>
    @endif
</div>
</body>
</html>