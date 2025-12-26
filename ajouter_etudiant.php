

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <style>
        body { background-color: #f8f9fa; padding-top: 20px; }
        .container { max-width: 800px; }
        .card { box-shadow: 0 0 10px rgba(0,0,0,0.1); }
    </style>
</head>
<body>
    <div class="container">
        <!-- En-tête -->
        <div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">
                    <i class="bi bi-person-plus-fill text-primary"></i>
                    Ajouter un Nouvel Étudiant
                </h2>
            </div>
        </div>

        <!-- TODO: Afficher les erreurs côté serveur (ex : boucle sur $errors) -->

        <!-- Formulaire d'ajout -->
        <div class="card">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="row">
                        <!-- Nom -->
                        <div class="col-md-6 mb-3">
                            <label for="nom" class="form-label">Nom *</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="nom" 
                                   name="nom" 
                                   value=""
                                   required>
                        </div>

                        <!-- Prénom -->
                        <div class="col-md-6 mb-3">
                            <label for="prenom" class="form-label">Prénom *</label>
                            <input type="text" 
                                   class="form-control" 
                                   id="prenom" 
                                   name="prenom" 
                                   value=""
                                   required>
                        </div>
                    </div>

                    <div class="row">
                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" 
                                   class="form-control" 
                                   id="email" 
                                   name="email" 
                                   value=""
                                   required>
                        </div>

                        <!-- Téléphone -->
                        <div class="col-md-6 mb-3">
                            <label for="telephone" class="form-label">Téléphone</label>
                            <input type="tel" 
                                   class="form-control" 
                                   id="telephone" 
                                   name="telephone" 
                                   value=""
                                   placeholder="06xxxxxxxx">
                        </div>
                    </div>

                    <div class="row">
                        <!-- Classe -->
                        <div class="col-md-6 mb-3">
                            <label for="classe" class="form-label">Classe *</label>
                            <select class="form-select" id="classe" name="classe" required>
                                <option value="">-- Sélectionner une classe --</option>
                                <option value="Sixième">Sixième</option>
                                <option value="Cinquième">Cinquième</option>
                                <option value="Quatrième">Quatrième</option>
                                <option value="Troisième">Troisième</option>
                                <option value="Seconde">Seconde</option>
                                <option value="Première L">Première L</option>
                                <option value="Première S">Première S</option>
                                <option value="Première ES">Première ES</option>
                                <option value="Terminale L">Terminale L</option>
                                <option value="Terminale S">Terminale S</option>
                                <option value="Terminale ES" <?php echo (isset($_POST['classe']) && $_POST['classe'] == 'Terminale ES') ? 'selected' : ''; ?>>Terminale ES</option>
                            </select>
                        </div>

                        <!-- Date de naissance -->
                        <div class="col-md-6 mb-3">
                            <label for="date_naissance" class="form-label">Date de Naissance *</label>
                            <input type="date" 
                                   class="form-control" 
                                   id="date_naissance" 
                                   name="date_naissance" 
                                   value=""
                                   required>
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div class="d-flex justify-content-between mt-4">
                        <a href="/" class="btn btn-secondary">
                            <i class="bi bi-arrow-left"></i> Retour
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save"></i> Enregistrer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>