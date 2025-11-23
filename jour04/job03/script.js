//Partie 1 : Ajout des types dynamiquement dans select
const select = document.getElementById("type");
const pokemonTypes = ["Normal","Fire","Water","Electric","Grass","Ice","Fighting","Poison","Ground","Flying","Psychic","Bug","Rock","Ghost","Dragon","Dark","Steel","Fairy"];

pokemonTypes.forEach(type => {
    const option = document.createElement("option");
    option.value = type;
    option.textContent = type;
    select.appendChild(option);
});

//Partie 2 : gestion du formulaire au click
const button = document.getElementById("filterBtn");
const form = document.getElementById("form");
const message = document.createElement("p");

button.addEventListener("click", async()=> {
  //Reset affichage précédent
  document.querySelector("table")?.remove();
  message.textContent = "";

  //Récupération données du form
  const formData = new FormData(form);
  const formDataObj = Object.fromEntries(formData);
  const { id, nom, type } = Object.fromEntries(formData);

  try {
  const response = await fetch("pokemon.json");
  if(!response.ok){
    throw new Error ("Erreur HTTP : " + response.status);
  }

  let pokemons = await response.json();

  //Filtrer l'objet pokemons

  if(id){
    pokemons = pokemons.filter(p => p.id === parseInt(id));
  }
  
  if(nom){
      pokemons = pokemons.filter(p => p.name.french.toLowerCase().includes(nom.toLowerCase()));
  }

  if(type){
        pokemons = pokemons.filter(pokemon => pokemon.type.includes(type));
      }
    
    form.after(message);

    if(pokemons.length === 0){
        message.textContent = "Pokemon non trouvé";
        return;
    } 
    
    message.textContent = "Pokemon trouvé ✅";

    //Création tableau récap
    const table = document.createElement("table");

    table.innerHTML = `
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      `;

      message.after(table);

      const tbody = table.querySelector("tbody");

      tbody.innerHTML = pokemons.map(p => 
        `<tr>
           <td>${p.id}</td>
           <td>${p.name.french}</td>
           <td>${p.type.join(", ")}</td>
        </tr>
        `).join("");


  } catch (error) {
    console.error("Problème dans la récupération de données :", error); 
  }
 
})