<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil | EcoRide</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome@6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #00B894;
            --secondary-color: #6C757D;
            --light-bg: #F8F9FA;
        }
        
        body {
            background-color: var(--light-bg);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        /* Sidebar Style */
        .profile-sidebar {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 1.5rem 0;
        }
        
        .profile-menu {
            list-style: none;
            padding: 0;
        }
        
        .profile-menu li {
            margin-bottom: 5px;
        }
        
        .profile-menu a {
            display: block;
            padding: 0.75rem 1.5rem;
            color: var(--secondary-color);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .profile-menu a:hover, 
        .profile-menu a.active {
            color: var(--primary-color);
            background-color: rgba(0, 184, 148, 0.1);
            border-left: 3px solid var(--primary-color);
        }
        
        .profile-menu i {
            width: 24px;
            text-align: center;
            margin-right: 10px;
        }
        
        /* Main Content */
        .profile-content {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 2rem;
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 1.5rem;
        }
        
        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .profile-info {
            margin-left: 1.5rem;
        }
        
        .profile-name {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 0.25rem;
        }
        
        .profile-rating {
            color: #FFC107;
            margin-bottom: 0.5rem;
        }
        
        .profile-badge {
            display: inline-block;
            background-color: #E3F2FD;
            color: #1976D2;
            padding: 0.25rem 0.75rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        /* Form Styles */
        .form-section {
            margin-bottom: 2rem;
        }
        
        .section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            display: flex;
            align-items: center;
        }
        
        .section-title i {
            margin-right: 10px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
            
            .profile-info {
                margin-left: 0;
                margin-top: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar (à inclure) -->
    <?php include 'nav.php'; ?>

    <div class="container py-5">
        <div class="row">
            <!-- Sidebar Menu -->
            <div class="col-lg-3 mb-4">
                <div class="profile-sidebar">
                    <ul class="profile-menu">
                        <li><a href="#" class="active"><i class="fas fa-user"></i> Mon profil</a></li>
                        <li><a href="#"><i class="fas fa-road"></i> Mes trajets</a></li>
                        <li><a href="#"><i class="fas fa-car"></i> Mon véhicule</a></li>
                        <li><a href="#"><i class="fas fa-star"></i> Avis reçus</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> Messages</a></li>
                        <li><a href="#"><i class="fas fa-cog"></i> Paramètres</a></li>
                        <li><a href="#"><i class="fas fa-question-circle"></i> Aide</a></li>
                        <li><a href="login.php" style="color: #dc3545;"><i class="fas fa-sign-out-alt"></i> Déconnexion</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9">
                <div class="profile-content">
                    <!-- Header -->
                    <div class="profile-header">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Photo de profil" class="profile-avatar">
                        <div class="profile-info">
                            <h1 class="profile-name">Ben Rhouma Mahdi</h1>
                            <div class="profile-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span class="text-muted ms-2">4.7 (12 avis)</span>
                            </div>
                            <span class="profile-badge">
                                <i class="fas fa-check-circle me-1"></i>Profil vérifié
                            </span>
                        </div>
                    </div>
                    
                    <!-- Informations Personnelles -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-id-card"></i> Informations personnelles
                        </h2>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Prénom</label>
                                    <input type="text" class="form-control" value="Mahdi">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Nom</label>
                                    <input type="text" class="form-control" value="Ben Rhouma">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" value="benrhoumamahdi@gmail.com">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" value="+216 98 110 713 ">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Date de naissance</label>
                                <input type="date" class="form-control" value="1991-04-09">
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                        </form>
                    </div>
                    
                    <!-- À propos de moi -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-info-circle"></i> À propos de moi
                        </h2>
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <textarea class="form-control" rows="4">Je suis un conducteur expérimenté et j'aime discuter pendant les trajets. N'hésitez pas à réserver !</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Langues parlées</label>
                                <select class="form-select" multiple>
                                <option selected>Arabe</option>

                                    <option selected>Français</option>
                                    <option selected>Anglais</option>
                                    <option>Espagnol</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                        </form>
                    </div>
                    
                    <!-- Préférences -->
                    <div class="form-section">
                        <h2 class="section-title">
                            <i class="fas fa-sliders-h"></i> Préférences
                        </h2>
                        <form>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="smokingAllowed" checked>
                                <label class="form-check-label" for="smokingAllowed">Je suis pas  fumeur</label>
                            </div>
                            <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="animalsAllowed" checked>
                                <label class="form-check-label" for="animalsAllowed">J'accepte les animaux</label>
                            </div>
                            <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="musicAllowed">
                                <label class="form-check-label" for="musicAllowed">J'aime écouter de la musique pendant le trajet</label>
                            </div>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-save me-2"></i>Enregistrer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Script pour gérer les changements dynamiques
        document.addEventListener('DOMContentLoaded', function() {
            // Exemple : Changement de photo de profil
            document.querySelector('.profile-avatar').addEventListener('click', function() {
                alert("Fonctionnalité : Changer la photo de profil");
            });
            
            // Gestion des onglets du menu
            const menuItems = document.querySelectorAll('.profile-menu a');
            menuItems.forEach(item => {
                item.addEventListener('click', function(e) {
                    e.preventDefault();
                    menuItems.forEach(i => i.classList.remove('active'));
                    this.classList.add('active');
                    // Ici : Charger le contenu dynamiquement via AJAX
                });
            });
        });
    </script>
</body>
</html>