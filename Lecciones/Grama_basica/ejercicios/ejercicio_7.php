<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 7</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 7</h1>
            <p>Ahora que Rhodofe tiene en la mente tantas partículas diferentes, es muy fácil expresar más ideas… y confundirse. El día de hoy veremos algunas conversaciones con sus amigos (en presente y pasado) donde deberá demostrar su dominio sobre cada partícula. ¿Estás listo para ayudarla?</p>



          <p class="leccion">Vocabulario:</p>

          <ul>
              <li>  <b>ロドフェ</b> - La forma de escribir Rhodofe en Katakana</li>
              <li>うん - sí</li>
              <li>ううん - no</li>
              <li>  する -hacer</li>
              <li>  しゃべる - hablar; charlar</li>
              <li>  見る【みる】 - ver</li>
              <li>  来る【くる】 - llegar</li>
              <li>  行く【いく】 - ir</li>
              <li>  帰る 【かえる】 - volver a casa</li>
              <li>  食べる 【たべる】 - comer</li>
              <li>  飲む 【のむ】 - beber</li>
              <li>  買う 【かう】 - comprar</li>
              <li>  売る 【うる】 - vender</li>
              <li>  切る 【きる】 - cortar</li>
              <li>  入る 【はいる】 - entrar</li>
              <li>  出る 【でる】 - salir</li>
              <li>  持つ 【もつ】 - tener, llevar</li>
              <li>  待つ 【まつ】 - esperar</li>
              <li>  書く【かく】 - escribir</li>
              <li>  読む 【よむ】 - leer</li>
              <li>  歩く 【あるく】 - andar</li>
              <li>  走る 【はしる】 - correr</li>
              <li>  遊ぶ 【あそぶ】 - jugar</li>
          </ul><br><br>

          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <p>**********</p>
          <br>


          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">



            <p id="Pregunta1">1: ¿A dónde vas?</p>
            <p>アリス）どこ へ 行く の？？</p>
            <p>ロドフェ）映画館 ____ 行く。</p> </br>
            <input type="radio" name="p1" value="-">a. を。 </br>
            <input type="radio" name="p1" value="x">b. へ。 </br>
            <input type="radio" name="p1" value="-">c. に。</br>
            <input type="radio" name="p1" value="-">d. で。</br>

            <p id="Pregunta2">2. ¿Dónde vas a comer?</p>
            <p>アリス）どこ で 食べる の？</p>
            <p>ロドフェ）　レストラン____ 食べる。</p></br>

            <input type="radio" name="p2" value="-">a. を。 </br>
            <input type="radio" name="p2" value="-">b. へ。 </br>
            <input type="radio" name="p2" value="-">c. に。</br>
            <input type="radio" name="p2" value="x">d. で。</br>


            <p id="Pregunta3">3. ¿Fuiste a la escuela?</p>
            <p>アリス）学校 に 行った の？</p>
            <p>ロドフェ）ううん, 学校 ____ 行かなかった。</p></br>
            <input type="radio" name="p3" value="-">a. を。 </br>
            <input type="radio" name="p3" value="-">b. へ。 </br>
            <input type="radio" name="p3" value="x">c. に。</br>
            <input type="radio" name="p3" value="-">d. で。</br>


            <p id="Pregunta4">4. ¿Comes arroz?</p>
            <p>武）ごはん を 食べる か？</p>
            <p>ロドフェ）うん, ごはん _____ 食べる。</p>
            </br>
            <input type="radio" name="p4" value="x">a. を。 </br>
            <input type="radio" name="p4" value="-">b. へ。 </br>
            <input type="radio" name="p4" value="-">c. に。</br>
            <input type="radio" name="p4" value="-">d. で。</br>


            <p id="Pregunta5">5. ¿Comprarás una bebida?</p>
            <p>武）飲み物 を 買う か？</p>
            <p>ロドフェ）うん, 飲み物 _____ 買う。コーヒー だ。</p>
            <input type="radio" name="p5" value="x">a. を。 </br>
            <input type="radio" name="p5" value="-">b. へ。 </br>
            <input type="radio" name="p5" value="-">c. に。</br>
            <input type="radio" name="p5" value="-">d. で。</br>


            <p id="Pregunta6">6. ¿Estás aprendiendo japonés?</p>
            <p>武）日本語 を 習う か？</p>
            <p>ロドフェ）うん,　日本語 ____ 習う。</p></br>
            <input type="radio" name="p6" value="x">a. を。 </br>
            <input type="radio" name="p6" value="-">b. へ。 </br>
            <input type="radio" name="p6" value="-">c. に。</br>
            <input type="radio" name="p6" value="-">d. で。</br>


            <p id="Pregunta7">7.  ¿A donde llevaste los libros?</p>
            <p>武）どこ に 本 を 持った か？</p></br>
            <p>ロドフェ）図書館 ____ 持った。 </p>
            <input type="radio" name="p7" value="-">a. を。 </br>
            <input type="radio" name="p7" value="-">b. へ。 </br>
            <input type="radio" name="p7" value="x">c. に。</br>
            <input type="radio" name="p7" value="-">d. で。</br>



            <p id="Pregunta8">8. ¿Viste la televisión?</p>
            <p>アリス）どこ で 見ました の？</p>
            <p>ロドフェ）　映画館 _____ 見た。 </p>
            </br>
            <input type="radio" name="p8" value="-">a. を。 </br>
            <input type="radio" name="p8" value="-">b. へ。 </br>
            <input type="radio" name="p8" value="-">c. に。</br>
            <input type="radio" name="p8" value="x">d. で。</br>




            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>
            <br><br>
            <p>Esperemos que esto no haya resultado muy confuso para ti ni para Rhodofe.</p>
            <p>Recuerda que puedes volver a hacer el cuestionario hasta lograr las respuestas correctas o regresar a la lección.
            Cuando estés listo te invitamos a continuar con la lección 8.</p>


          <a href="../leccion_7.php"><input type="button" value="Regresemos a la leccion 7"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_8.php"><input type="button" value="¡Lección 8!"></a>

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
