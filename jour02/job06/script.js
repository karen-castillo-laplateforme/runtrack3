// let array = [];
//   const konamiCheetCode = ["ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", "ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a"];

// window.addEventListener("keydown", (e)=>{
//   console.log(e);
  
//   const body = document.querySelector("body");

//   if(array.length === 10){
//     array.push(e.key);
//     const areEqual = konamiCheetCode.every((value, index) => value === array[index]);
//     if(areEqual){
//       body.style.backgroundColor = "blue";
//     } 
//   } else {
//         array = [];
//     }
//     console.log(array);
//     return array;
  
// });


let array = [];
const konamiCheetCode = ["ArrowUp", "ArrowUp", "ArrowDown", "ArrowDown", "ArrowLeft", "ArrowRight", "ArrowLeft", "ArrowRight", "b", "a"];

window.addEventListener("keydown", (e)=>{
  console.log(e);
  array.push(e.key);

  const currentIndex = array.length - 1;

  if(array[currentIndex] !== konamiCheetCode[currentIndex]){
    array = [];
    return;
  }

  if(array.length === konamiCheetCode.length){
    document.body.style.backgroundColor = "blue";

    array = [];
  }
});

