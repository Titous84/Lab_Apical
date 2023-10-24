// Fonction pour enregistrer une formation consultée
function saveViewedFormation(formationUrl) {
    // Obtenez la liste existante des formations, ou initialisez une nouvelle liste si elle n'existe pas
    var viewedFormations = JSON.parse(localStorage.getItem('viewedFormations')) || [];

    // Ajoutez la nouvelle formation à la liste
    // (vous voudrez peut-être vérifier si elle est déjà dans la liste et mettre à jour sa position)
    viewedFormations.push(formationUrl);

    // Enregistrez la liste mise à jour dans localStorage
    localStorage.setItem('viewedFormations', JSON.stringify(viewedFormations));
}

// Fonction pour afficher les dernières formations consultées dans le sous-menu
function displayViewedFormations() {
    // Obtenez la liste des formations
    var viewedFormations = JSON.parse(localStorage.getItem('viewedFormations')) || [];

    // Trouvez les éléments de menu pour les dernières formations
    var lastViewed1 = document.getElementById('lastViewed1');
    var lastViewed2 = document.getElementById('lastViewed2');

    // Mettez à jour les éléments de menu avec les informations des formations
    // (cet exemple suppose que vous voulez afficher les deux dernières formations de la liste)
    lastViewed1.href = viewedFormations[viewedFormations.length - 2];
    lastViewed2.href = viewedFormations[viewedFormations.length - 1];
}

// Fonction pour réinitialiser la liste des formations consultées
function resetViewedFormations() {
    // Videz la liste des formations dans localStorage
    localStorage.setItem('viewedFormations', JSON.stringify([]));

    // Vous pourriez également vouloir mettre à jour l'affichage pour refléter la liste vide
    displayViewedFormations();
}

// Cette fonction est appelée lorsque le DOM est entièrement chargé
document.addEventListener('DOMContentLoaded', function() {
    // Appelle la fonction pour afficher les formations consultées
    displayViewedFormations();

    // Attache un écouteur d'événements au bouton de réinitialisation
    document.getElementById('resetList').addEventListener('click', function() {
        // Appelle la fonction pour réinitialiser la liste des formations
        resetViewedFormations();
    });
});
