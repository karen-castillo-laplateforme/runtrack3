const signUpForm = document.getElementById("formulaireInscription");
const signInForm = document.getElementById("formulaireConnexion");
const message = document.createElement("p");
const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

//Formulaire inscription
if(signUpForm){
  signUpForm.addEventListener("submit", async function(e){
  e.preventDefault(); 

  const formData = new FormData(signUpForm);
  const inputsObject = Object.fromEntries(formData);
  const passwordRegex = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;

  const data = {
  action: "signUp",
  email: inputsObject.email.trim(),
  nom: inputsObject.lastname.trim(),
  prenom: inputsObject.firstname.trim(),
  password: inputsObject.password.trim(),
  confirmPassword: inputsObject.confirmPassword.trim()
};

  if (!data.email || !data.nom || !data.prenom || !data.password || !data.confirmPassword) {
  message.textContent = "Tous les champs obligatoires doivent être remplis.";
  signUpForm.before(message);
  return;
  }

  const email = document.getElementById("email");
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirmPassword");

  if (!emailRegex.test(data.email)) {
    message.textContent = "Le format de l'email est incorrect";
    signUpForm.before(message);
    email.value = "";
    return;
  }

  if (data.password !== data.confirmPassword) {
    message.textContent = "Les mots de passe ne correspondent pas.";
    signUpForm.before(message);
    password.value = "";
    confirmPassword.value = "";
    return;
  }

  if (!passwordRegex.test(data.password)) {
    message.textContent = "Le format du mot de passe n'est pas respecté.";
    signUpForm.before(message);
    password.value = "";
    confirmPassword.value = "";
    return;  
  }

  // Si tout est ok
  try {
    const response = await fetch("../model/users.php", {
      method: "POST",
      headers: {"Content-Type": "application/x-www-form-urlencoded"},
      body: new URLSearchParams(data)
    });

    const text = await response.text();
    const result = JSON.parse(text);
    console.log("RESULT :", result);

    if(result.status === "ok"){
      window.location.href = "../pages/connexion.php";
    } else {
      message.textContent = "Erreur lors de l'inscription";
      signUpForm.before(message);
    }
  } catch (error) {
    console.error("Erreur de réseau ou traitement serveur :", error);
    message.textContent = "Erreur réseau, veuillez réessayer plus tard.";
    signUpForm.before(message);
  }
  });
}

//Formulaire connexion
if(signInForm){
  signInForm.addEventListener("submit", async function(e){

  e.preventDefault();

  //1.Récupérer les données
  const formData = new FormData(signInForm);
  const inputsObject = Object.fromEntries(formData);

  const data = {
    action: "signIn",
    email: inputsObject.email.trim(),
    password: inputsObject.password.trim()
  };

  //2. Vérifier que le format email est respecté
  if(!emailRegex.test(data.email)){
    message.textContent="Le format de l'email est incorrect";
    signInForm.before(message);
    return;
  }
  
  //3. Créer une requête vers la BDD pour obtenir les données du user grâce à son mail
  try {
    const response = await fetch("../model/users.php", {
      method: "POST",
      headers: {"Content-Type": "application/x-www-form-urlencoded"},
      body: new URLSearchParams(data)
    });

    console.log("RESPOSE :", response);
    

    const text = await response.text();
    const result = JSON.parse(text);
    console.log("RESULT", result);

    if(result.status === "ok"){
      window.location.href = "../index.php";
    } else {
      message.textContent = "Erreur lors de l'inscription";
      signInForm.before(message);
    }
  } catch (error) {
      console.error("Erreur de réseau ou traitement serveur :", error);
      message.textContent = "Erreur réseau, veuillez réessayer plus tard.";
      signInForm.before(message);
  }
});
}

