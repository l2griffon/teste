<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php

# Página no facebook
$fbPage = 'https://www.facebook.com/GriffonPVP/';

# Popup para curtir página do facebook deve aparecer de quantos em quantos dias?
$fbPopupDelay = ''; // ex: se setar '2', o popup aparecerá novamente 2 dias após a última vez que o usuário o visualizou

###########################################################

?>
<html>
<head>
	
	<!-- CSS - Início -->
	<link rel='stylesheet' type='text/css' href='estilos.css' media='all' />
	<!-- CSS - Fim -->
	
	<!-- Javascripts - Início -->
	<script src='js/jquery-1.12.0.min.js' type='text/javascript' charset='UTF-8'></script>
	<script src='js/jquery.cookie.js' type='text/javascript' charset='UTF-8'></script>
	<script type='text/javascript'>
		jQuery.noConflict(); jQuery(document).ready(function($){ if(jQuery.cookie('atualstudioPopup') != 'yes'){ $('#fanback').delay(100).fadeIn('medium'); $('#fanclose, #fan-exit').click(function(){ $('#fanback').stop().fadeOut('medium'); }); } jQuery.cookie('atualstudioPopup', 'yes', { path: '/', expires: <?php echo intval($fbPopupDelay); ?> }); });
	</script>
	<!-- Javascripts - Fim -->

</head>
<body>
	
	<!-- HTML - Início -->
	<div id='fanback'><div id='fan-exit'></div><div id='fanbox'><div id='fanclose'></div><iframe src='//www.facebook.com/plugins/likebox.php?href=<?php echo $fbPage; ?>&amp;width=402&amp;height=255&amp;colorscheme=light&amp;show_faces=true&amp;border_color=%23E2E2E2&amp;stream=false&amp;header=false&amp;appId=329902783740649' scrolling='no' frameborder='0' style='border: none; overflow: hidden; margin-top: -19px; width: 402px; height: 230px;margin-left: 8px;' allowTransparency='true'></iframe></div></div>
	<!-- HTML - Fim -->
	
</body>
</html>
<html xmlns="http://www.w3.org/1999/xhtml">
<html><head>
<?php
include("config.php");
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>L2 GRIFFON</title><script type="text/javascript">
//desabilita menu de opes aps clicar no boto direito
function desabilitaMenu(e)
{
if (window.Event)
{
if (e.which == 2 || e.which == 3)
return false;
}
else
{
event.cancelBubble = true
event.returnValue = false;
return false;
}
}

//desabilita boto direito
function desabilitaBotaoDireito(e)
{
if (window.Event)
{
if (e.which == 2 || e.which == 3)
return false;
}
else
if (event.button == 2 || event.button == 3)
{
event.cancelBubble = true
event.returnValue = false;
return false;
}
}

//desabilita boto direito do mouse
if ( window.Event )
document.captureEvents(Event.MOUSEUP);
if ( document.layers )
document.captureEvents(Event.MOUSEDOWN);

document.oncontextmenu = desabilitaMenu;
document.onmousedown = desabilitaBotaoDireito;
document.onmouseup = desabilitaBotaoDireito;
</script>
<link href="cursor.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="blocks/favicon.ico" /><style type="text/css">
<!--
body {
	scrollbar-arrow-color: #ffffff;
	scrollbar-3dlight-color: #000000;
	scrollbar-darkshadow-color: #000000;
	scrollbar-face-color: #000000;
	scrollbar-highlight-color: #ffffff;
	scrollbar-shadow-color: #ffffff;
	scrollbar-track-color: #777777;
	background-color: #000000;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.style21 {
	color: #00FF00;
	font-size: 14px;
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #FFFFFF;
}
.style22 {color: #FFFFFF}
.style29 {color: #00FF00}
.style32 {color: #999999}
.style35 {font-size: 10px}
.style38 {font-size: 12px; font-family: Geneva, Arial, Helvetica, sans-serif; }
.style39 {font-size: 14px}
.style41 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	background-repeat: no-repeat;
}
-->
</style>
<script src="config/showFla.asp.htm" type="text/javascript"></script>
<link href="config/center00.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
if (window != top) top.location.href = location.href;
</script>
<script language="JavaScript">
// Proibe clicar com o "segundo" botao
function click() {
if (event.button==2) {
alert('Botao Direito do MOUSE foi DESATIVADO !!!!)
}
}
document.onmousedown=click
</script>
<style type="text/css">
<!--
.style44 {
	font-size: 16px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="996" height="290" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="996"><table width="996" height="240" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="996" height="245" background="img/topo.jpg" class="style41"><div align="right">
          <img src="images/logooo.jpg" width="1001" height="476" /><br>
      </tr>
    </table>
      <table border="0" cellpadding="0" cellspacing="0" width="988">
          <tbody>
            <tr>
              <td width="206" height="637"><table border="0" cellpadding="0" cellspacing="0" width="206" height="541">
                <tbody>
                  <tr>
                    <td width="214"><table border="0" cellpadding="0" cellspacing="0" width="206" height="541">
                      <tbody>
                        <tr>
                          <td background="img/status.jpg" width="214" height="177"><font color="#ffffff">&nbsp; </font>
                              <table width="203" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td width="30"><img src="images/spacer.gif" alt="" width="30" height="20" /></td>
                                  <td><br>
                                      <br>
                                    <span class="style32">                                    </span><span class="style32">
                                    
                                    <span class="style22"><b>Login SERVER -</b></span><strong> 
                                    <?php 
$fp = @fsockopen("l2griffon.servegame.com", 2106, $errno, $errstr, 1);
if($fp >= 1){ 
echo '<b><font color=green size=1 face=verdana>ONLINE</font>';}
else{ echo '<b><font color=red size=1 face=verdana>OFFLINE</font>'; } 
?>
                                    <br>
                                                                        </strong><span class="style22">Game SERVER -</span><strong> 
                                                                        <?php 
$fp = @fsockopen("l2griffon.servegame.com", 7777, $errno, $errstr, 1);
if($fp >= 1){ 
echo '<b><font color=green size=1 face=verdana>ONLINE</font>';}
else{ echo '<b><font color=red size=1 face=verdana>OFFLINE</font>'; } 
?>
                                                                        <br>
                                                                                                            </strong><span class="style22">Exp<span class="style35"> -</span></span><strong> <span class="style38"><font class="smt">1000x</font></span><br>
																											
                                                                                                                                                </strong><span class="style22">Sp <span class="style35">-</span></span><strong> <span class="style38"><font class="smt">1000x</font></span><br>
                                                                                                                                                                                    </strong><span class="style22">Adena <span class="style35">- </span></span><strong><span class="style38"><font class="smt">1000x<br>
                                    </font></span></strong></span></td>
                                </tr>
                                <tr>
                                  <td>&nbsp;</td>
                                  <td><font size=1 face=verdana><b>Interlude</b></font><span class="style39"><span class="style29"> <span class="style22">- </span></span></span>
                                  </td>
                                </tr>
                            </table></td>
                        </tr>
                        <tr>
                          <td background="img/menu.jpg"><table border="0" cellpadding="0" cellspacing="0" width="196" height="460">
                              <tbody>
                                <tr>
                                  <td><div align="center">
                                    <p><br>
                                      <br>
                                        <br>
                                        <a href="home.php" target="iframe"><img src="img/botoes/home.png" width="94" height="28" border="0"></a></span></a><span class="style43"><br>
                                      <br>
                                      <a href="regras.php" target="iframe"><img src="img/botoes/regras.png" width="94" height="28" border="0"></a><br>
                                      <br>
                                      <a href="downloads.php" target="iframe"><img src="img/botoes/download.png" alt="iframe" width="95" height="27" border="0"></a><br>                                                                     
                                      <br>
                                      <a href="donate.php" target="iframe"><img src="img/botoes/donate.png" width="94" height="26" border="0"></a><br>
                                      <br>
                                      <a href="info.php" target="iframe"><img src="img/botoes/server info.png" width="95" height="27" border="0"></a><br>
                                      <br>
                                      <a href="suporte.php" target="iframe"><img src="img/botoes/suporte.png" width="95" height="27" border="0"></a><br>                                     
                                      <br>
                                      <a href="https://www.facebook.com/GriffonPVP/" target="_blank"><img src="img/botoes/forum.png" width="95" height="27" border="0"></a><br>
                                      <br>
                                    </p>
                                  </div>
                                      <div align="center"></div></td>
                                </tr>
                              </tbody>
                          </table></td>
                        </tr>
                      </tbody>
                    </table></td>
                  </tr>
                </tbody>
              </table></td>
              <td background="img/centro.jpg" width="570"><table border="0" cellpadding="0" cellspacing="0" width="567" height="620">
                <tbody>
                  <tr>
                    <td width="21" height="30">&nbsp;</td>
                    <td width="547"><div align="center"><strong><br>
                      Lineage II GRIFFON</strong> -
                      <strong>Announcemets</strong></div></td>
                    <td width="16">&nbsp;</td>
                  </tr>
                  <tr>
                    <td height="590">&nbsp;</td>
                    <td><iframe name="iframe" src="home.php" scrolling="auto" width="550" frameborder="no" height="580"></iframe></td>
                    <td></td>
                  </tr>
                </tbody>
              </table></td>
              <td width="212"><table border="0" cellpadding="0" cellspacing="0" width="208" height="230">                 
                </table>
                <table border="0" cellpadding="0" cellspacing="0" width="210" height="304">
                <tbody>
                  <tr>
                    <td width="210" height="256" background="img/vote.jpg"><div align="center">
                        <div align="center">
                          <p>&nbsp;</p>
                          <p><br>
                            <a href="//top.l2jbrasil.com/index.php?a=in&u=l2griffon" target="_blank"><img src="//top.l2jbrasil.com/button.php?u=l2griffon" alt="Top L2JBrasil  de Servidores de   Lineage2 " border="0" /></a>
                            <a href='http://www.top100arena.com/in.asp?id=96298' title='Lineage 2 private server'><img src='http://www.top100arena.com/hit.asp?id=96298&c=La2&t=1' alt='Lineage 2 private server' width='88px' height='31px' border='0'></a>                            
                            <a href="https://gtop100.com/topsites/Lineage-2/sitedetails/L2GRIFFON-96884?vote=1" title="Lineage 2 Private Server" target="_blank"><img src="https://gtop100.com/images/votebutton.jpg" border="0" alt="Lineage 2 Private Server"></a>
                            <br>
                          </p>
                        </div>
                    </div></td>
                  </tr>
                </tbody>
              </table></td>
            </tr>
          </tbody>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="116" background="img/footer.jpg"><div align="center"><strong>Lineage II  GRIFFON</strong><br>
              <br>
              <center></center>          </div></td>
        </tr>
    </table></td>
  </tr>
</table>
</body></html>