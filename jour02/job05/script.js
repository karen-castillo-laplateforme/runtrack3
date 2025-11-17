const footer = document.querySelector("footer");

window.addEventListener("scroll", () => {
  // 1️⃣ Combien de pixels depuis le haut
  const scrollTop = window.scrollY;

  // 2️⃣ Hauteur totale de la page moins la fenêtre visible
  const docHeight = document.body.scrollHeight - window.innerHeight;

  // 3️⃣ Pourcentage de scroll (0 à 1)
  const scrollPercent = scrollTop / docHeight;

  // 4️⃣ Calcul des couleurs
  const red = Math.floor(255 * (1 - scrollPercent));
  const green = Math.floor(255 * scrollPercent);
  const blue = 100;

  // 5️⃣ Application de la couleur sur le footer
  footer.style.backgroundColor = `rgb(${red}, ${green}, ${blue})`;

  // 6️⃣ Affichage pour comprendre
  console.log(`Scroll: ${scrollTop}px / ${docHeight}px → ${Math.round(scrollPercent*100)}%`);
  console.log(`Couleur RGB: (${red},${green},${blue})`);
});
