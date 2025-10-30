function jourtravaille(date){
  const joursFeries2020 = [
  "2020-01-01",
  "2020-04-13",
  "2020-05-01",
  "2020-05-08",
  "2020-05-21",
  "2020-06-01",
  "2020-07-14",
  "2020-08-15",
  "2020-11-01",
  "2020-11-11",
  "2020-12-25"
];

for (let i = 0; i < joursFeries2020.length; i++) {
  if(date === joursFeries2020[i]){
    let newDate = new Date(date);
    let jour = newDate.getDate();
    let mois = newDate.getMonth()+1;
    let annee = newDate.getFullYear();
    console.log(`Le ${jour} ${mois} ${annee} est un jour férié`);
  }    
}
}

jourtravaille("2020-07-14");
