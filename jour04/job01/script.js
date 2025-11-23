button = document.getElementById("button");

button.addEventListener("click", 
  async () => {
    button.disabled = true;
    button.textContent = "Chargement";

    try {
      const response = await fetch("expression.txt");

      if(!response.ok){
        throw new Error("Erreur HTTP :" + response.status);
      }

      const expression = await response.text();

      const p = document.createElement("p");
      p.textContent = expression;

      button.before(p); 

    } catch (error) {
       console.error("Problème dans la récupération de données :", error); 
    } finally {
        button.disabled = false;
        button.textContent = "Click me";
    }
  });