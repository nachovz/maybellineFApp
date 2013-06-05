<html>
<head>
<title>MAYBELLINE</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,target-densitydpi=device-dpi,user-scalable=no,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=9">	      <!-- IE9 Standards -->
<meta property="og:title" content="maybelline" />
<meta property="og:type" content="product" />
<meta property="og:url" content="http://geekies.co/maybelline/celulcar.php?url=<?php echo $_REQUEST["url"];?>" />
<meta property="og:image" content="http://geekies.co/maybelline/imagen/Tap(calendarioapp).jpg" />
<meta property="og:site_name" content="maybelline" />
<meta property="fb:admins" content="1385423566" />
<link rel="stylesheet" type="text/css" href="css/index.css">
<link href="imagen/Tap(calendarioapp).jpg" type="image/x-icon"/>
</head>
<body>
<div id="fb-root"></div>
<?php 
$partes=explode(".", $_REQUEST["name"]);
$nombre_imagen=$partes[0];
$tipo_imagen=$partes[1];
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36111472-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container">
        <div class="cellimagen4">
        <div class="cellimagen5"><img src="imagen/corazonM.png" width="299" height="50"></div>
        </div>
        <div class="cellimagen1" onClick="javascript: self.location='pc.php?url=<?php echo $_REQUEST["url"];?>&name=<?php echo $_REQUEST["name"] ?>&fecha=<?php echo $_REQUEST["fecha"] ?>'">
        <div class="s-cellimagen1"><img src="imagen/compu_1.png" width="110" height="51" class="menu" hover="imagen/compu_11.png"></div>
        </div>
         <div class="cellimagen2" onClick="javascript: self.location='celulcar.php?url=<?php echo $_REQUEST["url"];?>&name=<?php echo $_REQUEST["name"] ?>&fecha=<?php echo $_REQUEST["fecha"] ?>'">
        <div class="s-cellimagen2"><img src="imagen/cel_1.png" width="60" height="51" class="menu" hover="imagen/cel_1.png"></div>
        </div>
        <div class="cellimagen3" onClick="javascript: self.location='redes.php?url=<?php echo $_REQUEST["url"];?>&name=<?php echo $_REQUEST["name"] ?>&fecha=<?php echo $_REQUEST["fecha"] ?>'">
        <div class="s-cellimagen3"><img src="imagen/redes_1.png" width="101" height="50" class="menu" hover="imagen/redes_11.png"></div>
        </div>
        
        <div class="fuentes2 botonr" onClick="javascript: self.location='galeria.html'"></div>
        <div class="contImg"><img src="<?php echo $_REQUEST["url"];?>" width="181" height="300"></div>
        <div class="contcell"><img src="imagen/contcell.png" width="181" height="320"></div>
      <div class="conIphone"><img src="imagen/iphonefull.png" width="764" height="1026"></div>
            <div class="menucell">
            <div><img src="imagen/descarga.png" width="83" height="15"></div>
            <ul class="s-menucell">
            <li><img src="imagen/botoniPhone.png" width="177" height="73" hover="imagen/botoniPhone1.png" class="menu"  onClick="javascript: self.location='App Calendario(Maybelline)/<?php echo $_REQUEST["fecha"];?> Alta/descarga.php?name=<?php echo $nombre_imagen;?>_iphone.<?php echo $tipo_imagen;?>'"></li>
            <li class="s-menucell1"><img src="imagen/botoniPhone5.png" width="177" height="72" hover="imagen/botoniPhone51.png" class="menu"  onClick="javascript: self.location='App Calendario(Maybelline)/<?php echo $_REQUEST["fecha"];?> Alta/descarga.php?name=<?php echo $nombre_imagen;?>_iphone5.<?php echo $tipo_imagen;?>'"></li>
            <li class="s-menucell1"><img src="imagen/botonbb.png" width="177" height="72" hover="imagen/botonbb1.png" class="menu"  onClick="javascript: self.location='App Calendario(Maybelline)/<?php echo $_REQUEST["fecha"];?> Alta/descarga.php?name=<?php echo $nombre_imagen;?>_bb.<?php echo $tipo_imagen;?>'"></li>
            <li class="s-menucell1"><img src="imagen/botonandroid.png" width="177" height="72" hover="imagen/botonandroid1.png" class="menu"  onClick="javascript: self.location='App Calendario(Maybelline)/<?php echo $_REQUEST["fecha"];?> Alta/descarga.php?name=<?php echo $nombre_imagen;?>_android.<?php echo $tipo_imagen;?>'"></li>
            </ul>
         	<div class="SocialDiv">
<div class="fb-like" style="margin-top:4px; margin-left:5px;" data-href="http://geekies.co/maybelline/celulcar.php?url=<?php echo $_REQUEST["url"];?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
<a name="fb_share" type="button" href="https://www.facebook.com/dialog/feed?
  app_id=127042087447972&
  link=https://www.facebook.com/pages/Maybelline/471496729562097?sk=app_127042087447972&
  picture=http://geekies.co/maybelline/<?php echo $_REQUEST["url"];?>&
  name=I Love Maybelline&
  caption=@ILoveMaybelline.&
  description=Personaliza%20tu%20cel,%20compu%20o%20perfiles%20de%20redes%20sociales%20con%20las%20im&aacute;genes%20del%20calendario%20de%20Maybelline%20New%20York.&
  redirect_uri=https://www.facebook.com" rel="nofollow" target="_blank" class="link">
<img src="imagen/compartir.png" width="97" height="23" style="margin-left:5px; margin-top:4px;" class="decoration">
</a>
<div style="margin-left:5px; margin-top:4px;"><a href="https://twitter.com/share" class="twitter-share-button link" data-text="Personaliza tu cel, compu o perfiles de redes sociales con las imágenes del calendario de Maybelline New York. #ILoveMaybelline" data-lang="es" data-related="ILoveMaybelline" data-url="#"  data-dnt="true" data-count="none">Twittear</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></div>

<?php
 if (isset($_SERVER['HTTP_USER_AGENT']) && 
    (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
      $marginb="-24px";
    else
        $marginb="-20px";
?>
<div style=" padding:0;margin-left:79px; margin-top:<?php echo $marginb; ?>;">
<a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.facebook.com%2Fpages%2FMaybelline%2F471496729562097%3Fsk%3Dapp_127042087447972&media=http://geekies.co/maybelline/<?php echo $_REQUEST["url"];?>&description=Personaliza%20tu%20cel%2C%20compu%20o%20perfiles%20de%20redes%20sociales%20con%20las%20im%C3%A1genes%20del%20calendario%20de%20Maybelline%20New%20York.%20%23ILoveMaybelline" class="pin-it-button" count-layout="none"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" /></a>

<!--<a href="http://pinterest.com/pin/create/button/?url=https://www.facebook.com/pages/Maybelline/471496729562097?sk=app_127042087447972&media=geekies.co/maybelline/<?php echo $_REQUEST["url"];?>" class="pin-it-button" count-layout="horizontal"><img border="0" src="//assets.pinterest.com/images/PinExt.png" title="Pin It" class="decoration"/></a></div> -->
</div>

           </div>
       </div>
</div>
<div class="containerFooter">
<label style="margin-left:10px; margin-right:280px;">Todos Los Derechos Reservados L'Oréal Venezuela, C.A RIF: J000090424</label> Desarrolado por Cueva Social <img src="imagen/cueva1.png" width="25" height="12"></div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="//assets.pinterest.com/js/pinit.js"></script>
<script>
$(document).ready(function(){
$('.menu').mouseenter(function() {
var hover=$(this).attr("hover");
var url=$(this).attr("src");
$(this).attr("src",hover)
$(this).attr("hover",url)
});	
$('.menu').mouseleave(function() {
var hover=$(this).attr("hover");
var url=$(this).attr("src");
$(this).attr("src",hover)
$(this).attr("hover",url)
});	

});
		
</script>
</body>
</html>