<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveTogether | Covoiturage Économique</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS Personnalisé -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* Variables Couleurs */
:root {
    --primary-color: #28a745;  /* Vert BlaBlaCar-like */
    --secondary-color: #6c757d;
    --light-bg: #f8f9fa;
    --dark-bg: #343a40;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: var(--light-bg);
}

/* Hero Section */
.hero-section {
    background: linear-gradient(rgba(255, 255, 255, 0.9), rgba(255, 255, 255, 0.9)), 
                url('https://via.placeholder.com/1920x600') no-repeat center/cover;
    padding: 100px 0;
}

/* Cartes de trajet */
.ride-card {
    border: none;
    border-radius: 10px;
    transition: transform 0.3s;
    margin-bottom: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.ride-card:hover {
    transform: translateY(-5px);
}

.ride-card .card-body {
    padding: 20px;
}

.ride-card .price {
    font-size: 1.5rem;
    color: var(--primary-color);
    font-weight: bold;
}

/* Boutons */
.btn-success {
    background-color: var(--primary-color);
    border: none;
    padding: 10px 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section {
        padding: 60px 0;
    }
}
    </style>
</head>
<body>
    <!-- Barre de Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-success" href="#">
                <i class="fas fa-car-side me-2"></i>MoveTogether
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/offer-ride.html">Proposer un trajet</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Connexion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Recherche) -->
    <section class="hero-section bg-light py-5">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-4">Trouvez votre trajet en covoiturage</h1>
            <p class="lead mb-5">Économisez jusqu'à 75% sur vos trajets !</p>
            
            <div class="search-box bg-white p-4 rounded shadow-sm mx-auto" style="max-width: 800px;">
                <form id="searchForm">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Départ" required>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" placeholder="Destination" required>
                        </div>
                        <div class="col-md-2">
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-success w-100">
                                <i class="fas fa-search me-2"></i>Rechercher
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Trajets Populaires -->
    <section class="popular-rides py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Trajets populaires</h2>
            <div class="row" id="popularRides">
                <!-- Rempli dynamiquement en JS -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <p>&copy; 2025 MoveTogether. Tous droits réservés.</p>
        </div>
    </footer>

    <!-- Bootstrap & JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
    <script>
        // Données factices (remplacées par une API plus tard)
const popularRides = [
    { id: 1, from: "Tunis", to: "Beja", date: "2023-06-15", prix: 20, seats: 3, driver: "Jean D." },
    { id: 2, from: "Lille", to: "Marseille", date: "2023-06-16", pri: 35, seats: 2, driver: "Marie L." },
    { id: 3, from: "Bordeaux", to: "Toulouse", date: "2023-06-17", price: 15, seats: 4, driver: "Pierre M." }
];

// Afficher les trajets populaires
function loadPopularRides() {
    const container = document.getElementById("popularRides");
    container.innerHTML = popularRides.map(ride => `
        <div class="col-md-4">
            <div class="card ride-card h-100">
                <div class="card-body">
                    <h5 class="card-title">${ride.from} → ${ride.to}</h5>
                    <p class="text-muted">${ride.date}</p>
                    <p class="price">${ride.price}€</p>
                    <p>${ride.seats} places disponibles</p>
                    <p class="text-secondary">Conducteur: ${ride.driver}</p>
                    <a href="pages/booking.html?id=${ride.id}" class="btn btn-success w-100">Réserver</a>
                </div>
            </div>
        </div>
    `).join("");
}

// Gestion de la recherche
document.getElementById("searchForm").addEventListener("submit", function(e) {
    e.preventDefault();
    alert("Redirection vers la page de résultats...");
    // window.location.href = "pages/search.html";
});

// Chargement initial
document.addEventListener("DOMContentLoaded", loadPopularRides);
    </script>
</body>
</html>