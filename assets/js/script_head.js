// Fonction pour recharger la page
function rechargerPage() {
    location.reload(); // Recharge la page
}

// Fonction pour vérifier si la page est chargée
function verifierChargementPage() {
    // Si la page n'est pas chargée après 5 secondes, recharge la page
    setTimeout(rechargerPage, 5000);
}

// Appel initial pour vérifier le chargement de la page
verifierChargementPage();