<?php
$L2JBS_config["mysql_host"]="localhost";	// MySQL IP
$L2JBS_config["mysql_port"]="3306";		// MySQP port
$L2JBS_config["mysql_db"]="l2jdb";		// l2jnet_db or your lineage 2 server database name
$L2JBS_config["mysql_login"]="root";		// MySQL Login name	
$L2JBS_config["mysql_password"]="";		// MySQL Password

error_reporting(0);
?>
<?php
$L2JBS_config["javascript_sort_method"]="bubble";
  $link = mysql_connect($L2JBS_config['localhost'].":".$L2JBS_config['3306'], $L2JBS_config['root'], $L2JBS_config['']);
  if (!$link)
    die("Couldn't connect to MySQL");
  @mysql_select_db($L2JBS_config['l2jdb'], $link)
    or die ('Error '.mysql_errno().': '.mysql_error());

?><style type="text/css">
<!--
body {
	background-image: url(images/bg1.gif);
}
a:link {
	color: #FF9900;
	font-weight: bold;
	text-decoration: none;
}
a:visited {
	color: #CCCCCC;
	text-decoration: none;
}
body,td,th {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
a:hover {
	color: #FF9933;
	text-decoration: none;
}
a:active {
	color: #FF6600;
	text-decoration: none;
}
.style12 {
	color: #FFFFFF;
	font-size: 36px;
}
-->
</style>
<script type="text/javascript">//<![CDATA[
function isAlphaNumeric(value)
{
  if (value.match(/^[a-zA-Z0-9]+$/))
    return true;
  else
    return false;
}
function checkform(f)
{
  if (f.account.value=="")
  {
    alert("Preencher todos os campos do formularios ");
    return false;
  }
  if (!isAlphaNumeric(f.account.value))
  {
    alert("Preencher todos os campos do formularios");
    return false;
  }
  if (f.oldpassword.value=="")
  {
    alert("Você colocou sua senha antiga");
    return false;
  }
  if (f.newpassword.value=="")
  {
    alert("Nenhuma senha detectada no campo");
    return false;
  }
  if (!isAlphaNumeric(f.newpassword.value))
  {
    alert("44444");
    return false;
  }
  if (f.newpassword2.value=="")
  {
    alert("Você não repetiu a senha");
    return false;
  }
  if (f.newpassword.value!=f.newpassword2.value)
  {
    alert(" Senha não é igual!  ");
    return false; 
  }
return true;
}
//]]></script>
</head>
<style type="text/css">
<!--
.style12 {	color: #FFFFFF;
	font-size: 36px;
}
-->
</style>
<body>
<form method="post" action="changepassword.php" onSubmit="return checkform(this)">
<center>
  <font face="Verdana, Arial, Helvetica, sans-serif"><strong><span class="style12">Trocar SENHA</span><font color="#FF0000" size="4"><br />
  <br />
  <img src="img/barra.png" alt="" width="419" height="29" /><br />
  </font></strong></font>  <br>
  <table>
 <tr>
  <td><div align="right"><b><font face="Trebuchet MS" size="2">Login - </font></b></div></td>
  <td>
  <font size="1"><b>
  <input maxlength="15" name="account" type="text" size="20" style="font-family: Trebuchet MS; " /></b></font></td>
 </tr>
 <tr>
  <td><div align="right"><b><font face="Trebuchet MS" size="2">Senha Atual - </font></b></div></td>
  <td><font size="1"><b>
  <input maxlength="15" name="oldpassword" type="password" size="20" style="font-family: Trebuchet MS; "  /></b></font></td>
 </tr>
 <tr>
  <td><div align="right"><b><font face="Trebuchet MS" size="2">Nova Senha - </font></b></div></td>
  <td><font size="1"><b>
  <input maxlength="15" name="newpassword" type="password" size="20" style="font-family: Trebuchet MS; "  /></b></font></td>
 </tr>
 <tr>
  <td><div align="right"><b><font face="Trebuchet MS" size="2">Repetir Senha - </font></b> </div></td>
  <td><font size="1"><b>
  <input maxlength="15" name="newpassword2" type="password" size="20" style="font-family: Trebuchet MS; "  /></b></font></td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;"><b>
  <font face="Trebuchet MS" size="1"><br /></font></b><font size="1"><b>
  <input type="submit" name="submit" value="Trocar SENHA" style="font-family: Trebuchet MS" />
  </b></font></td>
 </tr>
</table></center>
</form>
<center>
<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['oldpassword']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['newpassword']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['newpassword2']))
{
	if ($page='index.php' && $_POST['account'] && strlen($_POST['account'])<16 && $_POST['oldpassword'] && $_POST['newpassword'] && $_POST['newpassword']==$_POST['newpassword2'])
	{
  	$result=mysql_query("SELECT login,password FROM accounts WHERE login='".@mysql_real_escape_string($_POST['account'])."' AND password='".base64_encode(pack('H*', sha1($_POST['oldpassword'])))."'", $link)
	    or die ("Error: ".mysql_error());
  	if (mysql_num_rows($result))
  	{
    	mysql_query("UPDATE accounts SET password='".base64_encode(pack('H*', sha1($_POST['newpassword'])))."' WHERE login='".mysql_real_escape_string($_POST['account'])."'", $link)
      	or die ("Error: ".mysql_error());
	    print "<p style=\"font-weight: bold;\">Senha modificada. </p>";
  	}
  	else
	    print "<p class=\"error\"><font size=1 color=ffffff>Ouve algum erro, tente novamente. </font> </p>";
  	mysql_close($link);
	}
}
else
{
	echo "<font size=1 color=ffffff>As limitações não foram testadas para a segurança. Se você for confiável que tido a informação correta, consultar por favor à administração.</font>";
}
?>
</center>
           
