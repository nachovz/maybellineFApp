//Desarrolador Pedro Mendez
//@PJMendez88
function getInternetExplorerVersion()
// Returns the version of Windows Internet Explorer or a -1
// (indicating the use of another browser).
{
   var rv = -1; // Return value assumes failure.
   if (navigator.appName == 'Microsoft Internet Explorer')
   {
      var ua = navigator.userAgent;
      var re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
      if (re.exec(ua) != null)
         rv = parseFloat( RegExp.$1 );
   }
   return rv;
}

$(document).ready(function(){
	
	var explorer=getInternetExplorerVersion();
	if(explorer==8){
		$("#sub_cont_mid_1").removeClass("mid_1_cont");
		$("#sub_cont_mid_1").addClass("mid_1_cont8");
		}

	var limite_1,limite_2,control_1,control_2;
var mostrar_pop_up=0;

$('.MostrarImg').live('click',function(){

if(mostrar_pop_up==0){	
var calculoM=($(window).width()-764)/2;
var minimo=$(this).offset().left+20;



var calculoMax=(calculoM+600);
	if(minimo>=calculoM && $(this).offset().left<=calculoMax){
			
	$('#pop-up').removeClass("ocultar");
	$('#pop-up').addClass("mostrar");
	var url=$(this).attr("src");
	var width=parseInt($(this).attr("width"))+parseInt(20);
	var height=parseInt($(this).attr("height"))+parseInt(20);
	var top=parseInt($(this).offset().top)-parseInt(1);
	$('#ShowPhoto').css("top",top+"px");
    $('#ShowPhoto').css("left",$(this).offset().left+"px");
	$('#ShowPhoto').css("width",width+"px");
	$('#ShowPhoto').css("height",height+"px");
	var margin=parseInt(height)-parseInt(80);
	var marginl=(parseInt(width)/2)-parseInt(39);
	var fecha=$(this).attr("fecha");
	if(fecha==2012){
var name = url.split("App Calendario(Maybelline)/2012 Baja/");
name=name[1];
		}else{
			if(fecha==2011){
			var name = url.split("App Calendario(Maybelline)/2011 Baja/");
name=name[1];
			}else{
				if(fecha==2013){

var name = url.split("App Calendario(Maybelline)/2013 Baja/");
name=name[1];
}
			}
			}

	$('#ShowPhoto').html('<a href="pc.php?name='+name+'&fecha='+fecha+'&url='+url+'" class="decoration"><div class="TextFoto decoration" style="width:'+width+';margin-top:'+margin+'px;"><img src="imagen/capaT.png" width="79" height="17" style=" margin-top:10px;margin-left:'+marginl+'px" class="decoration"></div><img src="imagen/capa.png" width="'+width+'" height="40" class="CapaFoto decoration" style=" margin-top:'+margin+'px" id="CapaFoto"><img src="'+url+'" width="'+width+'" height="'+height+'" class="Foto decoration"></a>');
	$('#ShowPhoto').fadeIn(100);
	}
}
});

$('#pop-up').live('click',function(){
$(this).removeClass("mostrar");
$(this).addClass("ocultar");
$('#ShowPhoto').fadeOut(100);
});

$('#sub_cont_mid_1').mouseenter(function() {

$("#p-scroll-1").removeClass("ocultar");
$("#p-scroll-1").addClass("mostrar");	
$("#p-scroll-2").removeClass("ocultar");
$("#p-scroll-2").addClass("mostrar");

});	

$('#sub_cont_mid_1').mouseleave(function() {

$("#p-scroll-1").removeClass("mostrar");
$("#p-scroll-1").addClass("ocultar");	
$("#p-scroll-2").removeClass("mostrar");
$("#p-scroll-2").addClass("ocultar");

});	

$('.Scroll01').mouseover(function() {
$("#p-scroll-1").removeClass("mostrar");
$("#p-scroll-1").addClass("ocultar");
$("#p-scroll-1-1").removeClass("ocultar");
$("#p-scroll-1-1").addClass("mostrar");
$("#p-scroll-2").removeClass("ocultar");
$("#p-scroll-2").addClass("mostrar");
});

$('.Scroll01').mouseout(function() {	
$("#p-scroll-1").removeClass("ocultar");
$("#p-scroll-1").addClass("mostrar");
$("#p-scroll-1-1").removeClass("mostrar");
$("#p-scroll-1-1").addClass("ocultar");
});

$('.Scroll02').mouseover(function() {
$("#p-scroll-2").removeClass("mostrar");
$("#p-scroll-2").addClass("ocultar");
$("#p-scroll-2-2").removeClass("ocultar");
$("#p-scroll-2-2").addClass("mostrar");
$("#p-scroll-1").removeClass("ocultar");
$("#p-scroll-1").addClass("mostrar");
});

$('.Scroll02').mouseout(function() {	
$("#p-scroll-2").removeClass("ocultar");
$("#p-scroll-2").addClass("mostrar");
$("#p-scroll-2-2").removeClass("mostrar");
$("#p-scroll-2-2").addClass("ocultar");
});


$('#sub_cont_mid_2').mouseenter(function() {
$("#p-scroll-11").removeClass("ocultar");
$("#p-scroll-11").addClass("mostrar");	
$("#p-scroll-21").removeClass("ocultar");
$("#p-scroll-21").addClass("mostrar");		
});	
$('#sub_cont_mid_2').mouseleave(function() {
$("#p-scroll-11").removeClass("mostrar");
$("#p-scroll-11").addClass("ocultar");	
$("#p-scroll-21").removeClass("mostrar");
$("#p-scroll-21").addClass("ocultar");
});			


$('.Scroll11').mouseover(function() {
$("#p-scroll-11").removeClass("mostrar");
$("#p-scroll-11").addClass("ocultar");
$("#p-scroll-11-1").removeClass("ocultar");
$("#p-scroll-11-1").addClass("mostrar");
$("#p-scroll-21").removeClass("ocultar");
$("#p-scroll-21").addClass("mostrar");
});


$('.Scroll11').mouseout(function() {	
$("#p-scroll-11").removeClass("ocultar");
$("#p-scroll-11").addClass("mostrar");
$("#p-scroll-11-1").removeClass("mostrar");
$("#p-scroll-11-1").addClass("ocultar");
});



$('.Scroll12').mouseover(function() {
$("#p-scroll-21").removeClass("mostrar");
$("#p-scroll-21").addClass("ocultar");
$("#p-scroll-21-2").removeClass("ocultar");
$("#p-scroll-21-2").addClass("mostrar");
$("#p-scroll-11").removeClass("ocultar");
$("#p-scroll-11").addClass("mostrar");
});


$('.Scroll12').mouseout(function() {	
$("#p-scroll-21").removeClass("ocultar");
$("#p-scroll-21").addClass("mostrar");
$("#p-scroll-21-2").removeClass("mostrar");
$("#p-scroll-21-2").addClass("ocultar");
});
	
	 var SumaFotos=0;
	 var total_fotos_1=$("ul.galerias li").size();
	 var total_elementos_1=$('.galerias').children();

$("ul.galerias li").children().each(function() {
var largo= $(this).width();
var ancho=$(this).height();
var anchoporcentaje=267*100/ancho;
var largopx=anchoporcentaje*largo/100;
 $(this).attr("width",largopx);
 $(this).attr("height",267);
 $(this).addClass("MostrarImg");
 //$(this).attr("fecha","2012");

 SumaFotos=SumaFotos+largopx;
});
$("#sub_cont_mid_1").css("width",SumaFotos);
$("#sub_cont_mid_1").css("height",267);
limite_1=SumaFotos-774;
	
	
	 var SumaFotos=0;
	 var total_fotos_1=$("ul.galerias2 li").size();
	 var total_elementos_1=$('.galerias2').children();

$("ul.galerias2 li").children().each(function() {
	
var largo= $(this).width();
var ancho=$(this).height();
var anchoporcentaje=230*100/ancho;
var largopx=anchoporcentaje*largo/100;
 $(this).attr("width",largopx);
 $(this).attr("height",230);
 $(this).addClass("MostrarImg");
  $(this).attr("fecha","2011");
 SumaFotos=SumaFotos+largopx;
});
$("#sub_cont_mid_2").css("width",SumaFotos);
$("#sub_cont_mid_2").css("height",230);
limite_2=SumaFotos-764;
 
 control_1=limite_1;
 control_2=limite_2;
 
 	$('.s-scroll').live('click',function(){
	
	var explorer=getInternetExplorerVersion();
	if(explorer==8){
		var marginscroll=0;
		}else{
			marginscroll=7;
			}
var cambio1=400;
var tiposcroll=$(this).attr("p-roll");
	if(tiposcroll==2 && mostrar_pop_up==0){	
	if(control_1-400>0){
	control_1=control_1-400;}else{if(control_1!=0){cambio1=control_1-10;}}
if(control_1!=0){
	mostrar_pop_up=1;
			var margin=parseInt($('#sub_cont_mid_1').css("margin-top"))+parseInt(marginscroll);
 $('#sub_cont_mid_1').animate({ left: '-='+cambio1+'', 'margin-top': ""+margin+"",},1000, function() {mostrar_pop_up=0;});

 if(cambio1<400){control_1=0;}
 }
	}
  else if(tiposcroll==1 && mostrar_pop_up==0){  
if(control_1+400<limite_1){
	control_1=control_1+400;}else{cambio1=limite_1-control_1-10;}   
if(control_1<limite_1){
	mostrar_pop_up=1;
			var margin=parseInt($('#sub_cont_mid_1').css("margin-top"))-parseInt(marginscroll);
 $('#sub_cont_mid_1').animate({ left: '+='+cambio1+'','margin-top': ""+margin+"",}, 1000, function() {mostrar_pop_up=0; });  
if(cambio1<400){control_1=limite_1;}
 }
	  }
		}); 
		
		
$('.s-scroll1').live('click',function(){	

var cambio1=400;
var tiposcroll=$(this).attr("p-roll");
	if(tiposcroll==2 && mostrar_pop_up==0){	
	if(control_2-400>0){
	control_2=control_2-400;}else{if(control_2!=0){cambio1=control_2-10;}}
if(control_2!=0){
	mostrar_pop_up=1;
 $('#sub_cont_mid_2').animate({ left: '-='+cambio1+'',},1000, function() {mostrar_pop_up=0;});

 if(cambio1<400){control_2=0;}
 }
	}
  else if(tiposcroll==1 && mostrar_pop_up==0){ 
if(control_2+400<limite_2){
	control_2=control_2+400;}else{cambio1=limite_2-control_2-10;}   
if(control_2<limite_2){
	mostrar_pop_up=1;

 $('#sub_cont_mid_2').animate({ left: '+='+cambio1+'',}, 1000, function() {mostrar_pop_up=0; });  
if(cambio1<400){control_2=limite_2;}
 }
	  }
		}); 
 });//end ready