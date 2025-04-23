<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoveTogether</title>
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
            <a class="navbar-brand text-success" href="index.html">
                <i class="fas fa-car-side me-2"></i>MoveTogether
            </a>

            <!-- Bouton mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Contenu à droite -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto align-items-center">
                    <!-- Bouton "+ Proposer un trajet" -->
                    <li class="nav-item d-none d-lg-block">
                        <a href="offer-ride.php" class="btn btn-success btn-publish text-white">
                            <i class="fas fa-plus me-2"></i>Proposer un trajet
                        </a>
                    </li>

                    <!-- Icône Profil (Dropdown) -->
                    <li class="nav-item dropdown">
                        <div class="profile-icon dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown">
                            <i class="fas fa-user text-secondary"></i>
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                            <li><h6 class="dropdown-header">Bonjour, <span id="username">Utilisateur</span></h6></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="profile.html"><i class="fas fa-user me-2"></i>Mon profil</a></li>
                            <li><a class="dropdown-item" href="my-rides.html"><i class="fas fa-road me-2"></i>Mes trajets</a></li>
                            <li><a class="dropdown-item" href="messages.html"><i class="fas fa-envelope me-2"></i>Messages</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="login.php"><i class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
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