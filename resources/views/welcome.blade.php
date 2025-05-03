<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Table Étoilée - Restaurant Gastronomique</title>
    <!-- Font Awesome pour les icônes -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<style>
    .carou{
        width: 100%;
        height: auto;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .caroussel{
        width: 100%;
        height: auto;
      
    }

    #accueil{
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
        /* background-image: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); */
        background-size: cover;
        background-position: center;
    }
</style>
<body class="font-sans bg-ivory text-gray-800">
    
    <!-- Barre de navigation -->
    <nav class="fixed w-full bg-white bg-opacity-70 shadow-sm z-50 backdrop-blur-sm">
        <div class="container mx-auto px-6 py-4">
            <div class="flex justify-between items-center">
                <div class="text-2xl font-serif font-bold text-rose-800">
                    La Table Étoilée
                </div>
                <div class="md:flex space-x-8 menu-normal">
                    <a href="#accueil" class="text-gray-700 hover:text-rose-800 transition">Accueil</a>
                    <a href="#histoire" class="text-gray-700 hover:text-rose-800 transition">Notre Histoire</a>
                    <a href="#specialites" class="text-gray-700 hover:text-rose-800 transition">Nos Spécialités</a>
                    <a href="#temoignages" class="text-gray-700 hover:text-rose-800 transition">Témoignages</a>
                    <a href="#contact" class="text-gray-700 hover:text-rose-800 transition">Contact</a>
                </div>
                <button class="md:hidden focus:outline-none" id="mobile-menu-button">
                    <i class="fas fa-bars text-2xl text-rose-800"></i>
                </button>
            </div>
            <!-- Menu mobile -->
            <div class="md:hidden hidden mt-4 transition-all duration-300 ease-in-out" id="mobile-menu">
                <div class="flex flex-col space-y-3">
                    <a href="#accueil" class="block py-2 text-gray-700 hover:text-rose-800 transition">Accueil</a>
                    <a href="#histoire" class="block py-2 text-gray-700 hover:text-rose-800 transition">Notre Histoire</a>
                    <a href="#specialites" class="block py-2 text-gray-700 hover:text-rose-800 transition">Nos Spécialités</a>
                    <a href="#temoignages" class="block py-2 text-gray-700 hover:text-rose-800 transition">Témoignages</a>
                    <a href="#contact" class="block py-2 text-gray-700 hover:text-rose-800 transition">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Section Accueil -->
    <section id="accueil" class="min-h-screen flex items-center justify-center bg-gradient-to-b from-rose-50 to-rose-100 pt-20">
        <div class="container mx-auto px-6 py-20 text-center animate-fadeIn">
            <h1 class="text-5xl md:text-6xl font-serif font-bold text-rose-800 mb-6">La Table Étoilée</h1>
            <p class="text-xl md:text-2xl text-white mb-12 max-w-2xl mx-auto">
                Où chaque plat est une œuvre d'art et chaque repas, un souvenir étoilé.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <button onclick="openModal()" class="bg-rose-800 hover:bg-rose-700 text-white px-8 py-3 rounded-full font-medium transition transform hover:scale-105 animate-fadeIn delay-200">
                    Réserver une table
                </button>
                <a href="{{ route('trackings.track') }}" class="border-2 border-white-800 text-white hover:bg-rose-50 hover:text-black px-8 py-3 rounded-full font-medium transition transform hover:scale-105 animate-fadeIn delay-200">
                    <i class="fas fa-search mr-2"></i>Suivre ma demande
                </a>
            </div>
        </div>
    </section>

    <!-- Section Notre Histoire -->
    <section id="histoire" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center text-rose-800 mb-16 animate-slideUp">
                Notre Histoire
            </h2>
            <div class="max-w-4xl mx-auto animate-slideUp">
                <div class="flex flex-col md:flex-row items-center gap-10">
                    <div class="md:w-1/2">
                        <img src="https://images.unsplash.com/photo-1555396273-367ea4eb4db5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80" 
                            alt="Portrait du chef Antoine Moreau, fondateur de La Table Étoilée" 
                            class="rounded-lg shadow-lg w-full h-auto">
                    </div>
                    <div class="md:w-1/2">
                        <p class="text-gray-600 mb-4">
                            Fondé en 2010 par le chef étoilé Antoine Moreau, La Table Étoilée est bien plus qu'un simple restaurant - c'est une passion, un art de vivre.
                        </p>
                        <p class="text-gray-600 mb-4">
                            Inspiré par les marchés provençaux de son enfance et formé dans les plus grandes maisons parisiennes, le chef Moreau a créé un lieu où tradition et innovation se marient avec élégance.
                        </p>
                        <p class="text-gray-600 mb-4">
                            Notre mission ? Vous offrir une expérience gastronomique mémorable, où chaque détail compte - des produits locaux et de saison soigneusement sélectionnés, à la présentation artistique de nos plats.
                        </p>
                        <p class="text-gray-600">
                            Aujourd'hui, notre équipe de passionnés perpétue cette philosophie avec créativité et dévouement, pour vous faire vivre des moments uniques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carroussel des images des differents plats -->
    <section class="w-full carou py-20 flex flex-col gap-5 items-center justify-center">
        <h1 class="text-3xl md:text-4xl font-serif font-bold text-center text-rose-800 mb-16 animate-slideUp">Notre carousel</h1>
    <div class="carousel w-full carousel-center bg-neutral rounded-box max-w-md space-x-4 p-4">
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1559703248-dcaaec9fab78.webp"
      class="rounded-box" />
  </div>
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1565098772267-60af42b81ef2.webp"
      class="rounded-box" />
  </div>
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1572635148818-ef6fd45eb394.webp"
      class="rounded-box" />
  </div>
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1494253109108-2e30c049369b.webp"
      class="rounded-box" />
  </div>
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1550258987-190a2d41a8ba.webp"
      class="rounded-box" />
  </div>
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1559181567-c3190ca9959b.webp"
      class="rounded-box" />
  </div>
  <div class="carousel-item">
    <img
      src="https://img.daisyui.com/images/stock/photo-1601004890684-d8cbf643f5f2.webp"
      class="rounded-box" />
  </div>
</div>
    </section>

    <!-- Section Nos Spécialités -->
    <section id="specialites" class="py-20 bg-rose-50">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center text-rose-800 mb-16 animate-slideUp">
                Nos Spécialités
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Plat 1 -->
                <div class="bg-white plat p-6 rounded-lg shadow-md hover:shadow-xl transition animate-slideUp">
                    <div class="text-rose-800 text-4xl mb-4">
                        <i class="fas fa-fish"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Turbot Rôti aux Agrumes</h3>
                    <p class="text-gray-600">
                        Turbot de Bretagne rôti à la perfection, accompagné d'une émulsion d'agrumes et de légumes de saison.
                    </p>
                </div>
                
                <!-- Plat 2 -->
                <div class="bg-white plat p-6 rounded-lg shadow-md hover:shadow-xl transition animate-slideUp" style="animation-delay: 0.2s;">
                    <div class="text-rose-800 text-4xl mb-4">
                        <i class="fas fa-drumstick-bite"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Pigeonneau en Deux Services</h3>
                    <p class="text-gray-600">
                        Pigeonneau d'exception, servi en deux services : la poitrine rôtie et les cuisses confites, avec une sauce au vin rouge.
                    </p>
                </div>
                
                <!-- Plat 3 -->
                <div class="bg-white plat p-6 rounded-lg shadow-md hover:shadow-xl transition animate-slideUp" style="animation-delay: 0.4s;">
                    <div class="text-rose-800 text-4xl mb-4">
                        <i class="fas fa-cheese"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Assiette de Fromages Affinés</h3>
                    <p class="text-gray-600">
                        Sélection de fromages affinés par notre maître-fromager, accompagnés de confitures maison et de noix caramélisées.
                    </p>
                </div>
                
                <!-- Plat 4 -->
                <div class="bg-white plat p-6 rounded-lg shadow-md hover:shadow-xl transition animate-slideUp" style="animation-delay: 0.6s;">
                    <div class="text-rose-800 text-4xl mb-4">
                        <i class="fas fa-apple-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Déclinaison de Pommes</h3>
                    <p class="text-gray-600">
                        Trois desserts autour de la pomme : tarte fine, sorbet et crumble revisité, une ode à ce fruit emblématique.
                    </p>
                </div>
                
                <!-- Plat 5 -->
                <div class="bg-white plat p-6 rounded-lg shadow-md hover:shadow-xl transition animate-slideUp" style="animation-delay: 0.8s;">
                    <div class="text-rose-800 text-4xl mb-4">
                        <i class="fas fa-wine-glass-alt"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Accord Mets & Vins</h3>
                    <p class="text-gray-600">
                        Sélection de vins rares et de grands crus, soigneusement choisis par notre sommelier pour sublimer vos plats.
                    </p>
                </div>
                
                <!-- Plat 6 -->
                <div class="bg-white plat p-6 rounded-lg shadow-md hover:shadow-xl transition animate-slideUp" style="animation-delay: 1s;">
                    <div class="text-rose-800 text-4xl mb-4">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Menu Végétal Étoilé</h3>
                    <p class="text-gray-600">
                        Expérience gastronomique 100% végétale mettant en valeur les légumes et céréales dans toute leur splendeur.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Témoignages -->
    <section id="temoignages" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center text-rose-800 mb-16 animate-slideUp">
                Ils ont partagé leur expérience
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Témoignage 1 -->
                <div class="bg-rose-50 p-6 rounded-lg shadow-md animate-slideUp">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-rose-200 flex items-center justify-center text-rose-800 font-bold mr-4">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Sophie L.</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Une expérience gastronomique inoubliable ! Chaque plat était une surprise délicieuse, et le service impeccable. Nous reviendrons certainement."
                    </p>
                </div>
                
                <!-- Témoignage 2 -->
                <div class="bg-rose-50 p-6 rounded-lg shadow-md animate-slideUp" style="animation-delay: 0.2s;">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-rose-200 flex items-center justify-center text-rose-800 font-bold mr-4">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Pierre M.</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Le menu dégustation était exceptionnel. L'attention portée aux détails et la créativité des plats m'ont vraiment impressionné. À recommander sans hésiter."
                    </p>
                </div>
                
                <!-- Témoignage 3 -->
                <div class="bg-rose-50 p-6 rounded-lg shadow-md animate-slideUp" style="animation-delay: 0.4s;">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 rounded-full bg-rose-200 flex items-center justify-center text-rose-800 font-bold mr-4">
                            <i class="fas fa-user text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-800">Élodie T.</h4>
                            <div class="flex text-yellow-400">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="text-gray-600 italic">
                        "Cadre élégant et intimiste, plats raffinés et service attentionné. Le dessert aux agrumes était divin ! Une adresse à ne pas manquer."
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="py-20 bg-rose-800 text-white">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl md:text-4xl font-serif font-bold text-center mb-16 animate-slideUp">
                Contactez-nous
            </h2>
            <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 animate-slideUp">
                <div>
                    <h3 class="text-xl font-bold mb-6">Nos coordonnées</h3>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <i class="fas fa-map-marker-alt mt-1 mr-4 text-rose-200"></i>
                            <p>12 Rue Gastronomique<br>75008 Ouagadougou, Burkina Faso</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-phone-alt mr-4 text-rose-200"></i>
                            <p>+226 00 00 00 00 </p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-envelope mr-4 text-rose-200"></i>
                            <p>contact@latableetoilee.com</p>
                        </div>
                        <div class="flex items-center">
                            <i class="fas fa-clock mr-4 text-rose-200"></i>
                            <p>Ouvert du mardi au samedi<br>Déjeuner : 12h - 14h<br>Dîner : 19h30 - 22h</p>
                        </div>
                    </div>
                    <div class="mt-8">
                        <h4 class="text-lg font-bold mb-4">Suivez-nous</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-10 h-10 rounded-full bg-rose-700 flex items-center justify-center hover:bg-rose-600 transition">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-rose-700 flex items-center justify-center hover:bg-rose-600 transition">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="w-10 h-10 rounded-full bg-rose-700 flex items-center justify-center hover:bg-rose-600 transition">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-6">Envoyez-nous un message</h3>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block mb-1">Nom complet</label>
                            <input type="text" id="name" class="w-full px-4 py-2 rounded bg-rose-700 border border-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-300 placeholder-rose-400">
                        </div>
                        <div>
                            <label for="email" class="block mb-1">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-2 rounded bg-rose-700 border border-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-300 placeholder-rose-400">
                        </div>
                        <div>
                            <label for="message" class="block mb-1">Message</label>
                            <textarea id="message" rows="4" class="w-full px-4 py-2 rounded bg-rose-700 border border-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-300 placeholder-rose-400"></textarea>
                        </div>
                        <button type="submit" class="bg-white text-rose-800 px-6 py-2 rounded-full font-medium hover:bg-rose-100 transition">
                            Envoyer
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-rose-900 text-rose-200 py-8">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-xl font-serif font-bold mb-4 md:mb-0">
                    La Table Étoilée
                </div>
                <div class="text-sm">
                    &copy; La Table Étoilée. Tous droits réservés.
                </div>
            </div>
        </div>
    </footer>


    <!-- Modal de réservation -->
   <div id="reservation-modal" class="fixed inset-0 z-50 {{ $errors->any() || session('success') ? '' : 'hidden' }}">
    <div class="modal-overlay absolute inset-0" onclick="closeModal()"></div>
    <div class="bg-white modal-content rounded-lg shadow-xl relative z-10 max-w-md w-full animate-slideUp">
        <div class="p-6">
            <div class="flex justify-between items-center mb-4">
                <h3 class="text-2xl font-bold text-rose-800">Réserver une table</h3>
                <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700 text-2xl">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <!-- Affichage des erreurs de validation -->
            @if ($errors->any())
                <div class="bg-red-500 text-white p-4 rounded mb-4">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Affichage du message de succès -->
            @if (session('success'))
                <div class="bg-green-500 text-white p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('reservation.store') }}" class="space-y-4">
                @csrf
                <!-- Champs du formulaire -->
                <div>
                    <label for="reservation-name" class="block mb-1">Nom complet</label>
                    <input type="text" name="name" id="reservation-name" class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300" value="{{ old('name') }}">
                </div>
                <div>
                    <label for="reservation-email" class="block mb-1">Email</label>
                    <input type="email" name="email" id="reservation-email" class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300" value="{{ old('email') }}">
                </div>
                <div>
                    <label for="reservation-phone" class="block mb-1">Téléphone</label>
                    <input type="tel" name="phone" id="reservation-phone" class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300" value="{{ old('phone') }}">
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="reservation-date" class="block mb-1">Date</label>
                        <input type="date" name="date" id="reservation-date" class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300" value="{{ old('date') }}">
                    </div>
                    <div>
                        <label for="reservation-time" class="block mb-1">Heure</label>
                        <select id="reservation-time" name="time" class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300">
                            <option {{ old('time') == '12:00' ? 'selected' : '' }}>12:00</option>
                            <option {{ old('time') == '12:30' ? 'selected' : '' }}>12:30</option>
                            <option {{ old('time') == '13:00' ? 'selected' : '' }}>13:00</option>
                            <option {{ old('time') == '13:30' ? 'selected' : '' }}>13:30</option>
                            <option {{ old('time') == '19:30' ? 'selected' : '' }}>19:30</option>
                            <option {{ old('time') == '20:00' ? 'selected' : '' }}>20:00</option>
                            <option {{ old('time') == '20:30' ? 'selected' : '' }}>20:30</option>
                            <option {{ old('time') == '21:00' ? 'selected' : '' }}>21:00</option>
                        </select>
                    </div>
                </div>
                <div>
                    <label for="reservation-guests" class="block mb-1">Nombre de personnes</label>
                    <select id="reservation-guests" name="guests" class="w-full px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300">
                        <option {{ old('guests') == '1' ? 'selected' : '' }}>1</option>
                        <option {{ old('guests') == '2' ? 'selected' : '' }}>2</option>
                        <option {{ old('guests') == '3' ? 'selected' : '' }}>3</option>
                        <option {{ old('guests') == '4' ? 'selected' : '' }}>4</option>
                        <option {{ old('guests') == '5' ? 'selected' : '' }}>5</option>
                        <option {{ old('guests') == '6' ? 'selected' : '' }}>6</option>
                        <option {{ old('guests') == '7' ? 'selected' : '' }}>7</option>
                        <option {{ old('guests') == '8+' ? 'selected' : '' }}>8+</option>
                    </select>
                </div>
                <div>
                    <label for="reservation-notes" class="block mb-1">Demandes spéciales</label>
                    <textarea id="reservation-notes" name="notes" rows="3" class="w-full resize-none px-4 py-2 rounded border border-gray-300 focus:outline-none focus:ring-2 focus:ring-rose-300">{{ old('notes') }}</textarea>
                </div>
                <button type="submit" class="w-full bg-rose-800 text-white px-6 py-3 rounded-full font-medium hover:bg-rose-700 transition">
                    Confirmer la réservation
                </button>
            </form>
        </div>
    </div>
</div>

@if (session('success'))
        <div id="success-message" class="bg-green-500 text-white p-4 rounded mb-4 text-center fixed bottom-0 left-1/2 transform -translate-x-1/2 w-1/2 z-50">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
        </div>
@endif

 <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
