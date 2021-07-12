jQuery(document).ready(listo); //para cargar las funciones



function listo()
{
	 //alert("hola mundo"); //para mensajes
	 //jQuery("") //para llamar a elementos y seleccionarlo
	 jQuery(".hamb").click(function(e){
	 	e.preventDefault(); //hace accion por defecto anula la redireccion o accion
	 	jQuery("header .container nav").toggleClass("open"); //agregar y quitar una clase 
	 	jQuery(".hamb i").toggleClass("fa-times"); //para cambiar el icono con una clase
			 	
	 });

	 jQuery("header .container nav a").click(function(){ //evento para redireccion
	 	jQuery("header .container nav").removeClass("open"); //removeClass remueve una clase
	 	jQuery(".hamb i").removeClass("fa-times");
	 	var dev = jQuery(this).attr("href");
	 	//alert(dev);
	 	jQuery("html,body").animate({
	 		"scrollTop": jQuery(dev).offset().top - 76 //offset direcciona 
	 	});
	 }); // jQuery("header .container nav a").click(function(){}); con esta funcion se puede aplicar lo del boton scroll

	 // inicio de las funciones para redireccion
	 jQuery(".boton boton-rojo").click(function(e){
	 	e.preventDefault();
	 });

	 jQuery("#inicio .bloque-inicio a").click(function(){
	 	var btnR = jQuery(this).attr("href");
	 	// alert(btnR);
	 	jQuery("html,body").animate({
	 		"scrollTop": jQuery(btnR).offset().top - 76
	 	});
	 });
	 //fin inicio de las funciones para redireccion
}

//slideshow
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);