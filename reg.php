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
.style11 {font-size: 12px}
.style12 {
	color: #FFFFFF;
	font-size: 36px;
}
-->
</style>
<script type="text/JavaScript">
<div align="center"><strong><font size="7" face="Verdana, Arial, Helvetica, sans-serif">Criar Conta</font></strong>
  <br />
  <br />
  <img src="img/barra.png" alt="" width="419" height="29" /><br />
</div>
<div align="center">
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
    alert("Preencha todos os campos!");
    return false;
  }
  if (!isAlphaNumeric(f.account.value))
  {
    alert("Preencha todos os campos!");
    return false;
  }
  if (f.password.value=="")
  {
    alert("Sem Senha ");
    return false;
  }
  if (!isAlphaNumeric(f.password.value))
  {
    alert("444444");
    return false;
  }
  if (f.password2.value=="")
  {
    alert("Você não repetiu a senha");
    return false;
  }
  if (f.password.value!=f.password2.value)
  {
    alert("Senhas não são iguais ");
    return false; 
  }
  return true;
}
//]]></script>
  <div align="center"><font face="Verdana, Arial, Helvetica, sans-serif"><strong><span class="style12">Criar CONTA</span><font color="#FF0000" size="4"><br />
          <br />
          <img src="img/barra.png" alt="" width="419" height="29" /><br /> 
  <br />
  [ Regra Principal ]</span></font></strong><br />
      <font size="3"><span class="style18"><br />
          </span></font><span class="style18"><span class="style16 style11">Antes de voce criar sua conta em nosso server &eacute; expressamente   necess&aacute;rio que entenda que isto &eacute; um servidor gratuito e privado &quot;de propriedade   particular&quot; n&atilde;o havendo contratante ou contratado. Ao criar sua conta, entenda   que voc&ecirc; n&atilde;o &eacute; um cliente de uma empresa que esta lhe prestando servi&ccedil;os e sim   que estar&aacute; criando uma conta em um servidor privado. Fazer doa&ccedil;&otilde;es para ajudar o   servidor se manter, n&atilde;o lhe trar&aacute; quaisquer beneficios de prioridade de   atendimento ou exigir que um administrador execute alguma tarefa solicitada por   voc&ecirc;.<br />
          Entenda que os Administradores do site est&atilde;o lhe prestando favores ao   dispor os servi&ccedil;os a sua pessoa jamais cumprindo   obriga&ccedil;&otilde;es.</span></span><span class="style11"></strong>
          </h4>
          </span></font><span class="style11">
          </span></div>
  <p align="center" class="style14"><font face="Verdana, Arial, Helvetica, sans-serif"><strong><font color="#FF0000"><span class="style15"><span class="style11">Se voc&ecirc; n&atilde;o concorda com os termos acima,   pedimos que por favor feche este site e n&atilde;o crie sua conta. Ao criar sua conta,   voc&ecirc; estar&aacute; automaticamente concordando com todo o texto descrito ACIMA !!!. </span></font></strong></font></div>
<form method="post" action="reg.php" onsubmit="return checkform(this)">
<center><table>
 <tr>
  <td><div align="right"><span class="style11"><b><font face="Trebuchet MS">Login - </font></b></span></div></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="text" name="account" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><div align="right"><span class="style11"><b><font face="Trebuchet MS">Senha - </font></b></span></div></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="password" name="password" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td><div align="right"><span class="style11"><b><font face="Trebuchet MS">Repetir Senha - </font></b></span></div></td>
  <td><font face="Trebuchet MS" size="1"><b>
  <input type="password" name="password2" maxlength="15" size="20" /></b></font></td>
 </tr>
 <tr>
  <td colspan="2" style="text-align: center;">
  <font size="1" face="Trebuchet MS"><b><br />
  <input type="submit" name="submit" value="Criar CONTA" />
  </b></font></td>
 </tr>
</table></center>
</form>

<?php
if(ereg("^([a-zA-Z0-9_-])*$", $_POST['account']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password']) && ereg("^([a-zA-Z0-9_-])*$", $_POST['password2']))
{
	if ($page="index.php" && $_POST['account'] && strlen($_POST['account'])<16 && strlen($_POST['account'])>3 && $_POST['password'] && $_POST['password2'] && $_POST['password']==$_POST['password2'])
	{	
		$check=mysql_query("select * from accounts where login='".$_POST['account']."'");
		$check1=mysql_num_rows($check);
		if($check1>0)
		{
			echo "<p clss='error'><b>Falha no Registro, Conta ja Existente .</b></p>";
		}
		else
		{
	  		mysql_query("INSERT INTO accounts (login, password, access_level) VALUES ('".$_POST['account']."', '".base64_encode(pack('H*', sha1($_POST['password'])))."', 0)", $link);
  			mysql_close($link);
	 		print '<p class="error"><b>Resgistro Completo... Conta Criada </b></p>';
		}
	}
	else
	{
  	print '<p class="error"><b> </b></p>'.mysql_error();
	}
}
else
{
	echo "As limitações não foram testadas para a segurança. Se você for confiável que tido a informação correta, consultar por favor à administração. ";
}
?>