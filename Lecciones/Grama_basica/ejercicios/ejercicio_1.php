<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 1</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 1</h1>
          <p>Tendremos a continuación un breve cuestionario para practicar lo aprendido en la lección 1.Pero ojo, para hacer esto más entretenido seguiremos una especie de mini historia donde ayudaremos a nuestra amiga Rhodofe (una joven estudiante de universidad que ha ido a japón sin saber japonés) a responder en cada problema que se le presente de la mejor manera posible.
          ya que somos los únicos que podemos darle una mano. ¿Estás listo?</p>


          <p>Antes de comenzar te hemos preparado una lista de vocabulario que necesitarás para poder ayudar a Rhodofe.</p>
          <p class="leccion">Vocabulario:</p>

          <ul>
            <li>  これ - éste</li>
            <li>それ - ese</li>
            <li>  あれ - aquel</li>
            <li>  こう - (las cosas son) de este modo, así.</li>
            <li>そう - (las cosas son) de aquel modo.</li>
            <li>人 【ひと】 - persona</li>
            <li>大人 【おとな】 - adulto</li>
            <li>子供 【こども】 - niño</li>
            <li>友達 【ともだち】 - amigo</li>
            <li>車 【くるま】 - coche</li>
            <li>学生 【がくせい】 - estudiante</li>
            <li>先生 【せんせい】 - profesor</li>
            <li>学校 【がっこう】 - escuela</li>
            <li>小学校 【しょうがっこう】 - Escuela Elemental</li>
            <li>中学校 【ちゅうがっこう】 - Escuela Secundaria</li>
            <li>高校 【こうこう】 - Escuela Superior</li>
            <li>大学 【だいがく】 - Universidad</li>
          </ul><br><br>

          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <br>

          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">

            <p id="Pregunta1">1. Rhodofe pasea tranquilamente por las calles de japón con una amiga y ve a un vendedor ambulante que dice que las bebidas tienen cierto descuento para estudiantes. Como Rhodofe es estudiante tiene que decir «Soy estudiante»</p></br>
            <input type="radio" name="p1" value="x">a. 学生だ。</br>
            <input type="radio" name="p1" value="-">b. 学生だった。</br>
            <input type="radio" name="p1" value="-">c. 学生じゃない。</br>
            <input type="radio" name="p1" value="-">d. 学生じゃなかった。</br>

            <p id="Pregunta2">2. Su amiga también pide una bebida. El vendedor les pregunta si son hermanas y Rhodofe niega con la cabeza. Ahora quiere decir «Es mi amiga».</p></br>
            <input type="radio" name="p2" value="x">a. 友達だ。。 </br>
            <input type="radio" name="p2" value="-">b. 友達だった。。 </br>
            <input type="radio" name="p2" value="-">c. 友達じゃない。。 </br>
            <input type="radio" name="p2" value="-">d. 友達じゃなかった 。。</br>

            <p id="Pregunta3">3. El señor tiene curiosidad y pregunta a Rhodofe si acaso estudian en una preparatoria cercana. Ella tiene que responder que no, su escuela «Es una universidad»</p></br>
            <input type="radio" name="p3" value="-">a. 大学じゃない。</br>
            <input type="radio" name="p3" value="x">b. 大学だ。 </br>
            <input type="radio" name="p3" value="-">c. 大学だった。 </br>
            <input type="radio" name="p3" value="-">d. 大学じゃなかった。</br>

            <p id="Pregunta4">4. Finalmente se marchan de allí, y Rhodofe tiene la vivencia más impactante de su vida: Presencia el atropellamiento de un joven. Una anciana se acerca y pregunta si era un adulto: Ella tiene que responder que «No era un adulto»</p></br>
            <input type="radio" name="p4" value="-">a. 大人だ。 </br>
            <input type="radio" name="p4" value="-">b. 大人じゃない。 </br>
            <input type="radio" name="p4" value="-">c. 大人だった。 </br>
            <input type="radio" name="p4" value="x">d. 大人じゃなかった。</br>


            <p id="Pregunta5">5. La anciana insiste, lamentando el accidente de un supuesto niño. Rhodofe quiere aclararle que el afectado «No era un niño»</p></br>
            <input type="radio" name="p5" value="-">a. 子供だ。</br>
            <input type="radio" name="p5" value="-">b. 子供じゃない。 </br>
            <input type="radio" name="p5" value="x">c. 子供じゃなかった。</br>
            <input type="radio" name="p5" value="-">d. 子供だった。</br>

            <p id="Pregunta6">6. Los paramédicos llegan al lugar del asunto y preguntan por la persona. Rhodofe quiere explicar que el chico «Era un estudiante»</p></br>
            <input type="radio" name="p6" value="-">a. 学生だ。 </br>
            <input type="radio" name="p6" value="-">b. 学生じゃない。 </br>
            <input type="radio" name="p6" value="-">c. 学生じゃなかった。 </br>
            <input type="radio" name="p6" value="x">d. 学生だった。 </br>

            <p id="Pregunta7">7. Llega la policía para investigar, el conductor que ha atropellado al estudiante por no prestar atención dice que él no tuvo la culpa. Indignada Rhodofe alza la voz para protestar: «Eso no es así»</p></br>
            <input type="radio" name="p7" value="-">a. そうだ。  </br>
            <input type="radio" name="p7" value="x">b. そうじゃない。  </br>
            <input type="radio" name="p7" value="-">c. そうだった。</br>
            <input type="radio" name="p7" value="-">d. そうじゃなかった。 </br>

            <p id="Pregunta8">8. La amiga de Rhodofe (que habla mucho mejor el idioma) declara los verdaderos hechos. La policía regresa con Rhodofe para corroborar. Ella tiene que responder: «Es cierto.»</p></br>
            <input type="radio" name="p8" value="x">a. そうだ。 </br>
            <input type="radio" name="p8" value="-">b. そうじゃない。 </br>
            <input type="radio" name="p8" value="-">c. そうだった。</br>
            <input type="radio" name="p8" value="-">d. そうじゃなかった。 </br>

            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>



          <p>Hasta aquí llegamos con el primer cuestionario. Por el día de hoy la policía deja que Rhodofe y su amiga se vayan y les agradece la ayuda, pero es probable que en futuras
            situaciones sea necesario desenvolverse más al hablar. No siempre su amiga estará con ella, así que tenemos que seguir aprendiendo para poder apoyarla.</p>
            <p>Cuando estés listo te invitamos a continuar con el tema 2.</p>


          <a href="../leccion_1.php"><input type="button" value="Regresemos a la leccion 1"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_2.php"><input type="button" value="¡Lección 2!"></a>

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
