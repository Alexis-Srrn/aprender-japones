<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 2</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 2</h1>
          <p>Tendremos a continuación un breve cuestionario para practicar lo aprendido en la lección 2.Pero ojo, para hacer esto más entretenido seguiremos una especie de mini historia donde ayudaremos a nuestra amiga Rhodofe (una joven estudiante de universidad que ha ido a japón sin saber japonés) a responder en cada problema que se le presente de la mejor manera posible.
          ya que somos los únicos que podemos darle una mano. ¿Estás listo?</p>


          <p>Antes de comenzar te hemos preparado una lista de vocabulario que necesitarás para poder ayudar a Rhodofe.</p>
          <p class="leccion">Vocabulario:</p>

          <ul>
                <li>ミーティング - reunión</li>
                <li>ボールペン - bolígrafo</li>
                <li>何【なに】 - qué</li>
                <li>誰【だれ】 - quién</li>
                <li>  映画【えいが】 - película</li>
                <li>  彼【かれ】 - él, novio</li>
                <li>  彼女【かのじょ】 - ella, novia</li>
                <li>  雨【あめ】 - lluvia</li>
                <li>  昨日【きのう】 - ayer</li>
                <li>  今日【きょう】 - hoy</li>
                <li>  明日【あした】 - mañana</li>
                <li>  知り合い【しりあい】 - conocido</li>
                <li>  鉛筆【えんぴつ】 - lápiz</li>
                <li>  仕事【しごと】 - trabajo</li>
                <li>  入口【いりぐち】 - entrada</li>
                <li>  出口【でぐち】 - salida</li>
                <li>  図書館【としょかん】 - librería</li>
          </ul><br><br>

          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <br>

          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">

            <p id="Pregunta1">1. Rhodofe se encuentra en los jardines de la universidad. Un chico se acerca a ella y pregunta quién es Alicia. No escucha bien la pregunta, así que no está segura de qué partícula ha usado y quiere saberlo para memorizarla:
            «アリス____誰？»</p></br>
            <input type="radio" name="p1" value="x">a. は。</br>
            <input type="radio" name="p1" value="-">b. も。</br>
            <input type="radio" name="p1" value="-">c. が。</br>


            <p id="Pregunta2">2. Rhodofe intenta responder la pregunta del chico. Como su vocabulario no es mucho al menos puede señalarla a lo lejos, pero las partículas le dan problemas: «彼女____アリスだ»</p></br>
            <input type="radio" name="p2" value="-">a. は。 </br>
            <input type="radio" name="p2" value="-">b. も。 </br>
            <input type="radio" name="p2" value="x">c. が。</br>


            <p id="Pregunta3">3. El chico le entrega dos objetos a Rhodofe, pidiéndole que se los entregue a Alicia por él. Es obvio que uno es un lápiz, sin embargo el otro luce extraño. Rhodofe quiere preguntarle si ese <b>también</b> es un lápiz. «これ____鉛筆？»</p></br>
            <input type="radio" name="p3" value="-">a. は。 </br>
            <input type="radio" name="p3" value="x">b. も。 </br>
            <input type="radio" name="p3" value="-">c. が。</br>

            <p id="Pregunta4">4. Rhodofe se reúne con Alicia, quien le dice que tiene que entregar un libro en la biblioteca. Como ella nunca ha estado allí quiere preguntarle a su amiga dónde se encuentra: «図書館___どこ？»</p></br>
            <input type="radio" name="p4" value="x">a. は。 </br>
            <input type="radio" name="p4" value="-">b. も。 </br>
            <input type="radio" name="p4" value="-">c. が。</br>


            <p id="Pregunta5">5.Alicia le responde «ここ____図書館だ» Señalando el interior de un pasillo donde hay dos puertas. Rhodofe intenta memorizar la partícula correcta de esa frase.</p></br>
            <input type="radio" name="p5" value="-">a. は。 </br>
            <input type="radio" name="p5" value="-">b. も。 </br>
            <input type="radio" name="p5" value="x">c. が。</br>

            <p id="Pregunta6">6. Para Rhodofe ambas puertas en el pasillo lucen iguales. Para probar un poco su lenguaje intenta proponer una de las puertas con algo como “¿No es aquí la biblioteca?”, solo necesita recordar la partícula correcta: «そこ____図書館じゃない？»</p></br>
            <input type="radio" name="p6" value="x">a. は。 </br>
            <input type="radio" name="p6" value="-">b. も。 </br>
            <input type="radio" name="p6" value="-">c. が。</br>

            <p id="Pregunta7">7. Y para su mala suerte ha elegido la puerta equivocada: «そこじゃない。図書館____ここだ。» Solo le queda memorizar la partícula correcta.</p></br>
            <input type="radio" name="p7" value="x">a. は。 </br>
            <input type="radio" name="p7" value="-">b. も。 </br>
            <input type="radio" name="p7" value="-">c. が。</br>

            <p id="Pregunta8">8.No dispuesta a quedarse con dudas, Rhodofe abre la puerta supuestamente equivocada. Es una rara extensión de la biblioteca del otro lado así que quiere decirle a Rhodofe que “Aquí también es la biblioteca”: «図書館_____ここだ。»</p></br>
            <input type="radio" name="p8" value="-">a. は。 </br>
            <input type="radio" name="p8" value="x">b. も。 </br>
            <input type="radio" name="p8" value="-">c. が。</br>

            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>



          <p>Este es el fin del segundo cuestionario. En una breve situación Rhodofe se ha liado un poco con las partículas, pero también descubierto lo importantes que son en el uso cotidiano del idioma, pues están presentes en cada oración que se le pueda ocurrir.</p>
          <p>Recuerda que puedes volver a hacer el cuestionario hasta lograr las respuestas correctas o regresar a la lección.
            Cuando estés listo te invitamos a continuar con la lección 3.</p>


          <a href="../leccion_2.php"><input type="button" value="Regresemos a la leccion 2"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_3.php"><input type="button" value="¡Lección 3!"></a>

          </article>

        <div class="container-aside">
          <aside>
              <img src="../../../img/ajatt/jisho.png" alt="">
              <h2>Diccionario Online</h2>
              <p>Jisho es un excelente diccionario que te ayudará mucho a lo largo de tu estudio.
                No solo encontrarás cualquier palabra, sino que muestra oraciones de ejemplo, el kanji que se usa en su escritura
                 y la forma correcta de escribirlo. También puedes buscar una palabra por el número
                  de radicales, lo cual facilita la consulta como ninguna otra página.
              </p>
              <a href="https://jisho.org/" target="_blank"><button>Ir a Jisho.org</button> </a>
          </aside>

          <aside>
              <img src="../../../img/ajatt/todai.png" alt="">
              <h2>El periódico en tu celular</h2>
              <p>La universidad de Todai nos ofrece esta divertida aplicación para móviles.
                Se actualiza a diario con noticias reales y puedes consultar la traducción de los artículos,
                todos pensados para alguien que está aprendiendo. También ofrece un simulador
                del examen de certificación del idioma, conocido como JLPT.
              </p>
              <a href="https://play.google.com/store/apps/details?id=mobi.eup.jpnews&hl=es_MX&gl=US" target="_blank"><button>Descarga Todai</button> </a>
          </aside>

          <aside>
              <img src="../../../img/ajatt/animelon.png" alt="">
              <h2>¿Te gusta la animación japonesa?</h2>
              <p>Es bien sabido que la gran mayoría de estudiantes del idioma son fanáticos de las animaciones
                conocidas como <b>«Anime».</b> Si es tu caso, Animelon es para ti. Disfruta de todo tipo de series subtituladas
                 en su idioma original (kana y kanji), puedes consultar la gramática frase a frase y tienes la
                 facilidad de copiarlas para crear tus propias tarjetas de estudio.
                Aprende mientras disfrutas de lo que más te gusta.
              </p>
              <a href="https://animelon.com/" target="_blank"><button>Visita Animelon</button> </a>
          </aside>


        </div>

    </div>


    <div class="container-footer">
        <footer>
          <div class="logo-footer">
              <img src="../../../img/logo-ajatt.png" alt="">
          </div>

          <div class="redes-footer">
                <a href="#"><i class="fab fa-facebook-f icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-google-plus-g icon-redes-footer"></i></a>
                <a href="#"><i class="fab fa-instagram icon-redes-footer"></i></a>
          </div>

          <hr>
          <h4>@ 2021 Alexis Serrano Guirao Buap -- Ninguna imagen aquí mostrada es de autoría propia</h4>

        </footer>
    </div>
<script src="../../../js/script-main.js"></script>
<script src="../../../js/script-ejercicio.js"></script>
  </body>
</html>
