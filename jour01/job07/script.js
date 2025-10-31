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
  const newDate = new Date(date);
  const jour = newDate.getDay();
  const jourDuMois = newDate.getDate();
  const mois = newDate.getMonth()+1;
  const annee = newDate.getFullYear();

    if(date === joursFeries2020[i]){
    console.log(`Le ${jourDuMois} ${mois} ${annee} est un jour férié`);
    }
    
    if(jour === 0 || jour === 6){
      console.log(`Non, le ${jourDuMois} ${mois} ${annee} est un week-end.`);
    } else {
      console.log(`Oui, le ${jourDuMois} ${mois} ${annee} est un jour travaillé.`);
    }
}
}

jourtravaille("2020-07-23");
