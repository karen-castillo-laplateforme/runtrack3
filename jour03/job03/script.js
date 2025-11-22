const solution = [
    "1.png", "2.png", "3.png",
    "4.png", "5.png", "6.png",
    "7.png", "8.png", "vide.png"
  ];

  //On crée une copie de la solution et on modifie les index de chaque image.
  function genererPlateau(){
    const plateau = solution.map(image => image);

    // Mélange Fisher-Yates
    for(let i = plateau.length - 1; i > 0; i--){
    const nouvelIndex = Math.floor(Math.random() * (i + 1));
    let tmp = plateau[i];
    plateau[i] = plateau[nouvelIndex];
    plateau[nouvelIndex] = tmp;
  }

  //On ajoute les images dans le DOM
  plateau.forEach((image, index)=>{
    const img = $("<img>");
    img.attr("src", "assets/images/"+ image);
    $("#plateau").append(img);
  });
  return plateau;
  }

$(function(){
  //Ajouter l'image "9.png" à la fin du jeu lorsque les images sont dans l'ordre te remplacer le vide par l'image 9.
  let plateau = genererPlateau();

  //On rend les images clickables
  $(document).on("click", "#plateau img", function(){
    const imageCliqueeIndex = $(this).index();
    const caseVideIndex = plateau.indexOf("vide.png");
    
    // On vérifie si la case vide est adjacente à la case cliquée
    const peutBouger =
    caseVideIndex + 1 === imageCliqueeIndex && caseVideIndex % 3 !== 2 || 
    caseVideIndex - 1 === imageCliqueeIndex && caseVideIndex % 3 !== 0 || 
    caseVideIndex + 3 === imageCliqueeIndex ||
    caseVideIndex - 3 === imageCliqueeIndex; 

    if(peutBouger){
      const temp = plateau[imageCliqueeIndex];
      plateau[imageCliqueeIndex] = plateau[caseVideIndex];
      plateau[caseVideIndex] = temp;
      
      //On met à jour le DOM
      $("#plateau img").each(function(index){
        $(this).attr("src", "assets/images/"+ plateau[index]);
      });
    }

    const gagne = plateau.every((val, index) => val === solution[index]);

    if(gagne){
      const message = $("<p></p>").text("Vous avez gagné !").css("color", "green");
      $("#plateau").after(message);
      $("#plateau img").off("click");

      const bouton = $("<button>Recommencer</button>");
      $("#plateau").after(bouton);

      $("button").click(function(){
        $("#plateau").empty();
        $("#plateau + p").remove();
        plateau = genererPlateau();
      })
    }

  })
})




