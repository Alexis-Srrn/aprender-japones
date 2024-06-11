<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 8</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 8</h1>
            <p>Ahora que Rhodofe tiene en la mente tantas partículas diferentes, es muy fácil expresar más ideas… y confundirse. El día de hoy veremos algunas conversaciones con sus amigos (en presente y pasado) donde deberá demostrar su dominio sobre cada partícula. ¿Estás listo para ayudarla?</p>
            <p>Nota: Para ayudar mejor a Rhodofe recuerda la direncia de [うん] y [ううん], pues con ello sabrás si la oración es o no negativa.</p>



          <p class="leccion">Vocabulario:</p>

          <ul>
              <li>  <b>ロドフェ</b> - La forma de escribir Rhodofe en Katakana</li>
              <li>  うん - sí</li>
              <li>  ううん - no</li>
              <li>  する -hacer</li>
              <li>  入れる - poner</li>
              <li>  入る - meterse</li>
              <li>  開ける - abrir</li>
              <li>  開く - abrirse</li>
              <li>  閉める - cerrar</li>
              <li>  閉まる - cerrarse</li>
              <li>  付ける - encender</li>
              <li>  付く - encenderse</li>
              <li>  消す - apagar</li>
              <li>  消える - apagarse</li>
          </ul><br><br>

          <p>Rhodofe está arreglando un poco su habitación con ayuda de sus amigos. La luz no funciona del todo bien y algunas cosas parecen moverse por su cuenta (seguramente sugestión). En una oportunidad así, la chica recuerda que puede usar verbos transitivos o intransitivos. ¿Podrá hacerlo sin confundirse?</p>
          <p>Recuerda que un gran apoyo para saber cuando usar uno u otro se encuentra en las partículas que preceden el verbo. </p>
          <p>**********</p>
          <br>


          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">



            <p id="Pregunta1">1: ¿Alguien encendió las luces?</p>
            <p>アリス）誰か が 電気 を つける の？</p>
            <p>ロドフェ）私 が 電気 を ______。</p> </br>
            <input type="radio" name="p1" value="x">a. 付けた。 </br>
            <input type="radio" name="p1" value="-">b. 付いた。 </br>
            <input type="radio" name="p1" value="-">c. 消す。</br>
            <input type="radio" name="p1" value="-">d. 消える。</br>




            <p id="Pregunta2">2. ¿Alguien encendió las luces? (Nadie las encendió)</p>
            <p>アリス）誰か が 電気 を つける の？</p>
            <p>ロドフェ）ううん,電気 が _____。</p></br>

            <input type="radio" name="p2" value="-">a. 付けた。 </br>
            <input type="radio" name="p2" value="x">b. 付いた。 </br>
            <input type="radio" name="p2" value="-">c. 消す。</br>
            <input type="radio" name="p2" value="-">d. 消える。</br>


            <p id="Pregunta3">3. Apaga las luces</p>
            <p>アリス）電気 を _____。</p>
            <p>ロドフェ）うん, わかった。</p></br>
            <input type="radio" name="p3" value="-">a. 付けた。 </br>
            <input type="radio" name="p3" value="-">b. 付いた。 </br>
            <input type="radio" name="p3" value="x">c. 消す。</br>
            <input type="radio" name="p3" value="-">d. 消える。</br>


            <p id="Pregunta4">4. ¿Quién abrió la ventana?</p>
            <p>武） 誰 が 窓 を _____ か？</p>
            <p>ロドフェ）アリス が 窓 を _____。</p>
            </br>
            <input type="radio" name="p4" value="x">a. 開けた。 </br>
            <input type="radio" name="p4" value="-">b. 開いた。 </br>
            <input type="radio" name="p4" value="-">c. 閉める。</br>
            <input type="radio" name="p4" value="-">d. 閉まる。</br>


            <p id="Pregunta5">5. ¿Tú abriste la puerta, Rhodofe?</p>
            <p>武）ロドフェ が ドア を 閉める か？</p>
            <p>ロドフェ）ううん, ドア が _____。</p>
            <input type="radio" name="p5" value="-">a. 開けた。 </br>
            <input type="radio" name="p5" value="-">b. 開いた。 </br>
            <input type="radio" name="p5" value="-">c. 閉める。</br>
            <input type="radio" name="p5" value="x">d. 閉まる。</br>


            <p id="Pregunta6">6. ¿Por qué se ha abierto la ventana?</p>
            <p>武）どうして 窓 が _______？</p>
            <p>ロドフェ）ううん,　知らない。</p></br>
            <input type="radio" name="p6" value="-">a. 開けた。 </br>
            <input type="radio" name="p6" value="x">b. 開いた。 </br>
            <input type="radio" name="p6" value="-">c. 閉める。</br>
            <input type="radio" name="p6" value="-">d. 閉まる。</br>


            <p id="Pregunta7">7. Rhodofe puso las manzanas dentro del refrigerador:</p>
            <p>武）アップル は？</p></br>
            <p>ロドフェ）私 が 冷蔵庫 に 入れる。 </p>
            <input type="radio" name="p7" value="-">a. 抜く。 </br>
            <input type="radio" name="p7" value="-">b. 抜ける。 </br>
            <input type="radio" name="p7" value="x">c. 入れる。</br>
            <input type="radio" name="p7" value="-">d. 入る。</br>



            <p id="Pregunta8">8. Las flores están puestas en la mesa</p>
            <p>アリス）花 は？</p>
            <p>ロドフェ）　花 が テーブル に _______</p>
            </br>
            <input type="radio" name="p8" value="-">a. 抜く。 </br>
            <input type="radio" name="p8" value="-">b. 抜ける。 </br>
            <input type="radio" name="p8" value="-">c. 入れる。</br>
            <input type="radio" name="p8" value="x">d. 入る。</br>




            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>
            <br><br>
            <p>Los verbos intransitivos no siguen ninguna regla clara que facilite su aprendizaje. No hay ninguna prisa, Rhodofe tendrá todo el tiempo del mundo para aprenderlos uno a uno, al igual que nosotros.</p>
            <p>Recuerda que puedes volver a hacer el cuestionario hasta lograr las respuestas correctas o regresar a la lección.
            Cuando estés listo te invitamos a continuar con la lección 8.</p>


          <a href="../leccion_8.php"><input type="button" value="Regresemos a la leccion 8"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>
          <a href="../leccion_9.php"><input type="button" value="¡Lección 9!"></a>

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
