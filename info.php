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
<h1>Informações L2Griffon:</h1>
<link rel="stylesheet" type="text/css" href="../css/iframe.css" />

Confira agora todas as informações sobre o L2GRIFFON<br />
L2GRIFFON Interlude.

<br /><br />

<div id="home-info">.:::::Informações do Servidor:::::.</div><br />

<div id="info-info">.:::::Informações da Máquina:::::.</div>
Intel CORE2DUO E7400<br />
8GB DDR3 RAM<br />
HD 500 GB SATA 2<br />
2000 GB Tráfego<br />
100 MBPS UPLINK<br />
Windows Server 2003 64bits<br /><br />

<div id="info-info">.:::::Rates:::::.</div>
Experiencia (XP) - 1000x<br />
Skill Points (SP) - 1000x<br />
Adena (AD) - 1000x<br /><br />

<div id="info-info">.:::::Enchants:::::.</div>
Safe Enchant: +5<br />
Max Enchant Joias/Armor: +25<br />
Max Enchant Weapon: +25<br />
Normal Scroll: Chance 60%<br />
Blessed Scroll: Chance 85%<br /><br />

<div id="info-info">.:::::Server Info:::::.</div>
Iniciantes: Dynasty - Icarus<br />
Weapons Top: Vesper<br />
Armaduras Top: Vesper Gold ou Silver<br />
Joias Boss & Tatto's<br />
Acessórios: Helmet e Hood<br /><br />

<div id="info-info">.:::::Event's:::::.</div>
TVT<br />
CTF<br />
DM<br />
Crazy Hate<br />
Boss Event<br />
Chaos<br /><br />

<div id="info-info">.:::::Drop's & Area PVP:::::.</div>
Evente - Medal<br />