function jsonValueKey(string, key){
  const jsonObj = JSON.parse(string);
  console.log(jsonObj[key]);
}

const jsonStr = '{"name": "La Plateforme_","address": "8 rue d\'hozier", "city": "Marseille","nb_staff": "11", "creation":"2019"}';

jsonValueKey(jsonStr, "city");