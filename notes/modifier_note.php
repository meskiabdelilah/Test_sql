<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>TP 1.5 — TODO: Modifier une note</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container mt-5">
    <a href="#" class="btn btn-secondary mb-3">← Retour</a>
    <h1>TP 1.5 — TODO: Modifier une note</h1>
    <p class="text-muted">Tâches : charger la note par ID, valider et mettre à jour (page sans PHP).</p>

    <ul>
      <li>TODO: Charger l'enregistrement par <code>id</code> (GET).</li>
      <li>TODO: Pré-remplir le formulaire et valider la soumission côté serveur.</li>
      <li>TODO: Rediriger vers <code>etudiants/etudiant_details.php?id=...&success=note_updated</code> après succès.</li>
    </ul>

    <form method="POST" action="modifier_note.php">
      <input type="hidden" name="id" value="10">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label class="form-label">Matière</label>
          <input type="text" name="matiere" class="form-control" value="">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Note</label>
          <input type="number" step="0.1" min="0" max="20" name="note" class="form-control" value="">
        </div>
        <div class="col-md-3 mb-3">
          <label class="form-label">Coefficient</label>
          <input type="number" min="1" name="coefficient" class="form-control" value="1">
        </div>
      </div>

      <div class="mb-3">
        <label class="form-label">Date</label>
        <input type="date" name="date_note" class="form-control" value="">
      </div>

      <div class="mb-3">
        <label class="form-label">Commentaire</label>
        <textarea name="commentaire" class="form-control"></textarea>
      </div>

      <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-secondary">Annuler</a>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
      </div>
    </form>

    <p class="text-muted small mt-3">Page sans PHP — remplacez par votre implémentation serveur.</p>
  </div>
</body>
</html>    

