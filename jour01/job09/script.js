function tri(numbers, order){
  if(order === "asc"){
    return numbers.sort(function (a, b){
        return a - b;
    })
  } else if(order === "desc"){
    return numbers.sort(function (a, b){
        return b - a;
    })
  }
}

const nombres = [22, 11, 3];
console.log(tri(nombres, "desc"));