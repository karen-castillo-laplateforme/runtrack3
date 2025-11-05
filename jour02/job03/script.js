//Récupérer le bouton, le mettre sur écoute et incrémenter le compteur.
const button = document.getElementById("button");

  button.addEventListener("click", function(){
    const compteur = document.getElementById("compteur");
    compteur.textContent = Number(compteur.textContent) + 1;
  })