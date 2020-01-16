<?
 //Powered By Braghetto
 //Database
 //////////
 $dbhost="localhost"; //Host/IP from the MySQL Database
 $dbname="l2jdb";     //Name of Database (in many times it is 'l2jdb')
 $dbuser="root";      //Username to the MySQL Database
 $dbpass="";          //Passwort to the MySQL Database

 $sql=MYSQL_CONNECT($dbhost,$dbuser,$dbpass) or die ("Não Conecto");
 MYSQL_SELECT_DB($dbname) or die ("Data Base Não Existe");

//Site
$servername="L2 Griffon"; //NOME DO SEU SERVER
$yousite="l2griffon.servegame.com:8080"; //SITE DO SEU SERVER
$youslogan="L2 GRIFFON"; //SLOGAN DO SEU SERVER

//Downloads
$version="Lineage 2 Interlude"; //VERSÃO DO SERVER
$patch1="http:///"; //PATCH MIRROR 1
$lineagefull="http://www.gamershell.com/download_18458.shtml"; //LINEAGE FULL

//Vote Top 200
$urlvote="http://www.top100arena.com/in.asp?id=96298"; //URL PARA VOTAR NO SERVER
$imageurlvote="http://www.gamesites200.com/lineage2/vote.gif"; //IMAGEM PARA VOTAR

//Rules - Edit here
$rule1="REGRA 1 EDITE AQUI";
$rule2="REGRA 1 EDITE AQUI";
$rule3="REGRA 1 EDITE AQUI";
$rule4="REGRA 1 EDITE AQUI";
$rule5="REGRA 1 EDITE AQUI";
$rule6="REGRA 1 EDITE AQUI";
$rule7="REGRA 1 EDITE AQUI";
$rule8="REGRA 1 EDITE AQUI";

?>

