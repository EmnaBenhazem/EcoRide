<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide | Connexion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <style>
        /* ==== STYLES AUTHENTIFICATION ==== */
#roleTabs .nav-link {
    color: #495057;
    border-radius: 8px 8px 0 0;
    padding: 0.75rem;
    transition: all 0.3s;
    border: 1px solid transparent;
}

#roleTabs .nav-link.active {
    color: #fff;
    background-color: #00b894;
    border-color: #00a884;
}

#roleTabs .nav-link:not(.active):hover {
    border-color: #dee2e6;
}

.card {
    border-radius: 12px;
    border: none;
}

.form-control {
    padding: 0.75rem 1rem;
    border-radius: 8px;
    border: 1px solid #e0e0e0;
}

.form-control:focus {
    box-shadow: 0 0 0 3px rgba(0, 184, 148, 0.2);
    border-color: #00b894;
}

.btn-success {
    background-color: #00b894;
    border: none;
    padding: 0.75rem;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.btn-success:hover {
    background-color: #00a884;
}

/* Animation pour basculer entre login/register */
.auth-transition {
    animation: fadeIn 0.4s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}
    </style>
</head>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Personnalisé */
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        .btn-publish {
            background-color: #00b894;
            border-radius: 50px;
            padding: 0.5rem 1.2rem;
            margin-right: 1rem;
        }
        .btn-publish:hover {
            background-color: #00a884;
            transform: translateY(-2px);
        }
        .profile-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s;
        }
        .profile-icon:hover {
            background-color: #e9ecef;
        }
        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <!-- Barre de Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm py-3">
        <div class="container">
            <!-- Logo/Nom à gauche -->
            <a class="navbar-brand text-success" href="index.php">
                <i class="fas fa-car-side me-2"></i>EcoRide
            </a>

            <!-- Bouton mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu à droite -->
            <div class="collapse navbar-collapse" id="navbarContent">
                

                    <!-- Icône Profil (Dropdown) -->
                    <li class="nav-item dropdown">
                            
                        
            </div>
        </div>
    </nav>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Récupérer le nom d'utilisateur si connecté
        document.addEventListener('DOMContentLoaded', function() {
            // Exemple: Remplacer par les données réelles de session
            const storedUsername = localStorage.getItem('username');
            if (storedUsername) {
                document.getElementById('username').textContent = storedUsername;
            }
        });
    </script>
</body>
</html>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <!-- Carte Principale -->
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <!-- Logo -->
                        <div class="text-center mb-4">
                            <i class="fas fa-car-side text-success fs-1"></i>
                            <h2 class="mt-3 fw-bold">EcoRide</h2>
                            <p class="text-muted">Connectez-vous ou créez un compte</p>
                        </div>

                        <!-- Onglets Conducteur/Passager -->
                        <ul class="nav nav-pills nav-justified mb-4" id="roleTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="passenger-tab" data-bs-toggle="pill" data-bs-target="#passenger" type="button">
                                    <i class="fas fa-user me-2"></i>Passager
                                </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="driver-tab" data-bs-toggle="pill" data-bs-target="#driver" type="button">
                                    <i class="fas fa-steering-wheel me-2"></i>Conducteur
                                </button>
                            </li>
                        </ul>

                        <!-- Contenu des Onglets -->
                        <div class="tab-content" id="roleTabsContent">
                            <!-- Formulaire Passager -->
                            <div class="tab-pane fade show active" id="passenger" role="tabpanel">
                                <form id="passengerForm">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" required>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberPassenger">
                                            <label class="form-check-label" for="rememberPassenger">Se souvenir de moi</label>
                                        </div>
                                        <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100 mb-3">
                                        <i class="fas fa-sign-in-alt me-2"></i>Connexion
                                    </button>
                                    <div class="text-center">
                                        <p class="mb-0">Nouveau passager ? <a href="#" class="text-success" id="showPassengerRegister">Créer un compte</a></p>
                                    </div>
                                </form>

                                <!-- Inscription Passager (caché par défaut) -->
                                <form id="passengerRegisterForm" class="d-none">
                                    <h5 class="mb-4 text-center">Inscription Passager</h5>
                                    <div class="mb-3">
                                        <label class="form-label">Nom complet</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Confirmation</label>
                                            <input type="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100 mb-3">
                                        <i class="fas fa-user-plus me-2"></i>S'inscrire
                                    </button>
                                    <div class="text-center">
                                        <p class="mb-0">Déjà inscrit ? <a href="#" class="text-success" id="showPassengerLogin">Se connecter</a></p>
                                    </div>
                                </form>
                            </div>

                            <!-- Formulaire Conducteur -->
                            <div class="tab-pane fade" id="driver" role="tabpanel">
                                <form id="driverForm">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mot de passe</label>
                                        <input type="password" class="form-control" required>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="rememberDriver">
                                            <label class="form-check-label" for="rememberDriver">Se souvenir de moi</label>
                                        </div>
                                        <a href="#" class="text-decoration-none">Mot de passe oublié ?</a>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100 mb-3">
                                        <i class="fas fa-sign-in-alt me-2"></i>Connexion
                                    </button>
                                    <div class="text-center">
                                        <p class="mb-0">Nouveau conducteur ? <a href="#" class="text-success" id="showDriverRegister">Créer un compte</a></p>
                                    </div>
                                </form>

                                <!-- Inscription Conducteur (caché par défaut) -->
                                <form id="driverRegisterForm" class="d-none">
                                    <h5 class="mb-4 text-center">Inscription Conducteur</h5>
                                    <div class="mb-3">
                                        <label class="form-label">Nom complet</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" required>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Modèle de voiture</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Plaque d'immatriculation</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Mot de passe</label>
                                            <input type="password" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label">Confirmation</label>
                                            <input type="password" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="agreeTerms" required>
                                        <label class="form-check-label" for="agreeTerms">J'accepte les <a href="#">conditions d'utilisation</a></label>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100 mb-3">
                                        <i class="fas fa-id-card me-2"></i>Devenir Conducteur
                                    </button>
                                    <div class="text-center">
                                        <p class="mb-0">Déjà inscrit ? <a href="#" class="text-success" id="showDriverLogin">Se connecter</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Basculer entre Login/Register pour Passager
    document.getElementById('showPassengerRegister').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('passengerForm').classList.add('d-none');
        document.getElementById('passengerRegisterForm').classList.remove('d-none');
        document.getElementById('passengerRegisterForm').classList.add('auth-transition');
    });

    document.getElementById('showPassengerLogin').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('passengerRegisterForm').classList.add('d-none');
        document.getElementById('passengerForm').classList.remove('d-none');
        document.getElementById('passengerForm').classList.add('auth-transition');
    });

    // Basculer entre Login/Register pour Conducteur
    document.getElementById('showDriverRegister').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('driverForm').classList.add('d-none');
        document.getElementById('driverRegisterForm').classList.remove('d-none');
        document.getElementById('driverRegisterForm').classList.add('auth-transition');
    });

    document.getElementById('showDriverLogin').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('driverRegisterForm').classList.add('d-none');
        document.getElementById('driverForm').classList.remove('d-none');
        document.getElementById('driverForm').classList.add('auth-transition');
    });

    // Soumission des formulaires (simulation)
    document.getElementById('passengerForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Connexion passager réussie (simulation)');
    });

    document.getElementById('driverForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Connexion conducteur réussie (simulation)');
    });

    document.getElementById('passengerRegisterForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Inscription passager réussie (simulation)');
    });

    document.getElementById('driverRegisterForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Inscription conducteur réussie (simulation)');
    });
});
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/auth.js"></script>
</body>
</html>