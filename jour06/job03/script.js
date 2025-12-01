const hamburgerBtn = document.getElementById('hamburger');
const navMenu = document.getElementById('nav-menu');

hamburgerBtn.addEventListener('click', () => {
  // Bascule la classe 'active' sur le menu pour l'afficher/le masquer
  navMenu.classList.toggle('active');
  // Optionnel: change l'apparence du bouton pour un X
  hamburgerBtn.classList.toggle('is-open');
});