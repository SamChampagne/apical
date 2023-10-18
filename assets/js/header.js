document.addEventListener('DOMContentLoaded',function(){

    const loginIcon = document.getElementById('login-icone');
    const loginForm = document.getElementById('login-form');
    const closeForm = document.getElementById('close-form');

    // Ajoutez un gestionnaire de clic à l'icône "Login" pour afficher le formulaire
    loginIcon.addEventListener('click', function() {
    loginForm.style.display = 'block';
});

    // Ajoutez un gestionnaire de clic pour le lien "Fermer" dans le formulaire
    closeForm.addEventListener('click', function() {
    loginForm.style.display = 'none';
});

});

