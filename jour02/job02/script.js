// script.js

function showHideArticle() {
  const button = document.getElementById("button");

  // Vérifie si l'article existe déjà dans le DOM
  let article = document.querySelector("#my-article");

  if (!article) {
    // Création de l'article la première fois
    article = document.createElement("article");
    article.id = "my-article"; // donne un id pour le retrouver facilement
    article.textContent = "L'important n'est pas la chute, mais l'atterrissage";
    article.style.display = "none"; // caché au départ
    document.body.insertBefore(article, button);
  }

  // Toggle affichage / masquage
  if (article.style.display === "none") {
    article.style.display = "block";
  } else {
    article.style.display = "none";
  }
}

// Attache la fonction au clic du bouton
const button = document.getElementById("button");
button.addEventListener("click", showHideArticle);
