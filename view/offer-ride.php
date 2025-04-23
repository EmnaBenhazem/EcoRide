<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoRide - Proposer un trajet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Maps API (pour l'autocomplétion) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&libraries=places"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }
        .form-container {
            max-width: 800px;
            margin: 2rem auto;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            padding: 2rem;
        }
        .form-title {
            color: #00b894;
            border-bottom: 2px solid #00b894;
            padding-bottom: 0.5rem;
            margin-bottom: 1.5rem;
        }
        .form-control:focus {
            border-color: #00b894;
            box-shadow: 0 0 0 3px rgba(0, 184, 148, 0.2);
        }
        .btn-publish {
            background-color: #00b894;
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 500;
        }
        .btn-publish:hover {
            background-color: #00a884;
        }
        .duration-badge {
            background-color: #e3f2fd;
            color: #1976d2;
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- Intégrez votre navbar ici -->
    <?php include 'nav.php'; ?>

    <div class="container py-5">
        <div class="form-container">
            <h2 class="form-title text-center">
                <i class="fas fa-road me-2"></i>Proposer un trajet
            </h2>

            <form id="rideOfferForm" action="process_ride.php" method="POST">
                <!-- Départ & Arrivée -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="departure" class="form-label fw-bold">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>Lieu de départ
                        </label>
                        <input type="text" class="form-control" id="departure" name="departure" placeholder="Ex: Paris, 75015" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="arrival" class="form-label fw-bold">
                            <i class="fas fa-flag-checkered text-success me-2"></i>Destination
                        </label>
                        <input type="text" class="form-control" id="arrival" name="arrival" placeholder="Ex: Lyon, 69002" required>
                    </div>
                </div>

                <!-- Date & Heure -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="date" class="form-label fw-bold">
                            <i class="far fa-calendar-alt me-2"></i>Date de départ
                        </label>
                        <input type="date" class="form-control" id="date" name="date" min="<?= date('Y-m-d'); ?>" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="time" class="form-label fw-bold">
                            <i class="far fa-clock me-2"></i>Heure de départ
                        </label>
                        <input type="time" class="form-control" id="time" name="time" required>
                    </div>
                </div>

                <!-- Durée estimée (calculée automatiquement) -->
                <div class="mb-4">
                    <label class="form-label fw-bold">
                        <i class="fas fa-hourglass-half me-2"></i>Durée estimée
                    </label>
                    <div class="d-flex align-items-center">
                        <input type="text" class="form-control w-25 me-3" id="duration" name="duration" placeholder="HH:MM" readonly>
                        <span class="duration-badge badge p-2" id="distanceBadge">
                            <i class="fas fa-info-circle me-1"></i>Calcul automatique
                        </span>
                    </div>
                </div>

                <!-- Places & Prix -->
                <div class="row mb-4">
                    <div class="col-md-6 mb-3">
                        <label for="seats" class="form-label fw-bold">
                            <i class="fas fa-users me-2"></i>Places disponibles
                        </label>
                        <select class="form-select" id="seats" name="seats" required>
                            <option value="" disabled selected>Nombre de places</option>
                            <option value="1">1 place</option>
                            <option value="2">2 places</option>
                            <option value="3">3 places</option>
                            <option value="4">4 places</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label fw-bold">
                            <i class="fas fa-dinars-sign me-2"></i>(DT)  Prix par passager
                        </label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="price" name="price" min="0" step="0.5" placeholder="Ex: 15.50" required>
                            <span class="input-group-text">€</span>
                        </div>
                    </div>
                </div>

                <!-- Options supplémentaires -->
                <div class="mb-4">
                    <label class="form-label fw-bold">
                        <i class="fas fa-cogs me-2"></i>Options
                    </label>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="allowSmoking" name="allowSmoking">
                        <label class="form-check-label" for="allowSmoking">Fumeur accepté</label>
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="allowAnimals" name="allowAnimals">
                        <label class="form-check-label" for="allowAnimals">Animaux acceptés</label>
                    </div>
                    
                </div>

                <!-- Commentaires -->
                <div class="mb-4">
                    <label for="comments" class="form-label fw-bold">
                        <i class="fas fa-comment me-2"></i>Informations complémentaires
                    </label>
                    <textarea class="form-control" id="comments" name="comments" rows="3" placeholder="Ex: Bagages limités, point de rencontre..."></textarea>
                </div>

                <!-- Bouton de soumission -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-publish text-white">
                        <i class="fas fa-paper-plane me-2"></i>Publier le trajet
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Autocomplétion Google Maps
        function initAutocomplete() {
            const departureInput = document.getElementById('departure');
            const arrivalInput = document.getElementById('arrival');
            
            new google.maps.places.Autocomplete(departureInput);
            new google.maps.places.Autocomplete(arrivalInput);
        }

        // Calcul de la durée (simulation)
        document.getElementById('departure').addEventListener('change', calculateDuration);
        document.getElementById('arrival').addEventListener('change', calculateDuration);

        function calculateDuration() {
            const departure = document.getElementById('departure').value;
            const arrival = document.getElementById('arrival').value;
            
            if (departure && arrival) {
                // Simulation : En réalité, vous utiliserez l'API Directions de Google
                const durations = ['1h30', '2h15', '3h00', '4h45'];
                const randomDuration = durations[Math.floor(Math.random() * durations.length)];
                
                document.getElementById('duration').value = randomDuration;
                document.getElementById('distanceBadge').innerHTML = 
                    `<i class="fas fa-road me-1"></i>~${Math.floor(Math.random() * 300) + 100} km`;
            }
        }

        // Initialisation
        document.addEventListener('DOMContentLoaded', function() {
            // Date minimum = aujourd'hui
            document.getElementById('date').min = new Date().toISOString().split('T')[0];
            initAutocomplete();
        });
    </script>
</body>
</html>