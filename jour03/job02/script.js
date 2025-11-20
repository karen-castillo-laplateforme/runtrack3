$(document).ready(function(){

  const imagesBase = [];
  $("img").each(function() {
    imagesBase.push($(this).attr("src"));
  });

  $("button").click(function() {

    const imagesSorted = [];

  $("img").each(function() {
    const random = Math.floor(Math.random() * 6) + 1;
    const newSrc = `assets/images/arc${random}.png`;
    $(this).attr("src", newSrc);
    imagesSorted.push(newSrc);
    });

    const areEqual = imagesBase.every((value, index) => value === imagesSorted[index]);

    if(areEqual){
        $("p").text("Vous avez gagné");
    } else {
       $("p").text("Vous avez perdu"); 
    }
});
});