function verificarRespuestas(){

  let total = 8;
  var puntos = 0;

  var myForm = document.forms["quizForm"];


  for(var i = 1; i <= total; i++){
    if(myForm["p" + i].value === null || myForm["p" + i].value === ""){
      alert("Por favor responde la pregunta " + i);
      return false;
    }else{
      if(myForm["p" + i].value === "x"){
        puntos++;
        let respuesta = document.getElementById("Pregunta" + i);
        respuesta.style.background = "#46a2fd";
      }else{
        let respuesta = document.getElementById("Pregunta" + i);
        respuesta.style.background = "red";
        respuesta.style.color = "white";
      }
    }
  }

  var resultado = document.getElementById("resultado");
  resultado.innerHTML = '<h3>Obtuviste <abbr>' + puntos + '</abbr> de <abbr>'+ total +' puntos </abbr></h3>';
  resultado.style.display="flex";
  return false;

}
