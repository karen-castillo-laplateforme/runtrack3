const button = document.getElementById("update");
const tbody = document.querySelector("tbody");

button.addEventListener("click", async()=>{
  console.log("cool");
  try {
    const response = await fetch("users.php");

    if(!response){
      throw new Error("Erreur HTTP :", response.status);
    }

    const users= await response.json();
    console.log("USERS:", users);
 
    tbody.innerHTML = users.map(user =>`
      <tr>
        <td>${user.id}</td>
        <td>${user.prenom}</td>
        <td>${user.nom}</td>
        <td>${user.email}</td>
        </tr>
        `).join("");
        
  } catch (error) {
    console.error("Erreur : ", error)
  }
});