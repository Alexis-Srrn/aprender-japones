<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 3</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 3</h1>

          <p>En esta ocasión Rhodofe mantiene una pequeña conversación con Takeshi (el kanji de su nombre es 武), un compañero de su clase que quiere saber un poco más acerca de sus gustos. Un tanto nerviosa, Rhodofe ha olvidado un poco las conjugaciones de los adjetivos así que tendremos que ayudarla. ¿Estás listo?</p>



          <p class="leccion">Vocabulario:</p>

          <ul>
              <li>  <b>ロドフェ</b> - La forma de escribir Rhodofe en Katakana</li>
              <li>うん - sí</li>
              <li>ううん - no</li>
              <li>  いい - bueno</li>
              <li>  かっこいい - que mola, buen aspecto</li>
              <li>  有名 【ゆうめい】 - famoso</li>
              <li>  好き 【すき】 - gustar</li>
              <li>  楽しい 【たのしい】 - divertido</li>
              <li>  大切 【たいせつ】 - importante</li>
              <li>  辛い 【からい】 - picante</li>
              <li>  料理 【りょうり】 - cocina</li>
          </ul><br><br>

          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <p>**********</p>
          <br>


          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">



            <p id="Pregunta1">1. Al no verla a la vista, Takeshi pregunta por su amiga Alicia para saber si está o no ocupada. (Rhodofe no sabe dónde está, pero sabe que <b>no</b> está ocupada):</p>
            <p>武）　アリス、今　は　忙しい？</p>
            <p>ロドフェ）ううん、_______。</p></br>

            <input type="radio" name="p2" value="x">a. 忙しくない。 </br>
            <input type="radio" name="p2" value="-">b. 忙しい。 </br>
            <input type="radio" name="p2" value="-">c. 忙しくなかった。</br>


            <p id="Pregunta2">2. A Rhodofe le preguntan si le gusta la comida picante (A ella no le gusta):</p>
            <p>武）辛い　料理は、好き？</p>
            <p>  ロドフェ）　ううん、_______　が　好きだ。</p></br>
            <input type="radio" name="p1" value="-">a. 辛い料理。</br>
            <input type="radio" name="p1" value="x">b. 辛くない料理。</br>
            <input type="radio" name="p1" value="-">c. 辛かった料理。</br>

            <p id="Pregunta3">3. Notando que Takeshi parece desanimarse un poco con la conversación, Rhodofe se anima a ser ella quien pregunte por alguno de sus gustos. ¿Recordará la partícula correcta?</p>
            <p>ロドフェ）　何____楽しい？</p>
            <p>武）　ゲーム が 楽しい。</p></br>
            <input type="radio" name="p3" value="-">a. は。 </br>
            <input type="radio" name="p3" value="-">b. も。 </br>
            <input type="radio" name="p3" value="x">c. が。</br>

            <p id="Pregunta4">4. La conversación resupera su curso, Takeshi habla durante un rato sobre sus videojuegos favoritos y una persona que al parecer es importante para él y con quien juega mucho. Rhodofe se atreve a preguntar de quién se trata</p>
            <p>ロドフェ）　______人は誰？</p>
            <p>武）　ジム　が　大切だ。</p></br>
            <input type="radio" name="p4" value="-">a. 大切は。</br>
            <input type="radio" name="p4" value="-">b. 大切が。</br>
            <input type="radio" name="p4" value="x">c. 大切な。</br>


            <p id="Pregunta5">5. Rhodofe se soprende, pensando que habla de Jim, el maestro de ingles de la facultad, así que pregunta por ello:</p>
            <p>ロドフェ）　ジムは学生？</p>
            <p>武）ううん、______。</p>

            </br>
            <input type="radio" name="p5" value="-">a. 学生だ。 </br>
            <input type="radio" name="p5" value="x">b. 学生じゃない。 </br>
            <input type="radio" name="p5" value="-">c. 学生じゃなかった。</br>

            <p id="Pregunta6">6. Rhodofe le habla sobre un personaje ficticio de una revista de su país llamado “Rodrigo Santos”, despertando la curiosidad de su nuevo amigo.</p>
            <p>武）　ロドリゴ　は　、かっこいい人？</p>
            <p>ロドフェ）　うん、　________。</p>
            </br>
            <input type="radio" name="p6" value="x">a.  かっこいい。 </br>
            <input type="radio" name="p6" value="-">b. かっこよくない。 </br>
            <input type="radio" name="p6" value="-">c. かっこよくなかった。</br>

            <p id="Pregunta7">7. Al preguntarle si ese tal Rogrido Santos es famoso Rhodofe admite que no, no lo era (<b>En pasado</b>)</p>
            <p>武）　ロドリゴは、有名な　人？</p>
            <p>ロドフェ）　ううん、_______。</p>
            </br>
            <input type="radio" name="p7" value="-">a. 有名い。 </br>
            <input type="radio" name="p7" value="-">b. 有名じゃない。 </br>
            <input type="radio" name="p7" value="x">c. 有名じゃなかった。</br>

            <p id="Pregunta8">8. Por último, Takeshi menciona el exámen que hicieron ayer, en el cual a Rhodofe le fue muy mal.</p>
            <p>アリス）　昨日のテストは、よかった？</p>
            <p>ロドフェ）　ううん、________。</p></br>
            <input type="radio" name="p8" value="-">a. いい。 </br>
            <input type="radio" name="p8" value="-">b. よくない。</br>
            <input type="radio" name="p8" value="x">c. よくなかった。</br>

            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>


            <p>Poco a poco Rhodofe adquiere confianza para sostener una conversación sencilla. Esperemos que siga mejorando junto a nosotros en las siguientes lecciones.</p>
            <p>Recuerda que puedes volver a hacer el cuestionario hasta lograr las respuestas correctas o regresar a la lección.
            Cuando estés listo te invitamos a continuar con la lección 4.</p>


          <a href="../leccion_3.php"><input type="button" value="Regresemos a la leccion 3"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_4.php"><input type="button" value="¡Lección 4!"></a>

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
