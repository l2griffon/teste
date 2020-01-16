function ctRoster(usrName, usrRank)
{
	var collection = "<div>Nome: <b>" +usrName+ "</b> Cargo: <b>" +usrRank+ "</b></div>";

	document.getElementById('rosterData').innerHTML = collection;
}
function ctRosterClean()
{
	document.getElementById('rosterData').innerHTML = "<div>Hover over a member...</div>";
}