function showhide(){
  const button = document.getElementById("button");

  button.addEventListener("click", function(e) {
    e.innerHTML = "<article>L'important n'est pas la chute, mais l'atterrissage</article>";
  });

} 