window.onscroll = function(){

  scroll = document.documentElement.scrollTop;

  header = document.getElementById("header");

  if(scroll > 20){
    header.classList.add('nav_mod');
  }else if(scroll < 20){
    header.classList.remove('nav_mod');
  }
}


document.getElementById("btn_menu").addEventListener("click", mostrar_menu);


menu = document.getElementById("header");
body = document.getElementById("container_all");
nav = document.getElementById("nav");


function mostrar_menu(){

  menu.classList.toggle('move_content');
  body.classList.toggle('move_content');
  nav.classList.toggle('move_nav');








}
