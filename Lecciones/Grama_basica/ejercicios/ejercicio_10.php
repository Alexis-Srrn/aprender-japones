<?php
include("encabezados.php");
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Ejercicio 10</title>
  </head>
  <body>


    <div class="container-content">
        <article class="">

          <h1>Quiz Ejercicio 10</h1>
            <p>Como último apartado Rhodofe se enfrenta a pequeñas conversaciones sencillas. Deberá saber que partícula es la correcta para expresar algunas ideas. Sencillo, ¿no?</p>


            <br><br>
          <p>Ahora selecciona la respuesta que creas correcta aquí abajo y luego haz click en «Verificar respuestas».</p>
          <p>Recuerda: Las preguntas correctas se marcarán en azul y las erróneas en rojo. Puedes intentarlo cuantas veces quieras o, si es necesario, volver a consultar la lección.</p>
          <p>**********</p>
          <br>


          <section>

          <form name="quizForm" onsubmit="return verificarRespuestas()">



            <p id="Pregunta1">1: ¿Qué hiciste ayer en la tarde?</p>
            <p>アリス）昨日 午後 は 何 を しました の？</p>
            <p>ロドフェ）友達 _____ 話した。</p> </br>
            <input type="radio" name="p1" value="x">a. と。 </br>
            <input type="radio" name="p1" value="-">b. や。 </br>
            <input type="radio" name="p1" value="-">c. とか。 </br>
            <input type="radio" name="p1" value="-">d. の。</br>




            <p id="Pregunta2">2. Alicia pregunta que está comprando Takeshi: Rhodofe quiere decir algunas cosas, sin ser muy específica:</p>
            <p>アリス）何 を 買う の？</p>
            <p>ロドフェ）靴 _____ シャツ を 買う。。</p></br>

            <input type="radio" name="p2" value="-">a. と。 </br>
            <input type="radio" name="p2" value="x">b. や。 </br>
            <input type="radio" name="p2" value="-">c. とか。 </br>
            <input type="radio" name="p2" value="-">d. の。</br>


            <p id="Pregunta3">3. Alicia encuentra una camisa que se parece mucho a una que ha visto antes. Rhodofe quiere decir que esa es la camisa de Takeshi:</p>
            <p>ロドフェ）武______ シャツ だ。</p></br>
            <input type="radio" name="p3" value="-">a. と。 </br>
            <input type="radio" name="p3" value="-">b. や。 </br>
            <input type="radio" name="p3" value="-">c. とか。 </br>
            <input type="radio" name="p3" value="x">d. の。</br>


            <p id="Pregunta4">4. Rhodofe encuentra un libro entre sus pertenencias: ¿Qué partícula debe usar para preguntar de quién es?"</p>
            <p>ロドフェ）その 本 は 誰____？。</p>
            </br>
            <input type="radio" name="p4" value="-">a. と。 </br>
            <input type="radio" name="p4" value="-">b. や。 </br>
            <input type="radio" name="p4" value="-">c. とか。 </br>
            <input type="radio" name="p4" value="x">d. の。</br>



            <p id="Pregunta5">5. Alicia comenta sobre lo común que es usar palillos chinos. Rhodofe no los usa mucho, así que dice que ella <b>Come pescado usando tenedor Y cuchara</b></p>
            <p>ロドフェ）スプーン ________ フォーク で 魚 を 食べた。</p></br>
            <input type="radio" name="p5" value="x">a. と。 </br>
            <input type="radio" name="p5" value="-">b. や。 </br>
            <input type="radio" name="p5" value="-">c. とか。 </br>
            <input type="radio" name="p5" value="-">d. の。</br>


            <p id="Pregunta6">6. Revisando las tiendas Rhodofe encuentra algo que le gusta. Como no sabe expresarse expresa: <b>La cosa blanca es bonita.</b></p>
            <p>ロドフェ）白い ______ は、かわいい。</p></br>
            <input type="radio" name="p6" value="-">a. と。 </br>
            <input type="radio" name="p6" value="-">b. や。 </br>
            <input type="radio" name="p6" value="-">c. とか。 </br>
            <input type="radio" name="p6" value="x">d. の。</br>



            <p id="Pregunta7">7. Takeshi pregunta a Rhodofe por algunos articulos como bebidas, taza, servilletas, etc. para comprar. A diferencia de Alice el transmite más variedad con una partícula en especial:</p>
            <p>武）飲み物 _______ カップ _______ ナプキン は、いらない？</p></br>
            <input type="radio" name="p7" value="-">a. と。 </br>
            <input type="radio" name="p7" value="-">b. や。 </br>
            <input type="radio" name="p7" value="x">c. とか。 </br>
            <input type="radio" name="p7" value="-">d. の。</br>




            <p id="Pregunta8">8. Rhodofe se despide por este día. Mañana seguirá su día normal, recordando que debe <b>reunirse con un profesor</b></p>
            <p>アリス）先生 _____ 会った。</p>
            </br>
            <input type="radio" name="p8" value="x">a. と。 </br>
            <input type="radio" name="p8" value="-">b. や。 </br>
            <input type="radio" name="p8" value="-">c. とか。 </br>
            <input type="radio" name="p8" value="-">d. の。</br>





            <input type="submit" value="Verificar respuestas">
          </form>
          <div id="resultado"></div>
          </section>
            <br><br>
            <p>Con esto terminamos el último de los ejercicios de la gramática básica. Si bien aún falta mucho por recorrer y más por prácticas, estamos seguros de que ahora tienes una buena base para comenzar tu inmersión.  Escucha con atención material nativo, lee productos completamente hechos para japoneses y ve si logras entender al menos la esencia de sus ideas.</p>
            <p>¿Aún no lo logras? No te preocupas, próximamente estará disponible la sección de gramática avanzada para que amplíes tu panorama. No olvides revisar las lecciones básicas cada que tengas alguna duda.</p>
            <p>Por ahora Rhodofe se despide y da gracias por la ayuda. ¡Nos vemos~!</p><br><br><br>


          <a href="../leccion_10.php"><input type="button" value="Regresemos a la leccion 10"></a>
          <a href="lista-ejercicios.php"><input type="button" value="Lista de ejercicios"></a>

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
