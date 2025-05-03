// Gestion du menu mobile
document.getElementById('mobile-menu-button').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
});

// Gestion du modal de réservation
function openModal() {
    document.getElementById('reservation-modal').classList.remove('hidden');
    document.body.classList.add('overflow-hidden');
}

function closeModal() {
    const modal = document.getElementById('reservation-modal');
    console.log(modal);
    
    if (modal) {
        modal.classList.add('hidden'); // Ajoute la classe 'hidden' pour masquer le modal
        document.body.classList.remove('overflow-hidden'); // Réactive le défilement de la page
    } else {
        alert("Le modal n'a pas été trouvé !");
    }
}

document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById('reservation-modal');
    if (!modal.classList.contains('hidden') && !document.querySelector('.bg-red-500')) {
        modal.classList.add('hidden'); // Ferme le modal si aucune erreur n'est présente
        document.body.classList.remove('overflow-hidden');
    }
});

document.addEventListener('DOMContentLoaded', function () {
    const successMessage = document.getElementById('success-message');
    if (successMessage) {
        setTimeout(() => {
            successMessage.style.opacity = '0'; // Ajoute une transition pour masquer le message
            successMessage.addEventListener('transitionend', () => {
                successMessage.remove(); // Supprime le message du DOM après la transition
            });
        }, 8000); // 5000 ms = 5 secondes
    }
});

// Animation au scroll
document.addEventListener('DOMContentLoaded', function() {
    const animateElements = document.querySelectorAll('.animate-slideUp, .animate-fadeIn');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible'); // Ajoute la classe pour déclencher l'animation
                observer.unobserve(entry.target); // Arrête d'observer après l'animation
            }
        });
    }, {
        threshold: 0.1 // Déclenche l'animation lorsque 10% de l'élément est visible
    });

    animateElements.forEach(element => {
        observer.observe(element); // Observe chaque élément
    });
});

// Smooth scrolling pour les ancres
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
        
        // Fermer le menu mobile si ouvert
        const mobileMenu = document.getElementById('mobile-menu');
        if (!mobileMenu.classList.contains('hidden')) {
            mobileMenu.classList.add('hidden');
        }
    });
});