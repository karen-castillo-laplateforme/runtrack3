function sommenombrespremiers(nbr1, nbr2){
  if(nbr1 > 1 || nbr2 > 1){
    if(Number.isInteger(Math.sqrt(nbr1))=== false && Number.isInteger(Math.sqrt(nbr2))=== false){
      return nbr1 + nbr2;
    }
  }
  return false;
}

console.log(sommenombrespremiers(8, 4));