function verificarRespuestas(){

  let total = 6;
  var puntos = 0;

  var myForm = document.forms["quizForm"];
  var respuestas = ["a", "b", "c", "a", "a", "c"];

  for(var i = 1; i <= total; i++){
    if(myForm["p" + i].value === null || myForm["p" + i].value === ""){
      alert("Por favor responde la pregunta " + i);
      return false;
    }else{
      if(myForm["p" + i].value === respuestas[i - 1]){
        puntos++;
      }
    }
  }

  var resultado = document.getElementById("resultado");
  resultado.innerHTML = '<h3>Obtuviste <abbr>' + puntos + '</abbr> de <abbr>'+ total +' puntos </abbr></h3>';
  resultado.style.display="flex";
  return false;

}
