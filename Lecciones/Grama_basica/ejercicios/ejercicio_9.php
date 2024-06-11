<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 9</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 9</h1>
            <p>Con las oraciones subordinadas ahora Rhodofe puede calificar sustantivos de una manera versátil. Esto le ayuda a hablar sobre otras personas con sus amigos sin temor a hablar poco. Tratemos de ayudarla a que no cometa errores al intentarlo.</p>




          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <p>**********</p>
          <br>


          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">



            <p id="Pregunta1">1: ¿Quién es la persona que no tiene que ir a la escuela ahora? Obviamente la que no es estudiante.</p>
            <p>アリス）誰 が 学校 に 行かない の？</p>
            <p>ロドフェ）_______ 人 は、学校 に 行かない。</p> </br>
            <input type="radio" name="p1" value="-">a. 学生。 </br>
            <input type="radio" name="p1" value="-">b. 学生だった。 </br>
            <input type="radio" name="p1" value="x">c. 学生じゃない。 </br>
            <input type="radio" name="p1" value="-">d. 学生じゃなかった。</br>




            <p id="Pregunta2">2. Takeshi le pregunta más a Rhodofe acerca de Alicia: Literalmente quiere responder: "La alicia que era una niña, se volvió una gran adulta"</p>
            <p>ロドフェ）______ アリス が 立派 な 大人 に なった。</p></br>

            <input type="radio" name="p2" value="-">a. 学生。 </br>
            <input type="radio" name="p2" value="x">b. 子供だった。 </br>
            <input type="radio" name="p2" value="-">c. 子供じゃない。</br>
            <input type="radio" name="p2" value="-">d. 子供じゃなかった。</br>


            <p id="Pregunta3">3. No siempre Alicia fue su amiga, muchas cosas pasaron. Pero Rhodofe quiere decir "Alicia que no era amiga, se volvió una gran amiga"</p>
            <p>ロドフェ）______ アリス は、いい 友達 に なった。</p></br>
            <input type="radio" name="p3" value="-">a. 友達。 </br>
            <input type="radio" name="p3" value="-">b. 友達だった。 </br>
            <input type="radio" name="p3" value="-">c. 友達じゃない。</br>
            <input type="radio" name="p3" value="x">d. 友達じゃなかった。</br>


            <p id="Pregunta4">4. La conversación se gira en torno a los amigos que Rhodofe tiene en su país. Uno en especial tiene noticias: "Bob <b>que era doctor hasta la semana pasada</b>, ahora dejó su trabajo."</p>
            <p>ロドフェ）______ ボブは、仕事を辞めた。</p>
            </br>
            <input type="radio" name="p4" value="-">a. 先週に医者。 </br>
            <input type="radio" name="p4" value="x">b. 先週に医者だった。 </br>
            <input type="radio" name="p4" value="-">c. 先週に医者じゃない。</br>
            <input type="radio" name="p4" value="-">d. 先週に医者じゃなかった。</br>



            <p id="Pregunta5">5. Comienzan a hablar de un amigo de Takeshi que Alicia conoce y que ve muchas peliculas. Rhodofe se pierde un poco en la conversación, así que quiere preguntar <b>¿Quién es esa persona que vio la película la semana pasada?</b></p>
            <p>ロドフェ）_________ 人は誰？</p></br>
            <input type="radio" name="p5" value="-">a. 先週に映画を 見る。 </br>
            <input type="radio" name="p5" value="x">b. 先週に映画を 見た。 </br>
            <input type="radio" name="p5" value="-">c. 先週に映画を 見ない。</br>
            <input type="radio" name="p5" value="-">d. 先週に映画を 見なかった。</br>

            <p id="Pregunta6">6. Takeshi ha dicho: <b>Alicia es esa persona que siempre estudia.</b></p>
            <p>武）ロドフェ は、________ 人だ</p>
            <p>ロドフェ）ううん,　そうじゃない。</p></br>
            <input type="radio" name="p6" value="x">a. いつも勉強 する。 </br>
            <input type="radio" name="p6" value="-">b. いつも勉強 した。 </br>
            <input type="radio" name="p6" value="-">c. いつも勉強 しない。</br>
            <input type="radio" name="p6" value="-">d. いつも勉強 しなかった。</br>



            <p id="Pregunta7">7. Rhodofe aclara que es Alice la persona que siempre estudiaba (ya no lo hace seguido)</p>
            <p>ロドフェ）アリス は、________ 人だ </p></br>
            <input type="radio" name="p7" value="-">a. いつも勉強 する。 </br>
            <input type="radio" name="p7" value="x">b. いつも勉強 した。 </br>
            <input type="radio" name="p7" value="-">c. いつも勉強 しない。</br>
            <input type="radio" name="p7" value="-">d. いつも勉強 しなかった。</br>


            <p id="Pregunta8">8. La amiga que se compró pantalones rojos es Rhodofe:</p>
            <p>アリス）赤い ズボン を 買う 友達 は ロドフェ だ。</p>
            </br>
            <input type="radio" name="p8" value="-">a. 赤いズボンを 買う。 </br>
            <input type="radio" name="p8" value="x">b. 赤いズボンを 買った。 </br>
            <input type="radio" name="p8" value="-">c. 赤いズボンを 買わない。</br>
            <input type="radio" name="p8" value="-">d. 赤いズボンを 買わなかった。</br>





            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>
            <br><br>
            <p>Es divertido como cada vez podemos formar oraciones más largas y detalladas. La siguiente lección es la última del nivel básico y seguro encontraremos herramientas interesantes para que Rhodofe (y nosotros) mejoremos aún más.</p> <br>
            <p>Recuerda que puedes volver a hacer el cuestionario hasta lograr las respuestas correctas o regresar a la lección.
            Cuando estés listo te invitamos a continuar con la lección 8.</p>


          <a href="../leccion_9.php"><input type="button" value="Regresemos a la leccion 9"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_10.php"><input type="button" value="¡Lección 10!"></a>

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
